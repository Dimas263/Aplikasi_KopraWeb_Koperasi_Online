<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model{
	public function login($post){
		$email = $this->input->post('val-email', TRUE);
		$pass = $this->input->post('val-password', TRUE);
		$this->db->select('*');
		$this->db->from('koperasi_user');
		$this->db->where('email',$email);
		$this->db->where('password',sha1($pass));
		$query = $this->db->get();
		return $query;
	}
	public function get($id = null){
		$this->db->from('koperasi_user');
		if($id != null){
			$this->db->where('id_user',$id);
		}
		$query = $this->db->get();
		return $query;
	}
	public function register($post){
		$name = $this->input->post('val-name', TRUE);
		$username = $this->input->post('val-username', TRUE);
		$phone = $this->input->post('val-phoneind', TRUE);
		$email = $this->input->post('val-email', TRUE);
		$pass = sha1($this->input->post('val-password', TRUE));
		$directoryName = './upload/'.$username.'/';

		if (!is_dir($directoryName)) {
			/* Directory does not exist, so lets create it. */
			mkdir($directoryName, 0755);
		}
		$config['upload_path'] = $directoryName;
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = 2048;


		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('example-file-input-custom'))
		{
			//$error = array('error' => $this->upload->display_errors());
			//$this->load->view('auth/register', $error);
			redirect(base_url('source/message?id=register_gagal'));
		}
		else{
			$data_foto = array('image_metadata' => $this->upload->data());
			$nama_foto = $this->upload->data('file_name');
			$query = $this->db->query('SELECT * FROM koperasi_user');
			$jumlah_data = $query->num_rows();
			$i = $jumlah_data + 1;
			$ql = $this->db->select('email')->from('koperasi_user')->where('username',$username)->get();

			if( $ql->num_rows() > 0 ) {
				redirect(base_url('source/message?id=register_exist'));
			}
			else {
				$data = [
					'email' => $email,
					'password' => $pass,
					'name' => $name,
					'username' => $username,
					'telp' => $phone,
					'gambar' => $nama_foto,
					'register' => date('Y-m-d h:i:s'),
				];

				$this->db->insert('koperasi_user', $data);
				redirect(base_url('source/message?id=register_berhasil'));
			}
		}
	}
}
