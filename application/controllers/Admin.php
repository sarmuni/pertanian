<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('auth_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Administrator';
        // $this->load->view('templates/auth_header', $data);
        // $this->load->view('templates/auth_sidebar', $data);
        $this->load->view('template_neura/index', $data);
        // $this->load->view('templates/auth_menu_footer', $data);
        // $this->load->view('templates/auth_footer', $data);
    }
}
