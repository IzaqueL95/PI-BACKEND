<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TimeLine extends CI_Controller {

	public function __construct(){
		parent:: __construct();

	}
	
	public function index()
	{
		$data = ['nome' => $this->session->userdata('nome')];
		$this->load->view('arealogada/vw_timeLine', $data);
	}
}
