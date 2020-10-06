<?php
class Daftar_lolos extends CI_Controller{
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
			$x['data'] = $this->m_daftar->get_all_daftar_lolos();
			$this->load->view('admin_psb/v_daftar_lolos',$x);
		}

	function detail($daftar_id){
	$data=$this->m_daftar->get_detail($daftar_id);
	$detail=$data->row_array();
	$x['data']=$detail;
	$this->load->view('admin_psb/v_daftar_detail_lolos',$x);

	}
	}
	
