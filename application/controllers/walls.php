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
		// $post = $this

	}
}