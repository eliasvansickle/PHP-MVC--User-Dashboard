<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Wall extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function insert_message($post, $session)
	{
		$query = "INSERT INTO messages (user_id, content, message_board_id, created_at, updated_at) VALUES (?,?,?, NOW(), NOW())";
		$values = array(
			$session['id'],
			$post['message'],
			$post['id']
			);
		$this->db->query($query, $values);
	}
	public function insert_comment($post, $session)
	{
		$query = "INSERT INTO comments (user_id, message_id, content, created_at, updated_at) VALUES (?,?,?, NOW(), NOW())";
		$values = array(
			$session['id'],
			$post['id'],
			$post['comment']
			);
		$this->db->query($query, $values);
	}
	public function show_messages($message_board_id)
	{
		$query = "SELECT messages.id, messages.user_id, messages.content, messages.message_board_id, users.first_name, users.last_name, messages.created_at 
				 FROM messages LEFT JOIN users ON messages.user_id = users.id WHERE message_board_id = ?";
		$values = $message_board_id;
		return $this->db->query($query, $values)->result_array();
	}
}