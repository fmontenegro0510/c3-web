<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

    public function index() {
        $this->load->view('sections/header');
        $this->load->view('components/menu');
        $this->load->view('pages/seccion_principal');
        $this->load->view('components/modal_concursos');
        $this->load->view('components/whatsapp');
        $this->load->view('components/chatbot');
        $this->load->view('components/spinner_principal');

        $this->load->view('sections/footer');
    }
	public function error404() {
        $this->load->view('sections/header');
        $this->load->view('components/menu');
        $this->load->view('pages/404');
        $this->load->view('components/chatbot');
        $this->load->view('components/whatsapp');
        $this->load->view('sections/footer_simple');
    }

	
}
