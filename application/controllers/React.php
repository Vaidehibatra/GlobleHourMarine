<?php
defined('BASEPATH') or exit('No direct script access allowed');
class React extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); // Load the URL helper
    }
    public function index()
    {
        $this->load->view('new');
        $this->load->view('footer');
        $this->load->view('header');
    }

    public function about_us() {
        $this->load->view('new');
        $this->load->view('footer');
        $this->load->view('header');
    }

    public function portfolio() {
        $this->load->view('new');
        $this->load->view('footer');
        $this->load->view('header');
    }

    public function h_our_history() {
        $this->load->view('header'); // Load the header first
        $this->load->view('new');    // Load the main content view
        $this->load->view('footer');  // Load the footer last
    }
    public function new()
    {
        $this->load->view('new');
    }

    public function crude()
    {
        $this->load->view('crude_oil');
        $this->load->view('header');
        $this->load->view('footer');
    }
    public function footer()
    {
        $this->load->view('footer');
    }
    public function header()
    {
        $this->load->view('header');
    }
    public function newfaq()
    {
        $this->load->view('header');
        // $this->load->view('newfaq');
        $this->load->view('footer');
    }
}
