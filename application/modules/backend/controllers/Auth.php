<?php defined('BASEPATH') or exit('No direct script access allowed');


class Auth extends BackendController
{
    public function index()
    {
        $this->load->view('include/header');
        $this->load->view('login');
        $this->load->view('include/footer');
    }

    public function register()
    {
        $this->load->view('include/header');
        $this->load->view('register');
        $this->load->view('include/footer');
    }
}
