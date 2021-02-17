<?php 
 
class m_admin extends CI_Model{

	function ambil_data(){
		return $this->db->get('admin');
	}
}