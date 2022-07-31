<?php

Class Auth_libs{
	protected $ci;

	function __construct(){
		$this->ci =& get_instance();
	}
	function user_login(){
		$this->ci->load->model('auth_m');
		$id_user = $this->ci->session->userdata('id_user');
		$user_data = $this->ci->auth_m->get($id_user)->row();
		return $user_data;
	}
}
