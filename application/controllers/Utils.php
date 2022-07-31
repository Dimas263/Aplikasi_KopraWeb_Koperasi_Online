<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utils extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
		$this->load->model('Data_m');
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
	}
}
