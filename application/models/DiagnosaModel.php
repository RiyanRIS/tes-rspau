<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DiagnosaModel extends CI_Model {

    private $table = 'diagnosa';

	public function getAll()
	{
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
	}

}
