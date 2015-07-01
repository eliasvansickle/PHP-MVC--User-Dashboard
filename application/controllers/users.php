<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}
	public function user_dashboard()
	{
		$users = $this->user->user_dashboard();
		$this->load->view('dashboard', array(
			'users' => $users
			));
	}
	public function admin_dashboard()
	{
		$users = $this->user->admin_dashboard();
		$this->load->view('admin', array(
			'users' => $users
			));
	}
	public function add_new_user()
	{
		$this->load->view('new_user');
	}
	public function create_new_user()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|alpha');
		$this->form_validation->set_rules('last_name','Last Name', 'required|trim|alpha');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('create_user_errors', validation_errors());
			redirect('/users/add_new_user');
		}
		else
		{
			$post = $this->input->post();
			$this->user->create_new_user($post);
			$this->session->set_flashdata('successful_add', 'User has been successfully added');
			redirect('/users/add_new_user');
		}
	}
	public function show_user($id)
	{
		$user_data = $this->user->show_user($id);
		$messages = $this->wall->show_messages($id);
		$comments = $this->wall->show_comments($id);
		$this->load->view('show_user', array(
			'user_data' => $user_data,
			'messages' => $messages,
			'comments' => $comments
			));
	}
	public function edit_user($id)
	{
		$user_data = $this->user->edit_user($id);
		$this->load->view('edit_user', array(
			'user_data' => $user_data
			));
	}
	public function view_profile()
	{
		$user_data = $this->session->userdata('session');
		$this->load->view('edit_profile', array(
			'user_data' => $user_data
			));
	}
	public function remove($id)
	{
		$this->user->remove($id);
		redirect('/main/admin_dashboard');
	}
}
