<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = 'Visi Misi MTs Negeri 1 Kolaka';

        $this->load->view('templates/depan/header', $data);
        $this->load->view('templates/depan/navbar');
        $this->load->view('depan/home/visi');
        $this->load->view('templates/depan/footer');
    }
}
