<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_keranjang extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	    $this->load->library('template');
	    $this->load->model('m_kursi');
	}

  	public function tambah_keranjang($id){
		$kursi = $this->m_kursi->find($id)["0"];
		$data 	= array(
			'id' => $kursi->id_kursi,
			'name' => $kursi->nama_kategori,
			'price' => $kursi->harga_kategori,
			'photo' => NULL,
			'size' => NULL,
			'qty' => 1
		);
		$this->cart->insert($data);
		redirect('c_kursi');
  	}

  	public function index(){
  		$data = null;
  		$this->template->utama('v_keranjang', $data);
  	}

  	public function hapus_keranjang(){
  		$this->cart->destroy();
  		redirect('c_kursi');
  	}
}
