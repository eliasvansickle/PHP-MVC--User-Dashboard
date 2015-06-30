<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Reglogs extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|alpha');
		$this->form_validation->set_rules('last_name','Last Name', 'required|trim|alpha');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('registration_errors', validation_errors());
			redirect('/main/register');
		}
		else
		{
			$registration_data = $this->input->post();
			$this->reglog->registration($registration_data);
			redirect('/main/sign_in');
		}
	}
	public function sign_in()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|md5');

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('login_errors', validation_errors());
			redirect('/main/sign_in');
		}
		else
		{
			$login_data = $this->input->post();
			$user_in_database = $this->reglog->sign_in($login_data);

			if($user_in_database)
			{
				$this->session->set_userdata('session', $user_in_database);
				$session = $this->session->userdata('session');
				
				if($session['user_level'] == 'administrator')
				{
					redirect('/main/admin_dashboard');
				}
				else
				{
					redirect('/main/dashboard');
				}
			}
			else
			{
				$this->session->set_flashdata('login_fail', 'Failed to find a user with those credentials');
				redirect('/main/sign_in');
			}
		}
		

	}
}