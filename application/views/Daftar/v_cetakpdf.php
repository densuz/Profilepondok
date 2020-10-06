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

    <style type="text/css">
        #foto-cop{
            width: 100px;
            height: 100px;
           
         
        }
        #text-cop{
        float: right;
        clear: both;
        text-align: center

        }
        #cop{
            width: 100px;
            height: 100px;
        }
        #tabel{
            border: solid;
            margin-top: 30px;
            align-items: center;
        }
        #tblststus{
            border: solid;
            margin-top: 30px;
            align-items: center;
            margin: 20 auto;
        }
        th,td{
            font-size: 25px;
            font-family: serif;
            padding:10px;
        }
    </style>
</head>

<body>
    
     

 <div class="container">
   <div class="row">
    <div class="col col-md-1" >
        <div class="row" id="foto-cop">
            <img id="cop" src="theme/images/logo.jpg">
            <!--  <img id="cop" src="<?php echo base_url().'theme/images/logo.jpg' ?>"> -->
        </div>
        
    </div>
    <div class="col col-md-8" id="text-cop">
       
    <h3>Bukti Pendaftaran Pondok Pesantren Ash-Sholihah</h3>
    <h4 style="padding-top:-20px;">Jonggrangan, Sumberadi, Mlati, Sleman, Yogyakarta 55288</h4>
    <h4 style="padding-top:-20px;">Telephone : 085 80 44444 73 Email : pondokashsholihah@gmail.com</h4>

    </div>
    </div>
    <hr />
<div class="col col-md-5" style="margin: 0 auto;">
<table id="tabel" width="100%" style=" border-collapse: collapse;">
   <?php 
   $nirm=$detail["daftar_nirm"];
   $nama=$detail["daftar_nama"];
   $status=$detail["daftar_status"];
   $alamat=$detail["daftar_alamat"];

    ?>
    
    <tr>
        <th align="left">Nomor Pendaftaran</th>
        <td>:</td>
        <td><?php echo $nirm; ?></td>
    </tr>
     <tr>
        <th align="left">Nama</th>
        <td>:</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <th align="left">Alamat</th>
        <td>:</td>
        <td><?php echo $alamat; ?></td>
    </tr>

</table>
<table id="tblststus">
    <tr>
        <th align="center">Status Pendaftaran Dinyatakan</th>
    </tr>
    <tr>
        <td align="center"><?php if ($status=='1'):  ?>
            Lolos Verifikasi

            <?php elseif ($status=='2'): ?>
                Tidak Lolos Verfikasi

            <?php else: ?>
                Proses Verifikasi
        <?php endif; ?></td>
        
    </tr>

</table>
</div>
</div>
</body>
</html>

