<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Reglog extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}
	public function registration($registration_data)
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
			$registration_data['email'], 
			$registration_data['first_name'], 
			$registration_data['last_name'], 
			$registration_data['password'],
			$user_level
			);
		$this->db->query($query, $values);
	}
	public function sign_in($login_data)
	{
		$query = "SELECT * FROM users WHERE email = ? AND password = ?";
		$values = array(
			$login_data['email'],
			$login_data['password']
			);
		return $this->db->query($query, $values)->row_array();
	}
}



