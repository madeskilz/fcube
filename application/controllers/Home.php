<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$page_data['pg_title'] = "Home";
		$this->load->view('landing/home', $page_data);
	}
	public function faq()
	{
		$page_data['pg_title'] = "F A Q";
		$this->load->view('landing/faq', $page_data);
	}
	public function contact()
	{
		$page_data['pg_title'] = "Contact";
		$this->load->view('landing/contact', $page_data);
	}
	public function about()
	{
		$page_data['pg_title'] = "About";
		$this->load->view('landing/about', $page_data);
	}
}
