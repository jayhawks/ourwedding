<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wedding extends CI_Controller {

	public function index()
	{
		//redirect to home to make navigation as easy as possible
		// i.e. foo.com and foo.com/index are the same thing
		$this->home();
	}

	function home()
	{
		$data['title'] = "Home";

		$this->load->view("wedding_header", $data);
		$this->load->view("site_nav");
		$this->load->view("content_wedding_home");
		$this->load->view("site_footer");
	}
	
	function registry()
	{
		$data['title'] = "Registry";
		
		$this->load->view("wedding_header", $data);
		$this->load->view("site_nav");
		$this->load->view("content_wedding_registry");
		$this->load->view("site_footer");
	}
}
