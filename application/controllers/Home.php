<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    //Home Page
    public function index()
    {
        $data['title'] = 'Dakshraj';
        $this->load->view('home/templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('home/templates/footer', $data);
    }
}
