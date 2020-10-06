<?php
class Pendaftar extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('admin');
            redirect($url);
        };
		$this->load->model('m_daftar');
		$x['id_profile'] = $this->session->userdata('idadmin');
	}
	function index(){
		
			$x['data'] = $this->m_daftar->get_all_daftar();
			$this->load->view('admin_psb/v_pendaftar',$x);
		
	}
	
}