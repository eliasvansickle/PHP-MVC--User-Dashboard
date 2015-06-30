<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
}