<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasienModel extends CI_Model {

    private $table = 'pasien';

	public function getAll()
	{
        $this->db->from($this->table)->select($this->table.'.*, diagnosa.diagnosa')->join('diagnosa', $this->table.".id_diagnosa = diagnosa.id");

        $query = $this->db->get();
        return $query->result();
	}

    public function getById($id)
	{
        $this->db->from($this->table)->where('id', $id);

        $query = $this->db->get();
        return $query->result();
	}

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        return $this->db->update($this->table, $data, $id);
    }
    
    public function delete($id)
    {
        return $this->db->delete($this->table, $id);
    }
}
