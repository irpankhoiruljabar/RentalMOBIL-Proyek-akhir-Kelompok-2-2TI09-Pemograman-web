<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perawatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("perawatan_model");
    }
    public function index()
    {
        $data['title'] = "Perawatan Kendaraan";
        $data['perawatan'] = $this->perawatan_model->join()->result();
        $this->load->view('template/head', $data);
        $this->load->view('template/side', $data);
        $this->load->view('perawatan');
        $this->load->view('template/foot');
    }
    public function tambah()
    {
        $data['title'] = "Tambah Perawatan Kendaraan";
        $this->load->view('template/head', $data);
        $this->load->view('template/side', $data);
        $this->load->view('tambah_perawatan');
        $this->load->view('template/foot');
    }
    public function tambah_aksi()
    {
        $data = array(
            'tanggal' => $this->input->post('tgl_pr'),
            'km_mobil' => $this->input->post('km_mobil'),
            'deskripsi' => $this->input->post('des'),
            'mobil_id ' => $this->input->post('mbl_id'),
            'jenis_perawatan_id ' => $this->input->post('j_id'),
        );
        $this->perawatan_model->insert_data($data, 'perawatan');
        redirect('perawatan');
    }
    public function edit($id)
    {
        $data = array(
            'id' => $id,
            'tanggal' => $this->input->post('tgl_pr'),
            'km_mobil' => $this->input->post('km_mobil'),
            'deskripsi' => $this->input->post('des'),
            'mobil_id ' => $this->input->post('mbl_id'),
            'jenis_perawatan_id ' => $this->input->post('j_id'),
        );
        $this->perawatan_model->update_data($data, 'perawatan');
        redirect('perawatan');
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->perawatan_model->delete_data($where, 'perawatan');
        redirect('perawatan');
    }

    public function masukan_bayar($id)
    {
        $data = array(
            'id' => $id,
            'biaya' => $this->input->post('bayar'),

        );
        $this->perawatan_model->update_data($data, 'perawatan');
        redirect('perawatan');
    }
}