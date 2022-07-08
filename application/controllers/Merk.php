<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Merk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("merk_model");
    }

    public function index()
    {
        $data['title'] = "Data Merk";
        $data['merk'] = $this->merk_model->get_data('merk')->result();
        $this->load->view('template/head', $data);
        $this->load->view('template/side', $data);
        $this->load->view('merk', $data);
        $this->load->view('template/foot');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Merk";

        $this->load->view('template/head', $data);
        $this->load->view('template/side', $data);
        $this->load->view('tambah_merk');
        $this->load->view('template/foot');
    }
    public function tambah_aksi()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'produk' => $this->input->post('prdk'),
        );
        $this->merk_model->insert_data($data, 'merk');
        redirect('merk');
    }
    public function edit($id)
    {
        $data = array(
            'id' => $id,
            'nama' => $this->input->post('nama'),
            'produk' => $this->input->post('prdk'),
        );
        $this->merk_model->update_data($data, 'merk');
        redirect('merk');
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->merk_model->delete_data($where, 'merk');
        redirect('merk');
    }
}