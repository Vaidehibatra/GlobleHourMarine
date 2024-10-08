<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whatsapp extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Whatsapp_model');
    }
    public function new(){
        $this->load->view('new');
    }
    public function send_message() {
        $to = '7814850731'; // Replace with the recipient's phone number
        $message = 'Hello, this is a message from CodeIgniter!';

        $response = $this->Whatsapp_model->sendMessage($to, $message);

        if (isset($response['messages'])) {
            echo 'Message sent successfully!';
        } else {
            echo 'Error sending message: ' . $response['error']['message'];
        }
    }
    public function webhook() {
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);
    
        // Process incoming message
        if (isset($data['entry'])) {
            foreach ($data['entry'] as $entry) {
                foreach ($entry['changes'] as $change) {
                    $messages = $change['value']['messages'];
                    foreach ($messages as $message) {
                        // Access message data here
                        $from = $message['from'];
                        $body = $message['text']['body'];
                        
                        // Respond to the message or save it in the database
                    }
                }
            }
        }
    }
    
}
