<?php 
 
class m_kursi extends CI_Model{
	function ambil_data(){
		return $this->db->query("SELECT * FROM kursi_studio INNER JOIN kategori_tiket ON kursi_studio.id_kategori = kategori_tiket.id_kategori ORDER BY kursi_studio.id_kursi");
	}

	function find($id){
		return $this->db->query("SELECT * FROM kursi_studio INNER JOIN kategori_tiket ON kursi_studio.id_kategori = kategori_tiket.id_kategori WHERE kursi_studio.id_kursi='$id'")->result();
	}

	function updateStatus($id){
		return $this->db->query("UPDATE kursi_studio SET status_kursi = 1 WHERE id_kursi='$id'");
	}
}