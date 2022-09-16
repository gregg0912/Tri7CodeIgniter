<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function index()
    {
        $this->load->model('UserModel');

        $usermodel = new UserModel;
        $this->data['users'] = $usermodel->users();
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

    public function store()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('position', 'Position', 'trim|required');

        if ( $this->form_validation->run() )
        {
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'position' => $this->input->post('position'),
                'created_date' => date("Y-m-d")
            ];

            $this->load->model('UserModel');

            $usermodel = new UserModel;
            $usermodel->store($data);

            redirect(base_url());
        }
        else
        {
            $this->create();
        }
    }

    public function edit($id)
    {
        $this->load->model('UserModel');
        $usermodel = new UserModel;
        $this->data['user'] = $usermodel->fetchUserById($id);

        $this->load->view('templates/header');
        $this->load->view('user/edit.php', $this->data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('position', 'Position', 'trim|required');

        if ( $this->form_validation->run() )
        {
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'position' => $this->input->post('position'),
                'created_date' => date("Y-m-d")
            ];

            $this->load->model('UserModel');

            $usermodel = new UserModel;
            $usermodel->update($data, $id);

            redirect(base_url());
        }
        else
        {
            $this->edit($id);
        }
    }

    public function delete($id)
    {
        $this->load->model('UserModel');
        $usermodel = new UserModel;
        $usermodel->delete($id);

        redirect(base_url());
    }
}
