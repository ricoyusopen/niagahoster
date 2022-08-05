<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function index(){
		$data['hosting'] = $this->M_paket->view_paket('tb_paket','id');
		$data['menu'] = $this->M_paket->show_menu('tb_menu','id');
		$this->load->view('header', $data);
		$this->load->view('content',$data);
		$this->load->view('footer');
	}
}
