<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sewa_mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("sewa_mobil_model");
    }
    public function index()
    {

        $this->load->view('sewa_mobil');
    }
    public function tambah_aksi()
    {
        $data = array(
            'tanggal_mulai' => $this->input->post('tgl_mulai'),
            'tanggal_akhir' => $this->input->post('tgl_akhir'),
            'tujuan' => $this->input->post('tjn'),
            'noktp' => $this->input->post('no_ktp'),
            'users_id' => '1',
            'mobil_id' => $this->input->post('mobil_id'),
        );
        $this->sewa_mobil_model->insert_data($data, 'sewa');
        redirect('terimakasih');
    }
}