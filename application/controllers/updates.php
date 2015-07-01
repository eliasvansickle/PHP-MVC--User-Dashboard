<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Updates extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}
	public function edit_information()
	{
		$user_data = $this->input->post();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|alpha');
		$this->form_validation->set_rules('last_name','Last Name', 'required|trim|alpha');

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('edit_info_errors', validation_errors());
			redirect("/users/edit_user/".$user_data['id']);
		}
		else
		{
			$this->update->edit_information($user_data);
			$this->session->set_flashdata('info_message', 'Your information has been successfully updated');
			redirect('/users/edit_user/'.$user_data['id']);
		}
	}
	public function edit_password()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$user_data = $this->input->post();
			$this->session->set_flashdata('edit_password_errors', validation_errors());
			redirect("/users/edit_user/".$user_data['id']);
		}
		else
		{
			$user_data = $this->input->post();
			$this->update->edit_password($user_data);
			$this->session->set_flashdata('password_message', 'Your password has been successfully updated');
			redirect('/users/edit_user/'.$user_data['id']);
		}
	}
	public function update_information()
	{
		$user_data = $this->input->post();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|alpha');
		$this->form_validation->set_rules('last_name','Last Name', 'required|trim|alpha');

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('edit_info_errors', validation_errors());
			redirect("/users/view_profile/");
		}
		else
		{
			$this->update->update_information($user_data);
			$this->session->set_flashdata('info_message', 'Your information has been successfully updated');
			redirect('/users/view_profile/');
		}
	}
	public function update_password()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$user_data = $this->input->post();
			$this->session->set_flashdata('edit_password_errors', validation_errors());
			redirect("/users/view_profile/");
		}
		else
		{
			$user_data = $this->input->post();
			$this->update->update_password($user_data);
			$this->session->set_flashdata('password_message', 'Your password has been successfully updated');
			redirect('/users/view_profile/');
		}
	}
	public function update_description()
	{
		$user_data = $this->input->post();
		$this->update->update_description($user_data);
		$this->session->set_flashdata('description_message', 'Your description has been successfully updated');
		redirect('/users/view_profile/');
	}
}