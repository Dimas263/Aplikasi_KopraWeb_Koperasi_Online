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
}
