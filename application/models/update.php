<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function edit_information($user_data)
	{
		$query = "UPDATE users SET email = ?, first_name = ?, last_name = ?, user_level = ?, updated_at = NOW() WHERE id = ?";
		$values = array(
			$user_data['email'],
			$user_data['first_name'],
			$user_data['last_name'],
			$user_data['user_level'],
			$user_data['id'],
			);
		$this->db->query($query, $values);
	}
	public function edit_password($user_data)
	{
		$query = "UPDATE users SET password = ?, updated_at = NOW() WHERE id = ?";
		$values = array(
			$user_data['password'],
			$user_data['id'],
			);
		$this->db->query($query, $values);
	}
	public function update_information($user_data)
	{
		$query = "UPDATE users SET email = ?, first_name = ?, last_name = ?, updated_at = NOW() WHERE id = ?";
		$values = array(
			$user_data['email'],
			$user_data['first_name'],
			$user_data['last_name'],
			$user_data['id'],
			);
		$this->db->query($query, $values);
	}
	public function update_password($user_data)
	{
		$query = "UPDATE users SET password = ?, updated_at = NOW() WHERE id = ?";
		$values = array(
			$user_data['password'],
			$user_data['id'],
			);
		$this->db->query($query, $values);
	}
	public function update_description($user_data)
	{
		$query = "UPDATE users SET description = ?, updated_at = NOW() WHERE id = ?";
		$values = array(
			$user_data['description'],
			$user_data['id'],
			);
		$this->db->query($query, $values);

		$session_query = "SELECT users.description FROM users WHERE id= ?";
		$values = $user_data['id'];
		$new_session_description = $this->db->query($session_query, $values)->row_array();
		$array = $this->session->userdata("session");
		$array['description'] = $new_session_description['description'];
		$this->session->set_userdata("session", $array);
	}
}