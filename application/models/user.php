<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
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
	public function show_user($id)
	{
		$query = 'SELECT * FROM users WHERE id = ?';
		$values = $id;
		return $this->db->query($query, $values)->row_array();
	}
	public function edit_user($id)
	{
		$query = 'SELECT * FROM users WHERE id = ?';
		$values = $id;
		return $this->db->query($query, $values)->row_array();
	}
	public function remove($id)
	{
		$query = 'DELETE FROM users WHERE id = ?';
		$values = $id;
		return $this->db->query($query, $values);
	}
}
