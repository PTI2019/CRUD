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

    function edit($table, $data) {
        return $this->db->update($table, $data);
    }

}

/* End of file ModelName.php */
?>