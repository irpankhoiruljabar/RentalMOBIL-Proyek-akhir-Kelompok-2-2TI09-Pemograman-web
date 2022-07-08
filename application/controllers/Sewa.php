<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sewa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("sewa_model");
    }

    public function index()
    {
        $data['title'] = "Data sewa";
        $data['sewa'] = $this->sewa_model->join()->result();
        $this->load->view('template/head', $data);
        $this->load->view('template/side', $data);
        $this->load->view('sewa', $data);
        $this->load->view('template/foot');
    }

    public function tambah()
    {
        $data['title'] = "Tambah sewa";

        $this->load->view('template/head', $data);
        $this->load->view('template/side', $data);
        $this->load->view('tambah_sewa');
        $this->load->view('template/foot');
    }
    public function tambah_aksi()
    {
        $data = array(
            'tanggal_mulai' => $this->input->post('tgl_mulai'),
            'tanggal_akhir' => $this->input->post('tgl_akhir'),
            'tujuan' => $this->input->post('tjn'),
            'noktp' => $this->input->post('no_ktp'),
            'users_id' => $this->input->post('usr_id'),
            'mobil_id' => $this->input->post('mobil_id'),
        );
        $this->sewa_model->insert_data($data, 'sewa');
        redirect('sewa');
    }



    public function edit($id)
    {
        $data = array(
            'id' => $id,
            'tanggal_mulai' => $this->input->post('tgl_mulai'),
            'tanggal_akhir' => $this->input->post('tgl_akhir'),
            'tujuan' => $this->input->post('tjn'),
            'noktp' => $this->input->post('no_ktp'),
            'users_id' => $this->input->post('usr_id'),
            'mobil_id' => $this->input->post('mobil_id'),
        );
        $this->sewa_model->update_data($data, 'sewa');
        redirect('sewa');
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->sewa_model->delete_data($where, 'sewa');
        redirect('sewa');
    }
}