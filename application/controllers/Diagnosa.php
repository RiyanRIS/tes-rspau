<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('DiagnosaModel');
        $this->load->model('PasienModel');
    }

	public function index()
	{
        $data['list_pasien'] = $this->PasienModel->getAll();

		$this->load->view('diagnosa', $data);
	}

    public function tambah()
	{
        $data['list_diagnosa'] = $this->DiagnosaModel->getAll();
		$this->load->view('tambah', $data);
	}

    function tambahAksi(){
        if($this->input->post('id_diagnosa') == 'Pilih Diagnosa'){
            $this->session->set_flashdata('msg', '<div class="alert alert-danger">Belum memilih diagnosa</div>');
            redirect("diagnosa/tambah");
            die();
        }
        $insertData = array(
            "nama" => $this->input->post('nama'),
            "no_rm" => $this->input->post('no_rm'),
            "umur" => $this->input->post('umur'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "id_diagnosa" => $this->input->post('id_diagnosa')
        );

        $this->PasienModel->save($insertData);
        $this->session->set_flashdata('msg', '<div class="alert alert-success">Data Berhasil Disimpan</div>');
        redirect("diagnosa");
    }

    public function ubah($id = null)
	{
        if(!isset($id)){
            $this->session->set_flashdata('msg', '<div class="alert alert-danger">Id kosong, ulangi lagi.</div>');
            redirect("diagnosa");
            die();
        }

        $data['pasien'] = $this->PasienModel->getById($id);
        $data['list_diagnosa'] = $this->DiagnosaModel->getAll();

		$this->load->view('edit', $data);
	}

    public function ubahAksi(){
        if($this->input->post('id_diagnosa') == 'Pilih Diagnosa'){
            $this->session->set_flashdata('msg', '<div class="alert alert-danger">Belum memilih diagnosa</div>');
            redirect("diagnosa/ubah/".$this->input->post('id'));
            die();
        }

        $insertData = array(
            "nama" => $this->input->post('nama'),
            "no_rm" => $this->input->post('no_rm'),
            "umur" => $this->input->post('umur'),
            "jenis_kelamin" => $this->input->post('jk'),
            "id_diagnosa" => $this->input->post('id_diagnosa')
        );

        $this->PasienModel->update(array( 'id' => $this->input->post('id')), $insertData);
        $this->session->set_flashdata('msg', '<div class="alert alert-success">Data Berhasil Diubah</div>');
        redirect("diagnosa");
    }

    public function hapus($id = null){
        if(!isset($id)){
            $this->session->set_flashdata('msg', '<div class="alert alert-danger">Id kosong, ulangi lagi.</div>');
            redirect("diagnosa");
            die();
        }

        $this->PasienModel->delete(array( 'id' => $id));
        $this->session->set_flashdata('msg', '<div class="alert alert-success">Data Berhasil Dihapus</div>');
        redirect("diagnosa");

    }
}
