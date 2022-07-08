<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_perawatan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("jenis_perawatan_model");
    }

    public function index()
    {
        $data['title'] = "Data jenis perawatan";
        $data['jenis_perawatan'] = $this->jenis_perawatan_model->get_data('jenis_perawatan')->result();
        $this->load->view('template/head', $data);
        $this->load->view('template/side', $data);
        $this->load->view('jenis_perawatan', $data);
        $this->load->view('template/foot');
    }

    public function tambah()
    {
        $data['title'] = "Tambah jenis perawatan";

        $this->load->view('template/head', $data);
        $this->load->view('template/side', $data);
        $this->load->view('tambah_jenis');
        $this->load->view('template/foot');
    }
    public function tambah_aksi()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
        );
        $this->jenis_perawatan_model->insert_data($data, 'jenis_perawatan');
        redirect('jenis_perawatan');
    }
    public function edit($id)
    {
        $data = array(
            'id' => $id,
            'nama' => $this->input->post('nama'),
        );
        $this->jenis_perawatan_model->update_data($data, 'jenis_perawatan');
        redirect('jenis_perawatan');
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->jenis_perawatan_model->delete_data($where, 'jenis_perawatan');
        redirect('jenis_perawatan');
    }
}