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

	public function fileticket()
	{
		$data['title']="Ticketing System";

		$this->load->view('templates/header',$data);
		$this->load->view('pages/fileticket');
		$this->load->view('templates/footer');
	}

	public function registration()
	{
		$data['title']="Ticketing System";

		$this->load->view('templates/header',$data);
		$this->load->view('pages/registration');
		$this->load->view('templates/footer');
	}

	public function ticketManagement()
	{
		$data['title']="Ticketing System";

		$this->load->view('templates/header',$data);
		$this->load->view('pages/ticketManagement');
		$this->load->view('templates/footer');
	}
}
