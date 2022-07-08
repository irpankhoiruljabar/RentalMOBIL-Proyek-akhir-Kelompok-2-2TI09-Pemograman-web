<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mobil_model");
    }
    public function index()
    {
        $data['title'] = " Data Mobil";
        $data['mobil'] = $this->mobil_model->join()->result();
        $this->load->view('template/head', $data);
        $this->load->view('template/side', $data);
        $this->load->view('mobil');
        $this->load->view('template/foot');
    }
    public function tambah()
    {
        $data['title'] = "Tambah mobil Kemdaraan";
        $this->load->view('template/head', $data);
        $this->load->view('template/side', $data);
        $this->load->view('tambah_mobil');
        $this->load->view('template/foot');
    }
    public function tambah_aksi()
    {
        $nopol = $this->input->post('nop');
        $warna  = $this->input->post('warna');
        $biaya_sewa = $this->input->post('bya');
        $deskripsi = $this->input->post('des');
        $cc  = $this->input->post('cc');
        $tahun  = $this->input->post('thn');
        $merk_id  = $this->input->post('mbl');
        $foto = $_FILES['foto'];
        if ($foto = '') {
            # code...
        } else {
            $config['upload_path']           = './asset/foto';
            $config['allowed_types']         = 'jpg|png|gif|jpeg';

            $this->load->Library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo 'upload gagal';
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(

            'nopol' => $nopol,
            'warna' => $warna,
            'biaya_sewa' => $biaya_sewa,
            'deskripsi' => $deskripsi,
            'cc' => $cc,
            'tahun' => $tahun,
            'merk_id' => $merk_id,
            'foto'   => $foto

        );
        $this->db->insert('mobil', $data);
        redirect('mobil');
    }
    public function edit($id)
    {
        $id = $this->input->post('id');
        $nopol = $this->input->post('nop');
        $warna  = $this->input->post('warna');
        $biaya_sewa = $this->input->post('bya');
        $deskripsi = $this->input->post('des');
        $cc  = $this->input->post('cc');
        $tahun  = $this->input->post('thn');
        $merk_id  = $this->input->post('mbl');
        $foto = $_FILES['foto'];
        if ($foto = '') {
            $data = array(
                'nopol' => $nopol,
                'warna' => $warna,
                'biaya_sewa' => $biaya_sewa,
                'deskripsi' => $deskripsi,
                'cc' => $cc,
                'tahun' => $tahun,
                'merk_id' => $merk_id,
                'foto'   => $foto

            );
            $this->db->where('id', $id);
            $this->db->update('mobil', $data);
            redirect('mobil');
        } else {
            $config['upload_path']           = './asset/foto';
            $config['allowed_types']         = 'jpg|png|gif|jpeg';

            $this->load->Library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo 'upload gagal';
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(

            'nopol' => $nopol,
            'warna' => $warna,
            'biaya_sewa' => $biaya_sewa,
            'deskripsi' => $deskripsi,
            'cc' => $cc,
            'tahun' => $tahun,
            'merk_id' => $merk_id,
            'foto'   => $foto

        );
        $this->mobil_model->update_data($data, 'mobil');
        redirect('mobil');
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->mobil_model->delete_data($where, 'mobil');
        redirect('mobil');
    }
}