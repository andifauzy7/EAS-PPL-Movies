<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_input extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	    $this->load->library('template');
      $this->load->model('m_pesanan');
	}

  	public function index(){
      $data = null;
  		$this->template->utama('v_input', $data);
  	}

    public function add_files(){
      $id = $_POST["kode"];
      $this->m_pesanan->updatePhoto($id, $_FILES);
      redirect('c_kursi');
    }

}
