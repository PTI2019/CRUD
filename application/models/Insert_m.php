<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_m extends CI_Model {

    function insert($table,$data) {
        return $this->db->insert($table, $data);
    }

}

/* End of file ModelName.php */
?>