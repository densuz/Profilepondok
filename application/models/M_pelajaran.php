<?php
class M_pelajaran extends CI_Model{

	function get_all_pelajaran(){
		$hsl=$this->db->query("SELECT * from tbl_mapel join tbl_kelas on mapel_kelas=kelas_id ORDER BY mapel_id DESC");
		return $hsl;
	}
	function simpan_pelajaran($kodemapel,$namamapel,$kelasmapel,$idgurumapel){
		$hsl=$this->db->query("INSERT INTO tbl_mapel (mapel_kode,mapel_nama,mapel_kelas,mapel_guru_id) VALUES ('$kodemapel','$namamapel','$kelasmapel','$idgurumapel')");
		return $hsl;
	}

	function update_pelajaran($kode,$kodemapel,$namamapel,$kelasmapel,$idgurumapel){
		$hsl=$this->db->query("UPDATE tbl_mapel SET mapel_kode='$kodemapel',mapel_nama='$namamapel',mapel_kelas='$kelasmapel',mapel_guru_id='$idgurumapel' WHERE mapel_id='$kode'");
		return $hsl;

	}

	function hapus_pelajaran($kode){
		$hsl=$this->db->query("DELETE FROM tbl_mapel WHERE mapel_id='$kode'");
		return $hsl;
	}
}
