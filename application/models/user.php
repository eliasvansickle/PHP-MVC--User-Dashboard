<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function user_dashboard()
	{
		$query = "SELECT * FROM users";
		return $this->db->query($query)->result_array();
	}
	public function admin_dashboard()
	{
		$query = "SELECT * FROM users";
		return $this->db->query($query)->result_array();
	}
	public function create_new_user($post)
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
			$user_level_query = "SELECT COUNT(*) FROM users";
			$user_level_array = $this->db->query($user_level_query)->row_array();

			if($user_level_array['COUNT(*)'] == 0)
			{
				$user_level = 'administrator';
			}
			else
			{
				$user_level = 'normal';
			}
			$query = "INSERT INTO users (email, first_name, last_name, password, user_level, created_at, updated_at) VALUES (?,?,?,?,?,NOW(),NOW())";
			$values = array(
				$post['email'], 
				$post['first_name'], 
				$post['last_name'], 
				$post['password'],
				$user_level
				);
			$this->db->query($query, $values);
		}
	}
	public function show_user($id)
	{
		$query = 'SELECT * FROM users WHERE id = ?';
		$values = $id;
		return $this->db->query($query, $values)->row_array();
	}
}
