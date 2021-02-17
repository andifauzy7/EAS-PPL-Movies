<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	    $this->load->library('template');
      $this->load->model('m_pesanan');
	}

  	public function index(){
      $data["pemesan"] = $this->m_pesanan->ambil_data()->result();
  		$this->template->utama('v_admin', $data);
  	}

  	public function update_status(){
  		$status = $_POST["status"];
  		$id = $_POST["id_pemesan"];
  		$this->m_pesanan->update_status($id, $status);
  		redirect('c_admin');
  	}

}
