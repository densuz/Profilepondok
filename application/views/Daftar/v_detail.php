<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cek Pendaftaran</title>
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
    
     <?php
    $this->load->view('depan/v_header');
  ?>

  <?php 

  $form_nirm=$data['daftar_nirm'];
  $form_nama=$data['daftar_nama'];
  $form_tempat=$data['daftar_tempat'];
  $form_tanggal=$data['daftar_tanggal'];
  $form_email=$data['daftar_email'];
  $form_status  =$data['daftar_status'];
  $form_jengkel=$data['daftar_jengkel'];
  $form_alamat=$data['daftar_alamat'];
  $form_foto=$data['daftar_foto'];
   ?>


<section class="welcome_about">
    <div class="container">

        <h2 style="text-align: center;"><b>Data Diri Pendaftar</h2>
            <div class="content ">
                <form class="form-horizontal" action="<?php echo base_url().'pendaftaran/daftar/simpan_pendaftaran'?>" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 control-label">
                                            <label for="inputUserName"  >No.Pendaftaran</label>
                                        </div>
                                 
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama" class="form-control" id="inputUserName" value="<?php echo $form_nirm; ?>" disabled>
                                        </div>
                                    </div>
                                    </div>

                                     <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 control-label">
                                            <label for="inputUserName"  >Nama Lengkap</label>
                                        </div>
                                 
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama" class="form-control" id="inputUserName" value="<?php echo $form_nama; ?>"  disabled>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 control-label">
                                            <label for="inputUserName"  >Alamat</label>
                                        </div>
                                 
                                        <div class="col-sm-7">
                                            <input type="text" name="xalamat" class="form-control" id="inputUserName" value="<?php echo $form_alamat; ?>"  disabled>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 control-label">
                                            <label for="inputUserName"  >Tempat Lahir </label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="xtempat" class="form-control" id="inputUserName" value="<?php echo $form_tempat; ?>" disabled>
                                        </div>
                                        <div class="col-sm-1 control-label">
                                            <label for="inputUserName"  >tanggal Lahir </label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="date" name="xtanggal" class="form-control" id="inputUserName" value="<?php echo $form_tanggal; ?>" disabled>
                                        </div>
                                    </div>
                                    </div>


                                     <div class="form-group">
                                     <div class="row">
                                         <div class="col-sm-3 control-label">
                                             <label for="inputUserName" >Jenis Kelamin</label>
                                         </div>
                                         <div class="col-sm-7">
                                          <?php if($form_jengkel=='L'):?>
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked disabled>
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel" disabled="">
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                          <?php else:?>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel" disabled="">
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel" checked disabled>
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                          <?php endif;?>
                                        </div>
                                     </div>
                                        
                                        
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 control-label">
                                            <label for="inputUserName"  >Email</label>
                                        </div>
                                 
                                        <div class="col-sm-7">
                                            <input type="text" name="xemail" class="form-control" id="inputUserName" value="<?php echo $form_email; ?>" disabled>

                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 control-label">
                                            <label for="inputUserName"  >Status Pendaftaran</label>
                                        </div>
                                 
                                        <div class="col-sm-7">
                                              <?php if($form_status=='1'):?>
                                            <input type="text" name="xemail" class="form-control" id="inputUserName" value="Lolos verifikasi" disabled style="font: 25px bold, sans-serif;" >
                                            <?php elseif ($form_status=='2'): ?>
                                                <input type="text" name="xemail" class="form-control" id="inputUserName" value="Tidak Lolos verifikasi" disabled style="font: 25px bold, sans-serif;" >
                                                <?php else: ?>
                                                    <input type="text" name="xemail" class="form-control" id="inputUserName" value="Proses verifikasi" disabled style="font: 25px bold, sans-serif;" >
                                            <?php endif;?>
                                        </div>
                                    </div>
                                    </div>

                       
                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 control-label">
                                            <label for="inputUserName" >Photo</label>
                                        </div>
                                        <div class="col-md-2">
                                        <img   src="<?php echo base_url().'./assets/images/pendaftaran/'.$form_foto;?>">
                                            
                                        </div>
                                    </div>
                               
                                    </div>
                                    <br>
                       
                   <a class="btn btn-danger" href="<?php echo base_url().'pendaftaran/daftar/pdf1/'.$form_nirm ?>"><i class="fa fa-file"></i> Cetak Bukti Pendaftaran</a>
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

</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "File Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "File berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "File Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>



            </body>

            </html>
