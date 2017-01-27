<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{

		$data['title']="Ticketing System";

		$this->load->view('templates/header',$data);
		$this->load->view('templates/navigation');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}

	public function ticket_request()
	{
		$data['title']="Ticketing System";

		$this->load->view('templates/header',$data);
<<<<<<< HEAD
		$this->load->view('templates/navigation');
		$this->load->view('pages/fileticket');
=======
		$this->load->view('pages/ticket_request');
>>>>>>> 183311fb0ab805d7fe26c25591555f9ed894a1f2
		$this->load->view('templates/footer');
	}

	public function registration()
	{
		$data['title']="Ticketing System";

		$this->load->view('templates/header',$data);
		$this->load->view('templates/navigation');
		$this->load->view('pages/registration');
		$this->load->view('templates/footer');
	}

	public function tickets()
	{
		$data['title']="Ticketing System";

		$this->load->view('templates/header',$data);
<<<<<<< HEAD
		$this->load->view('templates/navigation');
		$this->load->view('pages/ticketManagement');
=======
		$this->load->view('pages/tickets');
>>>>>>> 183311fb0ab805d7fe26c25591555f9ed894a1f2
		$this->load->view('templates/footer');
	}
}
