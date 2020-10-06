<?php
class Dashboard extends CI_Controller{
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
		if($this->session->userdata('akses')=='5'){
			$x['pendaftar'] = $this->m_daftar->get_all_daftar();
			$this->load->view('admin_psb/v_dashboard',$x);
		}else{
			redirect('admin');
		}
	}
	
}