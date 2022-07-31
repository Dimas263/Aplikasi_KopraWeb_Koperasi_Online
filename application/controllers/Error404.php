<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Error404 extends CI_Controller{
	public function index()
	{
		$this->load->view('404');
	}
}
