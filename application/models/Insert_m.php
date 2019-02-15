<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_m extends CI_Model {

    function insert($table,$data) {
        return $this->db->insert($table, $data);
    }

    function get($table) {
        $query = $this->db->get($table);
        return $query->result();
    }

    function del($table, $id) {
        $this->db->where(array('username' => $id));
        return $this->db->delete($table);
    }

    function edit_data($where, $table) {
        $query = $this->db->get_where($table, $where);
        return $query->result();
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

}

/* End of file ModelName.php */
?>