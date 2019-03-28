<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$page_data['pg_title'] = "Dashboard";
		$page_data['pg_name'] = "dashboard";
		$this->load->view('admin/dashboard', $page_data);
	}
	public function wallet_funding()
	{
		$page_data['pg_title'] = "Wallet Funding";
		$page_data['pg_name'] = "wallet";
		$this->load->view('admin/wallet_funding', $page_data);
	}
	public function manage_services()
	{
		$page_data['pg_title'] = "Manage Services";
		$page_data['pg_name'] = "services";
		$this->load->view('admin/manage_services', $page_data);
	}
	public function manage_plans()
	{
		$page_data['pg_title'] = "Manage Plans";
		$page_data['pg_name'] = "plans";
		$this->load->view('admin/manage_plans', $page_data);
	}
	public function manage_users()
	{
		$page_data['pg_title'] = "Manage Users";
		$page_data['pg_name'] = "users";
		$this->load->view('admin/manage_users', $page_data);
	}
}
