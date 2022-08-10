<?php defined('BASEPATH') or exit('No direct script access allowed');


class Frontend extends CI_Controller
{
    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('includes/script');
        $this->load->view('main');
        $this->load->view('component/todaylist');
        $this->load->view('component/todayinterest');
        $this->load->view('component/search');
        $this->load->view('component/bestseller');
        $this->load->view('component/userreview');
        $this->load->view('component/magiccontent');
        $this->load->view('component/content');
        $this->load->view('includes/footer');
    }
}
