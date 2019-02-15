<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('insert_m');
		$arr = array(
			'data_username' => $this->insert_m->get('user')
		);
		$this->load->view('welcome_message', $arr);
	}

	public function insert()
	{
		$this->load->model('insert_m');
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'id_role' => 2
		);
		if($this->insert_m->insert('user',$data)) {
			redirect('welcome');
			exit;
		} else {
			echo "gagal";
		}
	}

	public function del($id) {
		$this->load->model('insert_m');
		if($this->insert_m->del('user', $id)) {
			redirect('welcome');
			exit;
		} else {
			echo "gagal";
		}
	}

	public function edit($id)
	{
		$this->load->model('insert_m');
		$where = array('username' => $id);
		$data['user'] = $this->insert_m->edit_data($where,'user');
		$this->load->view('v_edit',$data);
	}

	public function update()
	{
		$username = $this->input->post('username');
		$pass = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => $pass
		);

		$where = array (
			'username' => $username
		);
		$this->load->model('insert_m');
		$this->insert_m->update_data($where,$data,'user');
		redirect('welcome');
	}
}
