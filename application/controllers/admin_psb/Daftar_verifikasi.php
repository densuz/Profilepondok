<?php
class Daftar_verifikasi extends CI_Controller{
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
			$x['data'] = $this->m_daftar->get_proses();
			$this->load->view('admin_psb/v_daftar_proses',$x);
		}

	function detail($daftar_id){
	$data=$this->m_daftar->get_detail($daftar_id);
	$detail=$data->row_array();
	$x['data']=$detail;
	$this->load->view('admin_psb/v_daftar_detail',$x);

	}
function lolos($daftar_id){
	$kode=$daftar_id;


	$this->m_daftar->update_status_lolos($kode);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_psb/Daftar_verifikasi');
}

function tidak_lolos($daftar_id){
	$kode=$daftar_id;


	$this->m_daftar->update_status_tidak_lolos($kode);
							echo $this->session->set_flashdata('msg','tidak_lolos');
							redirect('admin_psb/Daftar_verifikasi');
}


	}
	
