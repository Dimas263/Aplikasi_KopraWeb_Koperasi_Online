<?php
class Data_m extends CI_Model{
	public function join_forum(){
		$id_user = $_POST['id_user'];
		$forum = $_POST['forum'];
		$ql = $this->db->select('forum')->from('koperasi_forum')->where('id_user', $id_user)->where('forum', $forum)->get();
		if( $ql->num_rows() > 0 )
        {
            redirect(base_url('source/message?id=forum_exist'));
		}
        else
        {
            $data = array(
                'id_user' => $id_user,
                'forum' => $forum
            );
            $this->db->insert('koperasi_forum', $data);
            redirect(base_url('source/message?id=join_forum'));
		}
	}
	public function addpinjaman(){

		$directoryName = './upload/'.$_POST['username'].'/pinjaman/';
		/* Check if the directory already exists. */
		if (!is_dir($directoryName)) {
			/* Directory does not exist, so lets create it. */
			mkdir($directoryName, 0755);
		}
		$config['upload_path'] = $directoryName;
		$config['allowed_types'] = 'jpeg|jpg|png|pdf';
		$config['max_size'] = 2048;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('example-file-input-wajah'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('source/pinjaman', $error);
		}
		else
		{
			$data_wajah = array('image_metadata' => $this->upload->data());
			$nama_wajah = $this->upload->data('file_name');

		}

		if (!$this->upload->do_upload('example-file-input-ktp'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('source/pinjaman', $error);
		}
		else
		{
			$data_ktp = array('image_metadata' => $this->upload->data());
			$nama_ktp = $this->upload->data('file_name');

		}

		if (!$this->upload->do_upload('example-file-input-kk'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('source/pinjaman', $error);
		}
		else
		{
			$data_kk = array('image_metadata' => $this->upload->data());
			$nama_kk = $this->upload->data('file_name');

		}

		$data = [
			'username' => $_POST['username'],
			'nama_koperasi' => $_POST['wizard-progress-info-koperasi'],
			'info_usaha' => $_POST['wizard-progress-info-usaha'],
			'jenis_usaha' => $_POST['wizard-progress-jenis-usaha'],
			'pendapatan' => $_POST['wizard-progress-pendapatan-bulanan'],
			'jumlah_dana' => $_POST['wizard-progress-dana-peminjaman'],
			'metode_pembayaran' => $_POST['radio-group2'],
			'foto_wajah' => $nama_wajah,
			'foto_ktp' => $nama_ktp,
			'foto_kartu_keluarga' => $nama_kk
		];

		$this->db->insert('koperasi_pinjaman', $data);
		echo "<script>
						alert('Selamat, anda berhasil mengajukan pinjaman baru, tunggu beberapa saat, proses peminjaman 1x24 jam');
    				  </script>";
	}
	public function addproduct(){

		$directoryName = './upload/product/'.$_POST['id_user'].'/';
		/* Check if the directory already exists. */
		if (!is_dir($directoryName)) {
			/* Directory does not exist, so lets create it. */
			mkdir($directoryName, 0755);
		}
		$config['upload_path'] = $directoryName;
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = 2048;


		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar'))
		{
			//$error = array('error' => $this->upload->display_errors());
			//$this->load->view('admin/ceo', $error);
			echo "<script>
						alert('Maaf, format foto yang anda masukan tidak sesuai. Coba lagi ya..');
    					window.location='".base_url('source/barangku')."';
    				  </script>";
		}
		else
		{
			$data_foto = array('image_metadata' => $this->upload->data());
			$nama_foto = $this->upload->data('file_name');

			$data = [
				'id_user' => $_POST['id_user'],
				'nama_product' => $_POST['nama'],
				'foto' => $nama_foto,
				'harga' => $_POST['harga'],
				'deksripsi' => $_POST['deskripsi']
			];

			$this->db->insert('koperasi_product', $data);
			echo "<script>
						alert('Selamat, anda berhasil menambahkan product baru');
    				  </script>";
		}
	}
	public function deleteproduct($id){
		$this->db->where('id_product', $id);
		$this->db->delete('koperasi_product');
	}
}
