<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
    }

    public function index()
    {
        $data['title'] = "Data user";
        $data['user'] = $this->user_model->get_data('users')->result();
        $this->load->view('template/head', $data);
        $this->load->view('template/side', $data);
        $this->load->view('user', $data);
        $this->load->view('template/foot');
    }

    public function tambah()
    {
        $data['title'] = "Tambah user";

        $this->load->view('template/head', $data);
        $this->load->view('template/side', $data);
        $this->load->view('tambah_user');
        $this->load->view('template/foot');
    }
    public function tambah_aksi()
    {
        $data = array(
            'last_login' => time(),
            'created_at' => time(),
            'username' => $this->input->post('nama'),
            'password' => $this->input->post('pass'),
            'email' => $this->input->post('email'),
            'status' => $this->input->post('sts'),
            'role' => $this->input->post('role'),
        );
        $this->user_model->insert_data($data, 'users');
        redirect('user');
    }
    public function edit($id)
    {
        $data = array(
            'id' => $id,
            'username' => $this->input->post('nama'),
            'password' => $this->input->post('pass'),
            'email' => $this->input->post('email'),
            'status' => $this->input->post('sts'),
            'role' => $this->input->post('role'),
        );
        $this->user_model->update_data($data, 'users');
        redirect('user');
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->user_model->delete_data($where, 'users');
        redirect('user');
    }
}