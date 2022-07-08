<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        parent::__construct();
        $this->load->model("register_model");
    }
    public function index()
    {

        $this->load->view('register');
    }

    public function regis()
    {
        $this->form_validation->set_rules('name', 'username', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules('pass', 'Password', 'required|trim|min_length[3]|matches[pas]');
        $this->form_validation->set_rules('pas', 'Password', 'required|trim|matches[pass]');
        if ($this->form_validation->run() == false) {
            $this->load->view('register');
        } else {
            $data = array(


                'username' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('pass'),
                'created_at' => time(),
                'last_login' => time(),
                'status' => 0,
                'role' => 'admin'
            );
            $this->register_model->insert_data($data, 'users');
            redirect('Login');
        }
    }
}