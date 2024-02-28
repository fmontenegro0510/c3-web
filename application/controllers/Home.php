<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        $this->load->view('sections/header');
        $this->load->view('components/menu');
        $this->load->view('pages/seccion_principal');
        $this->load->view('components/chatbot');
        $this->load->view('components/whatsapp');
        $this->load->view('sections/footer');
    }
	
}
