<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pesanan extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	    $this->load->library('template');
	    $this->load->model('m_kursi');
      $this->load->model('m_pesanan');
      $this->load->model('m_transaksi');
	}

  	public function index(){
      $data["kodeTr"] = $this->m_pesanan->get_currentid();
  		$this->template->utama('v_checkout', $data);
  	}

  	public function add_transaksi(){
  		$currentid = $this->m_pesanan->get_currentid();
  		$this->m_pesanan->tambah_data($currentid, $_POST);
  
      foreach ($this->cart->contents() as $item){
        $this->m_transaksi->tambah_data($currentid, $item);
        $this->m_kursi->updateStatus($item["id"]);
      }

      $this->cart->destroy();
      redirect('c_kursi');
  	}
}
