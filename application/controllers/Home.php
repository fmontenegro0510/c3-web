<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->output->enable_profiler(TRUE);
	}

    public function index() {
        $this->load->view('sections/header');
        $this->load->view('components/menu');
        $this->load->view('pages/seccion_principal');
        $this->load->view('components/modal_concursos');
        $this->load->view('components/modal_anuncio');
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

	public function autoridades(){
			$this->load->view('sections/header');
			$this->load->view('components/menu');
			$this->load->view('pages/integracion');
			$this->load->view('components/whatsapp');
			$this->load->view('components/chatbot');
			$this->load->view('sections/footer');		
	} 

	public function quienes_somos(){
		$this->load->view('sections/header');
		$this->load->view('components/menu');
		$this->load->view('pages/sobre_nosotros');
		$this->load->view('components/whatsapp');
		$this->load->view('components/chatbot');
		$this->load->view('sections/footer');
	}

	public function normativa(){
		$this->load->view('sections/header');
		$this->load->view('components/menu');
		$this->load->view('pages/normativa');
		$this->load->view('components/whatsapp');
		$this->load->view('components/chatbot');
		$this->load->view('sections/footer');
	}

	public function concursos(){
		$this->load->view('sections/header');
		$this->load->view('components/menu');
		$this->load->view('pages/concursos');
		$this->load->view('components/whatsapp');
		$this->load->view('components/chatbot');
		$this->load->view('sections/footer');
	}

	public function contacto(){
		$this->load->view('sections/header');
		$this->load->view('components/menu');
		$this->load->view('pages/contacto');
		$this->load->view('components/whatsapp');
		$this->load->view('components/chatbot');
		$this->load->view('sections/footer');
	}

	public function inscripciones(){
		$this->load->view('sections/header');
		$this->load->view('components/menu');
		$this->load->view('pages/inscripciones');
		$this->load->view('components/whatsapp');
		$this->load->view('components/chatbot');
		$this->load->view('sections/footer');
	}

	public function propuestas(){
		$this->load->view('sections/header');
		$this->load->view('components/menu');
		$this->load->view('pages/propuestas');
		$this->load->view('components/whatsapp');
		$this->load->view('components/chatbot');
		$this->load->view('sections/footer');
	}

	public function sentencias(){
		$this->load->view('sections/header');
		$this->load->view('components/menu');
		$this->load->view('pages/sentencias');
		$this->load->view('components/whatsapp');
		$this->load->view('components/chatbot');
		$this->load->view('sections/footer');
	}

	public function prensa_blog(){
		$this->load->view('sections/header');
		$this->load->view('components/menu');
		$this->load->view('pages/prensa_blog');
		$this->load->view('components/whatsapp');
		$this->load->view('components/chatbot');
		$this->load->view('sections/footer');
	}

	public function prensa_galeria(){
		$this->load->view('sections/header');
		$this->load->view('components/menu');
		$this->load->view('pages/prensa_galeria');
		$this->load->view('components/whatsapp');
		$this->load->view('components/chatbot');
		$this->load->view('sections/footer');
	}



	
}
