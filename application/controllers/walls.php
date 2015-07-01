<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Walls extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function insert_message()
	{
		$post = $this->input->post();
		$session = $this->session->userdata('session');
		$this->wall->insert_message($post, $session);
		redirect('/users/show_user/'.$post['id']);
	}
	public function insert_comment()
	{
		$post = $this->input->post();///$post['id'] == message_id
		$session = $this->session->userdata('session');///$session['id'] == user_id
		var_dump($post);

		die('here');
		$this->wall->insert_comment($post, $session);
		redirect('/users/show_user/'.$post['id']);///You need to fix the $post['id'] -> this is not correct it should be message_board_id to get back to whose ever message board you are currently on

	}
}