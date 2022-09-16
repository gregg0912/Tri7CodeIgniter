<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function index()
    {
        $this->load->model('UserModel');

        $usermodel = new UserModel;
        $this->data['users'] = $usermodel->user_data();
        $this->load->view('templates/header');
        $this->load->view('user/index', $this->data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('user/create.php');
        $this->load->view('templates/footer');
    }
}
