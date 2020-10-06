<!--Counter Inbox-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ponpes Ash-Sholihah | Agenda</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.css'?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datepicker/datepicker3.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <?php
    $this->load->view('admin_psb/v_header');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php 
  $this->load->view('admin_psb/v_sidebar')
   ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Proses Verifikasi
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pendaftar</li>
      </ol>
    </section>

     <?php 
    $form_id=$data['id'];
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

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
              <div class="container ">
 <h2 style="text-align: center;"><b>Data Diri Pendaftar</b></h2>
          
                <form class="form-horizontal" action="<?php echo base_url().'pendaftaran/daftar/simpan_pendaftaran'?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group" hidden>
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <input type="text" name="xid" class="form-control" id="inputUserName" value="<?php echo $form_id; ?>">
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 control-label">
                                            <label for="inputUserName"  >No.Pendaftaran</label>
                                        </div>
                                 
                                        <div class="col-sm-7">
                                            <input type="text" name="xnirm" class="form-control" id="inputUserName" value="<?php echo $form_nirm; ?>" disabled>
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
                                       
                                        <div class="col-md-2" >
                                        <img width="150" height="200" src="<?php echo base_url().'./assets/images/pendaftaran/'.$form_foto;?>">
      
                                        </div>
                                         </div>
                                    </div>
                               
                       <div align="center" >
                        <H3>Apakah Calon Pendaftar Telah Lolos Verifikasi Data ?</H3>
                        <hr>
                        <div class="col col-md-9">
                            <a class="btn btn-primary" href="<?php echo base_url().'admin_psb/daftar_verifikasi/lolos/'.$form_id?>"><i class="fa fa-check"></i> Lolos Verifikasi</a>
                           <a class="btn btn-danger" href="<?php echo base_url().'admin_psb/daftar_verifikasi/tidak_lolos/'.$form_id?>"><i class="fa fa-times"></i> Tidak Lolos Verifikasi</a>
                        </div>
                           
                           <div class="col col-md-3">
                               <a class="btn btn-warning" href="<?php echo base_url().'admin_psb/daftar_verifikasi'?>"><i class="fa fa-back"></i> Kembali</a>
                           </div>
                           
                       </div>
                   
                    </form>
                </div>
            </div>
        </div>


        <!-- /.col -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
$this->load->view('admin_psb/v_footer')
   ?>


  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->





<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

    $('#datepicker').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy'
    });
    $('#datepicker2').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy'
    });
    $('.datepicker3').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy'
    });
    $('.datepicker4').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy'
    });
    $(".timepicker").timepicker({
      showInputs: true
    });

  });
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Verifikasi Pendaftar Berhasil (Pendaftar Tidak Lolos)",
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
                    text: "Verifikasi Pendaftar Berhasil.",
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
                    text: "Agenda berhasil di update",
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
                    text: "Agenda Berhasil dihapus.",
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
