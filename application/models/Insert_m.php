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

}

/* End of file ModelName.php */
?>