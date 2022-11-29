<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    //Home Page
    public function index()
    {
        $data['title'] = 'Home-FET';
        $this->load->view('home/templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('home/templates/footer', $data);
    }
    //Twin Screw And Barrel
    public function twin_screw_and_barrel()
    {
        $data['title'] = 'Twin Screw And Barrel-FET';
        $this->load->view('home/templates/header', $data);
        $this->load->view('home/twin_screw_and_barrel', $data);
        $this->load->view('home/templates/footer', $data);
    }

    //Die Head and Dies
    public function die_head_and_dies()
    {
        $data['title'] = 'Die Head and Dies-FET';
        $this->load->view('home/templates/header', $data);
        $this->load->view('home/die_head_and_dies', $data);
        $this->load->view('home/templates/footer', $data);
    }

    public function consultancy(){
        $data['title'] = 'Consultancy-FET';
        $this->load->view('home/templates/header', $data);
        $this->load->view('home/consultancy', $data);
        $this->load->view('home/templates/footer', $data);
    }

    //Contact Us
    public function contact_us()
    {
        $data['title'] = 'Contact us-FET';
        $this->load->view('home/templates/header', $data);
        $this->load->view('home/contact_us', $data);
        $this->load->view('home/templates/footer', $data);
    }

}
