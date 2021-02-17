<?php 
 
class m_transaksi extends CI_Model{

	function tambah_data($id, $data){
		$kodeKursi = $data["id"];
		$this->db->query("
			INSERT INTO transaksi VALUES (
			'$id', '$kodeKursi')
			");
	}
}