<?php 
 
class m_pesanan extends CI_Model{

	function ambil_data(){
		return $this->db->get('pemesan');
	}

	function get_currentid(){
		$currentid = $this->db->query("
			SELECT `AUTO_INCREMENT`
			FROM  INFORMATION_SCHEMA.TABLES
			WHERE TABLE_SCHEMA = 'dbbioskop'
			AND   TABLE_NAME   = 'pemesan';
			")->result();
		$currentid = json_decode(json_encode($currentid), true);
		return $currentid[0]["AUTO_INCREMENT"];
	}

	function tambah_data($id, $data){

		$id_pemesan = $id;
		$nama_pemesan = $data["nama"];
		$hp = $data["nomor"];
		$total = $data["total"];

		$this->db->query("
			INSERT INTO pemesan VALUES (
			'$id', '$nama_pemesan', '$hp', '-', 
			'0', CURRENT_TIMESTAMP, '$total')
			");
	}

	function updatePhoto($id, $dataFoto){
		$dataFotoBaru = $dataFoto["bukti"];
		$namaFileFoto = $id . $dataFotoBaru["name"];

		$target_dir = "uploads/". $namaFileFoto;
		move_uploaded_file($dataFotoBaru['tmp_name'],$target_dir);
		
		$this->db->query("
			UPDATE pemesan SET bukti_pemesanan = '$namaFileFoto', status_pemesanan = 1 WHERE id_pemesan = '$id';
			");
	}

	function update_status($id, $status){
		$this->db->query("
			UPDATE pemesan SET status_pemesanan = '$status' WHERE id_pemesan = '$id';
			");
	}
}