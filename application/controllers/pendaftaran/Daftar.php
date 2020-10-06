<?php 
/**
* 
*/
class Daftar extends CI_Controller	{
	
	function __construct(){
			parent::__construct();
			// if($this->session->userdata('masuk') !=TRUE){
	  //           $url=base_url('admin');
	  //           redirect($url);
	  //       };
			$this->load->model('m_daftar');
			$this->load->library('upload');
			$this->load->library('email');
			$this->load->library('session');		
		}

function index(){

	$this->load->view('Daftar/v_syarat');
}

function form(){
  $x['get_nirm']=$this->m_daftar->get_nirm();
	$this->load->view('Daftar/v_form',$x);
}



function cek_pendaftar(){

		$form_nirm=strip_tags($this->input->post('xpendaftaran'));
		$data=$this->m_daftar->get_status($form_nirm);
		$x['data']=$data->row_array();

		// $x['detail']=$this->m_daftar->get_status($form_nirm)->row_array();


	$this->load->view('Daftar/v_detail', $x);
}


function simpan_pendaftaran(){
				$config['upload_path'] = './assets/images/pendaftaran'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	           
	            $config['max_size']     = 3024; // 3MB
	            $this->upload->initialize($config);
	            if(!empty($_FILES['xfoto']['name']))
	            {
	                if ($this->upload->do_upload('xfoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';

	                        $config['source_image']='./theme/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 100;
	                        $config['height']= 110;
	                        $config['new_image']= './assets/images/pendaftaran'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $form_foto=$gbr['file_name'];
	                        // $slide_id=$this->input->post('kode');
	                        // $form_nirm=rand();
	                        $form_nirm=$this->input->post('xnirm');
	                  		$ayah=$this->input->post('xayah');
	                  		$ibu=$this->input->post('xibu');
	                  		$telephone=$this->input->post('xtelephone');
	                        $form_nama=strip_tags($this->input->post('xnama'));
	                        $form_tempat=strip_tags($this->input->post('xtempat'));
	                        $form_tanggal=strip_tags($this->input->post('xtanggal'));
	                        $form_jengkel=strip_tags($this->input->post('xjenkel'));
	                        $form_email=strip_tags($this->input->post('xemail'));
	                        $form_alamat=strip_tags($this->input->post('xalamat'));
	                        $data = array(
								        'daftar_nama' => $form_nama,
								        'daftar_jengkel' => $form_jengkel,
								        'daftar_tempat' => $form_tempat,
								        'daftar_alamat'=> $form_alamat,
								        'daftar_tanggal'=> $form_tanggal,
								        'daftar_ayah'=> $ayah,
								        'daftar_ibu'=>$ibu,
								        'daftar_telephone'=>$telephone,
								        'daftar_email'=> $form_email,
								        'daftar_nirm'=> $form_nirm,
								        'daftar_foto'=> $form_foto
										);


							$coba=$this->m_daftar->simpan_daftar($data);
						
							
//php mailer send mail
									
									$this->load->library('mailer');
								    $email_penerima =  $form_email;
								    $subjek = "Pondok AshSholihah";
								    $pesan =$form_nirm; 
								    $content = $this->load->view('content', array('pesan'=>$pesan), true); // Ambil isi file content.php dan masukan ke variabel $content
								    $sendmail = array(
								      'email_penerima'=>$email_penerima,
								      'subjek'=>$subjek,
								      'content'=>$content 
								    );
								    
								      $send = $this->mailer->send($sendmail); // Panggil fungsi send yang ada di librari Mailer
								  
								    //end mailer

							 echo $this->session->set_flashdata('msg','sucess');
							redirect('pendaftaran/daftar');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('pendaftaran');
	                }
	                 
	            }else{
					redirect('pendaftaran');
				}
				
		$this->load->view('Daftar/v_syarat');
}


public function pdf1($form_nirm){
	$this->load->library('dompdf/dompdf_gen');
	$data=$this->m_daftar->get_status($form_nirm);
		$detail=$data->row_array();
$x['detail']=$detail;

    $this->dompdf_gen->generate('Daftar/v_cetakpdf', $x, 'Bukti_pendaftaran', 'A4', 'potrait');
  }




public function pdf($form_nirm){

	$this->load->library('dompdf/dompdf_gen');
		$data=$this->m_daftar->get_status($form_nirm);
		$detail=$data->row_array();
$x['detail']=$detail;
		// $x['detail']=$this->m_daftar->get_status($form_nirm);

print_r($detail);
die();

$this->load->view('Daftar/v_cetakpdf', $x);

$paper_size='A4';
$orientation='potrait';
$html=$this->output->get_output();
$this->dompdf->set_paper($paper_size, $orientation);

$this->dompdf->load_html($html);
$this->dompdf->render();
$this->dompdf->stream("Bukti_pendaftaran.pdf", array('Attachment'=>0));
}


}




 ?>