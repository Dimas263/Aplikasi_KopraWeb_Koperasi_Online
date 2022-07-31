<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Source extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
		$this->load->model('Data_m');
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('loader');
	}
	public function welcome()
	{
		check_not_login();
		$this->load->view('welcome');
	}
	public function home()
	{
		check_not_login();
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function masuk()
	{
		check_already_login();
		$this->load->view('header');
		$this->load->view('auth/masuk');
		$this->load->view('footer');
	}
	public function daftar()
	{
		$this->load->view('header');
		$this->load->view('auth/daftar');
		$this->load->view('footer');
	}
	public function forgot()
	{
		$this->load->view('header');
		$this->load->view('auth/reset');
		$this->load->view('footer');
	}
	public function process(){
		$post = $this->input->post(null,TRUE);
		if(isset($post['login'])){
			$this->load->model('auth_m');
			$query = $this->auth_m->login($post);
			if($query->num_rows()>0){
				$row = $query->row();
				$params = array(
					'id_user' => $row->id_user,
					'username' => $row->username,
				);
				$this->session->set_userdata($params);
                redirect(base_url('source/message?id=login_berhasil'));
			}
			else{
                redirect(base_url('source/message?id=login_gagal'));
			}
		}
	}

	public function register(){
		$post = $this->input->post(null,TRUE);
		if(isset($post['register'])){
			$this->load->model('auth_m');
			$this->auth_m->register($post);
		}
	}

    public function message(){
        $this->load->view('message/header');
        $this->load->view('message/message');
        $this->load->view('message/footer');
    }

	public function create(){
		$this->Auth_m->register();
		redirect(base_url('source/masuk'));
	}
	public function keluar()
	{
		$params = array('id_user','username');
		$this->session->unset_userdata($params);
        redirect(base_url('source/message?id=keluar_app'));
	}
	public function join_forum()
	{
		check_not_login();
		$this->Data_m->join_forum();
	}
	public function komunitas(){
		check_not_login();
		$this->load->view('header');
		$this->load->view('komunitas/home');
		$this->load->view('footer');
	}
	public function pinjaman(){
		check_not_login();
		$this->load->view('header');
		$this->load->view('pinjaman/home');
		$this->load->view('footer');
	}
	public function pasar(){
		check_not_login();
		$this->load->view('header');
		$this->load->view('pasar/home');
		$this->load->view('footer');
	}
	public function tagihan(){
		check_not_login();
		$this->load->view('header');
		$this->load->view('tagihan/home');
		$this->load->view('footer');
	}
}
