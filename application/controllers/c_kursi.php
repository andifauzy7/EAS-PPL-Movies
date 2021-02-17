<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_kursi extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	    $this->load->library('template');
	    $this->load->model('m_kursi');
	}

	public function index(){
		$data["kursi"] = $this->m_kursi->ambil_data()->result();
    	$this->template->utama('v_kursi', $data);
  	}

  	public function filter(){
		$data["barang"] = $this->m_barang->filter($_POST["nama"])->result();
    	$this->template->utama('v_barang', $data);
  	}
}
