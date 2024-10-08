<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Book extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session'); // Load session library
        $this->load->config('email');
        $this->load->library('form_validation');
        $this->load->library('email'); // Load email library

    }
   
    public function new_page()
    {
        $this->load->view('new_page');
    }
    public function contact_us()
    {
        $this->load->view('header');
        $this->load->view('contact_us');
        $this->load->view('footer');
    }
    public function faq()
    {
        $this->load->view('header');
        $this->load->view('faq');
        $this->load->view('footer');
    }
    // public  function send_email(){

    //         // Set validation rules
    //         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    //         if ($this->form_validation->run() == FALSE) {
    //             // Set flash data for validation errors and reload the view
    //             $this->session->set_flashdata('failure', validation_errors());
    //             $this->load->view('react');
    //         } else {
    //             // Get the email from the form input
    //             $email = $this->input->post('email');
    //             $this->session->set_userdata('email', $email);

    //             // Send the email to the user
    //             $this->load->library('email');
    //             $this->email->from($email); // Your email
    //             $this->email->to('globlehourmarine@gmail.com', 'Natasha'); // Recipient's email
    //             $this->email->subject('Thank You for Booking');
    //             $this->email->message('Thank you for your booking! We will get back to you soon.');

    //             if ($this->email->send()) {
    //                 // Set success message and load the view
    //                 $this->session->set_flashdata('success', 'Email sent successfully!');
    //                 $this->load->view("react");

    //             } else {
    //                 // Display the error message if email sending fails
    //                 echo "Failed to send email!";
    //                 echo $this->email->print_debugger();
    //             }
    //         }
    //     }

    public function send_email()
    {
        // Set form validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        // Check if form validation passed
        if ($this->form_validation->run() == FALSE) {
            // Set flash data for validation errors
            $this->session->set_flashdata('failure', validation_errors());
            redirect('contact_us');  // Redirect to the contact form
        } else {
            // Get form data
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            // Load the email library
            $this->load->library('email');

            // Configure email settings
            $this->email->from($email, $name);
            $this->email->to('globlehourmarine@gmail.com'); // Replace with the actual recipient's email address
            $this->email->subject($subject);
            $this->email->message("Name: $name\n\nMessage: $message");

            // Send email and check for success or failure
            if ($this->email->send()) {
                // Set success flashdata
                $this->session->set_flashdata('success', 'Email sent successfully!');
            } else {
                // Set failure flashdata
                $this->session->set_flashdata('failure', 'Failed to send email. Please try again.');
                // Log email error for debugging
                log_message('error', $this->email->print_debugger());
            }

            // Redirect back to the contact form page
            redirect('contact_us');
        }
    }
}
