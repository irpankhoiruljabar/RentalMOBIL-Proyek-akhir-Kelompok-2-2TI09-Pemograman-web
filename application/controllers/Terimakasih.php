<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Terimakasih extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Sewa Mobil";
        $this->load->view('terimakasih');
    }
}