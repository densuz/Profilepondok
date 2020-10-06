<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulir Penaftaran</title>
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
        
            <div class="content	">
                <form class="form-horizontal" action="<?php echo base_url().'pendaftaran/daftar/simpan_pendaftaran'?>" method="post" enctype="multipart/form-data">
                                <h1 align="center">Form Pendaftaran Santri Baru</h1>
                                <hr>
                                <br>
                                    <!-- form tersembunyi -->
                					 <div class="form-group " hidden="">
                                    <div class="row">
                                    	<div class="col-md-3 control-label">
                                    		<label for="inputUserName"  >No.Pendaftaran</label>
                                    	</div>
                                 
                                        <div class="col-md-7">
                                            <input type="text" name="xnirm" class="form-control" id="disabledInput" value="<?php echo $get_nirm; ?>" placeholder="Disabled input">
                                        </div>
                                    </div>
                                    </div>
                                    <!-- form tersembunyi -->
                                    

                                    <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3 control-label">
                                            <label for="inputUserName"  >No.Pendaftaran</label>
                                        </div>
                                 
                                        <div class="col-md-7">
                                            <input type="text" name="xnirm" class="form-control" id="disabledInput" placeholder="Diisi Otomatis Oleh Sistem" disabled>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="row">
                                    	<div class="col-md-3 control-label">
                                    		<label for="inputUserName"  >Nama Lengkap</label>
                                    	</div>
                                 
                                        <div class="col-md-7">
                                            <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>
                                    </div>
                                     <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 control-label">
                                            <label for="inputUserName" >Jenis Kelamin</label>
                                        </div>
                                        <div class="col-sm-7">
                                               <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="L" name="xjenkel"  >
                                                    <label for="inlineRadio1"> Laki-Laki </label>
                                                </div>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                                    <label for="inlineRadio2"> Perempuan </label>
                                                </div>
                                            </div>

                                       </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                    	<div class="col-sm-3 control-label">
                                    		<label for="inputUserName"  >Tempat Lahir </label>
                                    	</div>
                                        <div class="col-sm-3">
                                            <input type="text" name="xtempat" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                                        </div>
                                        <div class="col-sm-1 control-label">
                                    		<label for="inputUserName"  >tanggal Lahir </label>
                                    	</div>
                                    	<div class="col-sm-3">
                                            <input type="date" name="xtanggal" class="form-control" id="inputUserName" placeholder="Tanggal Lahir" required>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 control-label">
                                            <label for="inputUserName"  >Nama Ayah</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="xayah" class="form-control" id="inputUserName" placeholder="Nama Ayah..." required>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 control-label">
                                            <label for="inputUserName"  >Nama Ibu</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="xibu" class="form-control" id="inputUserName" placeholder="Nama Ibu..." required>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 control-label">
                                            <label for="inputUserName"  >Alamat Lengkap</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="xalamat" class="form-control" id="inputUserName" placeholder="Alamat Saat Ini.." required>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 control-label">
                                            <label for="inputUserName"  >No. HP/Telephone </label>
                                        </div>
                                 
                                        <div class="col-md-7">
                                            <input type="number" name="xtelephone" class="form-control" id="inputUserName" placeholder="No Hp Aktif..." required>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                    	<div class="col-sm-3 control-label">
                                    		<label for="inputUserName"  >Email</label>
                                    	</div>
                                        <div class="col-sm-7">
                                            <input type="email" name="xemail" class="form-control" id="inputUserName" placeholder="email Aktif..." required>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                    	<div class="col-sm-3 control-label">
                                    		<label for="inputUserName" >Photo</label>
                                    	</div>
                                    	<div class="col-sm-2">
                                            <input type="file" accept="image/*" onchange="loadFile(event)" name="xfoto"/>

                                        </div>
                                        </div>
                                        </div>

                                        <div class="row" >
                                         <div class="col-md-2" >
                                            
                                            	<img id="output" >

												<script>
												  var loadFile = function(event) {
												    var reader = new FileReader();
												    reader.onload = function(){
												      var output = document.getElementById('output');
												      output.src = reader.result;

												    };
												    reader.readAsDataURL(event.target.files[0]);
												  };
												</script>
                                            </div>
                                            </div>
                           <br>
                       
                        <button type="submit" class="btn btn-primary btn-block" id="simpan">Daftar</button>
                   
                    </form>
                </div>
                
            
           
            
        </div>
    </section>

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
