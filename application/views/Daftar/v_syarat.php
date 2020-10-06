<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pendaftaran</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">

    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
	<!-- Theme style -->
  	<link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
    <style type="text/css">
      .syarat{
        font-size: 20px;
      }
    </style>

</head>

<body>
    <!--============================= HEADER =============================-->
     <?php
    $this->load->view('depan/v_header');
  ?>
 

<!--//END ABOUT IMAGE -->
<!--============================= Visi Misi =============================-->
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>Persyaratan Pendaftaran</h2>
                <ul class="syarat">
                  <li> Mengisi formulir yyang telah tersedia di laman <a href="<?php echo base_url().'pendaftaran/Daftar/form'; ?>">Pendaftaran Pondok</a></li>
                  <li>Usia minimal 6 th (MI) 13 th (MTs)</li>
                  <li>Bersedia mengikuti program hafalan Al-Qur'an</li>
                  <li>Bebas narkoba dan tidak merokok</li>
                  <li>Sehat jasmani dan rohani</li>
                  <li>Mendaftar secara langsung atau melalui website Pondok</li>
                  <li>Bersedia mengikuti tes setelah dinyatakan lolos verifikasi berkas</li>
                  <li>Daftar ulang setelah dinyatakan lolos tes</li>
                  <li>Bersedia mendukung dan taat peraturan pondok</li>
                </ul>
                 <h2>Tata Cara Pendaftaran</h2>
                 <ul class="syarat">
                   <li>Mengunjungi website resmi pondok di laman <a href="<?php echo base_url().'home'; ?>">Pondok Pesantren Ash-Sholihah</a></li>
                   <li>Masuk pada menu Pendaftaran</li>
                   <li>Klik tombol pendaftaran pada bagian bawah laman pendaftarn</li>
                   <li>Isi semua data pada formulir online dengan data yang benar dan valid</li>
                   <li>Pastikan email anda aktif dan benar, karena No pendaftaran akan di kirim via email</li>
                   <li>Gunakan No pendaftaran yang telah di kirim via email untuk mengecek status verifikasi berkas pendaftran</li>
                   <li>Print bukti lolos verifikasi berkas (verifikasi pling lama 2x24 jam setelah melakukan pendaftaran)</li>
                   <li>Apabila status pendaftaran lolos verifikasi berkas, maka di harapkan mempersiapan berkas lain untuk tahap tes dan daftar ulang</li>
                   <li>Untuk persyaratan Administrasi daftar ulang
                    <ul>
                      <li>Melakukan Pembayaran Pendaftaran sebesar Rp150.000</li>
                      <li>pas foto 3x4 (4 lembar) dan 4x6 (4 lembar)</li>
                      <li>FC Akta kelahiran (rangkap 3)</li>
                      <li>FC Kartu Keluarga (rangkap 3)</li>
                      <li>FC KTP Orang Tua (Bapak/Ibu) (Rangkap 3) </li>
                      <li>FC SKHUN (rangkap 3)</li>
                      <li>FC KIP/PKH/KPS/KIS/KKS (jika memiliki)</li>
                      <li>FC kartu Miskin (jika punya)</li>
                      <li>Fc ijazah dan SKHUN terakhir</li>
                      <li>Print Out bukti lolos verifikasi pendaftran</li>
                    </ul>

                   </li>
                 </ul>
                </div>
                <div class="col-md-5" >
                <div class="row" style="border-style: solid;  padding: 25px;">
                <h2>Cek Status Pendaftaran</h2>
                 <form class="form-horizontal" action="<?php echo base_url().'pendaftaran/daftar/cek_pendaftar'?>" method="post" enctype="multipart/form-data">
                 	
                 	<div class="form-group">
                                        <label for="inputUserName" class="col-sm-9 control-label" style="font-size: 18px;">Nomor Pendaftaran</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="xpendaftaran" class="form-control" id="inputUserName" placeholder="No Pendaftaran" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-block" id="simpan">Cek Pendaftaran	</button>

                 </form>
                   <!--  <img src="<?php echo base_url().'theme/images/2.jpeg'?>" class="img-fluid" alt="#"> -->
                </div>

                <div class="row" style="border-style: solid;  padding: 25px; margin-top: 20px;">
                	<h2>Data Pendaftar</h2>
        <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12">

          <div class="info-box">
         
            <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>
              <?php
                  $query=$this->db->query("SELECT * FROM tbl_daftar  ");
                  $jml=$query->num_rows();
              ?>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Pendaftar</span>
              <span class="info-box-number"><?php echo $jml;?></span>
            </div>
        
          </div>

          <div class="info-box">
         
            <span class="info-box-icon bg-blue"><i class="fa fa-pencil"></i></span>
              <?php
                  $query=$this->db->query("SELECT * FROM tbl_daftar where daftar_status='0' ");
                  $jml=$query->num_rows();
              ?>
            <div class="info-box-content">
              <span class="info-box-text">Proses Verivikasi</span>
              <span class="info-box-number"><?php echo $jml;?></span>
            </div>
        
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-graduation-cap "></i></span>
           <?php
                  $query=$this->db->query("SELECT * FROM tbl_daftar where daftar_status='1' ");
                  $jml=$query->num_rows();
              ?>
            <div class="info-box-content">
              <span class="info-box-text">Lolos</span>
              <span class="info-box-number"><?php echo $jml;?></span>
            </div>
          </div>
          <!-- /.info-box -->
        </div>
        </div>
        <!-- /.col -->
<div class="row">
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-12">
          <div class="info-box">
         
            <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
              <?php
                  $query=$this->db->query("SELECT * FROM tbl_daftar where daftar_status='2' ");
                  $jml=$query->num_rows();
              ?>
            <div class="info-box-content">
              <span class="info-box-text">Tidak Lolos</span>
              <span class="info-box-number"><?php echo $jml;?></span>
            </div>
            
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        </div>
      <!-- /.row -->

    </section>

                </div>

                </div>
            </div>
            <br>
            <br>
            <a href="<?php echo base_url().'pendaftaran/Daftar/form'; ?>"><button type="button" class="btn btn-primary btn-block">Daftar Sekarang</button></a>
            
        </div>
    </section>

    <!--============================= Sejarah singkat =============================-->

    <!--//END WELCOME TITLE -->

    <!--//END TESTIMONIAL -->
   
        <!--============================= FOOTER =============================-->
 <?php
    $this->load->view('depan/v_footer');
  ?>
                <!--//END FOOTER -->
                <!-- jQuery, Bootstrap JS. -->
                <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
                <!-- Plugins -->
                <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
                <!-- Subscribe -->
                <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
                <!-- Script JS -->
                <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
            </body>

            </html>
