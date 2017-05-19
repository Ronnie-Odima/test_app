<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

    //Load login page
    public function login()
    {
        $this->load->view('backend/auth/login');
    }

    //Perform login operation
    public function login_user()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $login_action = $this->Auth_model->login_action($username, $password);
        if($login_action == true) {
            $u_id = $this->db->get_where('tbl_users', array('username' => $username, 'password' => $password))->row('id');

            $session = array(
                'u_id' => $u_id,
            );

            $this->session->set_userdata('loggedin', $session);

            redirect('admin/dashboard');
        }
        else {
            $message = array('message' => 'Incorrect username or password',
                'class' => 'alert alert-danger');
            $this->session->set_flashdata('login_alert', $message);

            redirect('auth/login');
        }

    }

    //logout user
    public function logout()
    {
        $this->session->sess_destroy();

        redirect('auth/login');
    }
}