<?php 

/**
* 
*/
class M_daftar extends CI_model{
	
	function get_all_daftar(){
            $hsl=$this->db->query("SELECT * FROM tbl_daftar");
        return $hsl;
        }

        function get_all_daftar_lolos(){
            $hsl=$this->db->query("SELECT * FROM tbl_daftar WHERE daftar_status=1");
        return $hsl;
        }
        function get_all_daftar_tidak_lolos(){
            $hsl=$this->db->query("SELECT * FROM tbl_daftar WHERE daftar_status=2");
        return $hsl;
        }

     function simpan_daftar($data){
		$hsl=$this->db->INSERT('tbl_daftar', $data);
        return $hsl;
    }



	function get_status($form_nirm){
		$hsl=$this->db->query("SELECT * FROM tbl_daftar where daftar_nirm='$form_nirm'");
		return $hsl;
	}
  
function update_status_lolos($kode){
    $hsl=$this->db->query("UPDATE tbl_daftar SET daftar_status='1' WHERE id='$kode'");
    return $hsl;
  }

  function update_status_tidak_lolos($kode){
    $hsl=$this->db->query("UPDATE tbl_daftar SET daftar_status='2' WHERE id='$kode'");
    return $hsl;
  }


  function get_proses(){
    $hsl=$this->db->query("SELECT * FROM tbl_daftar where daftar_status=0");
    return $hsl;
  }
  function get_detail($form_id){
    $hsl=$this->db->query("SELECT * FROM tbl_daftar where id='$form_id'");
    return $hsl;
  }

  function get_nirm(){
    $q = $this->db->query("SELECT MAX(RIGHT(daftar_nirm,4)) AS kd_max FROM tbl_daftar");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        return date('dmY').$kd;
  }


//      function get_nirm(){
//        $this->db->select('RIGHT(tbl_daftar.daftar_nirm,4) as kode', true);
//           $this->db->order_by('daftar_nirm','DESC');    
//           $this->db->limit(1);    
//           $query = $this->db->get('tbl_daftar');  //cek dulu apakah ada sudah ada kode di tabel.    
//           if($query->num_rows() > 0){      
//                //cek kode jika telah tersedia    
//                $data = $query->row();  
//                $angka=$data->kode;    
//                $kode = intval($angka) + 1; 
//           }
//           else{      
//                $kode = 1;  //cek jika kode belum terdapat pada table
//           }
//               $tgl=date('dmY'); 
//               $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);    
//               $kodetampil = $tgl.$batas;  //format kode
//               return $kodetampil;  
// }


        
        // $q="SELECT max(daftar_nirm) as kode_auto FROM tbl_daftar";
        // $data=$this->db->query($q)->row_array();
        // $max_kode=$data['kode_auto'];
        // $max_kode2=(int)substr($max_kode, 5,3);
        // $kodecount=$max_kode2+9;
        // $kode_auto=sprintf('%03s', $kodecount);
        // return $kode_auto;





    //     $q = $this->db->query("SELECT MAX(RIGHT(daftar_nirm,4)) AS kd_max FROM tbl_daftar WHERE DATE(daftar_tanggal)=CURDATE()");
       
    //     if($q->row_array()>0){
    //        $kd = "0004";
    //     }else{
           
    //           foreach($q->result() as $k){
    //             $tmp = ((int)$k->kd_max)+1;
           
    //             $kd = sprintf("%04s", $tmp);
    //         }
    //     }
    //     date_default_timezone_set('Asia/Jakarta');
    //     return date('dmy').$kd;
    // }


	 // $this->db->order_by('id','asc');
        // $this->db->where('daftar_nirm',$form_nirm);
        // $query = $this->db->get('tbl_daftar');
        // return $query;

            // $hsl=$this->db->where('daftar_nirm', $form_nirm);
            // return $hsl->get('tbl_daftar')->row();
       

}
 ?>