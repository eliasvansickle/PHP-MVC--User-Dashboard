<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		////Load view file here////
		$this->load->view('dashboard');
	}
	public function sign_in()
	{
		$this->load->view('sign_in');	
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function login()
	{
		$this->load->view('sign_in');
	}
	public function dashboard()
	{
		$this->load->view('dashboard');
	}
	public function admin_dashboard()
	{
		$this->load->view('admin');	
	}
	public function profile()
	{
		$this->load->view('edit_profile');
	}
}

//end of main controller

