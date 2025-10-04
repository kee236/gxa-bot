<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('admin/Auth_model', 'auth_model'); // Load the new Auth Model
        $this->load->helper('url');
    }

    public function login() {
        // If already logged in, redirect to dashboard
        if ($this->session->userdata('is_logged_in')) {
            redirect('admin');
        }

        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->auth_model->validate_login($username, $password)) {
                // Set session data upon successful login
                $this->session->set_userdata('is_logged_in', TRUE);
                $this->session->set_userdata('username', $username);
                redirect('admin'); // Redirect to Dashboard
            } else {
                $data['error_message'] = 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง';
            }
        }
        
        // Load the login form view
        $this->load->view('admin/login_view', $data ?? []);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
