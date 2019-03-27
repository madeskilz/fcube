<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$page_data['pg_title'] = "Dashboard";
		$page_data['pg_name'] = "dashboard";
		$this->load->view('admin/dashboard', $page_data);
	}
	public function my_wallet()
	{
		$page_data['pg_title'] = "My Wallet";
		$page_data['pg_name'] = "wallet";
		$this->load->view('admin/my_wallet', $page_data);
	}
	public function tv_subscription()
	{
		$page_data['pg_title'] = "TV Subscription";
		$page_data['pg_name'] = "tv";
		$this->load->view('admin/tv_subscription', $page_data);
	}
	public function data_recharge()
	{
		$page_data['pg_title'] = "Data Recharge";
		$page_data['pg_name'] = "data";
		$this->load->view('admin/data_recharge', $page_data);
	}
	public function airtime_recharge()
	{
		$page_data['pg_title'] = "Airtime Recharge";
		$page_data['pg_name'] = "airtime";
		$this->load->view('admin/airtime_recharge', $page_data);
	}
	public function electric_bill()
	{
		$page_data['pg_title'] = "Electric Bills";
		$page_data['pg_name'] = "electric";
		$this->load->view('admin/electric_bill', $page_data);
	}
}
