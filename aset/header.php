<?php
session_start();
  $waktu=time()+25200;
  $expired=1800;
  if(isset($_SESSION['username']))
  {
  if($waktu < $_SESSION['timeout'])
  {
  unset($_SESSION['timeout']);
  $_SESSION['timeout']=$waktu+1800; 

?>
<link href='images/logo_aino3.png' rel='SHORTCUT ICON'/>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sistem Informasi Aset PT AINO Indonesia</title>        
  <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css"/>
  <link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css"/>
  <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css"/>
  <link type="text/css" rel="stylesheet" href="assets/css/style.css">
  <link type="text/css" rel="stylesheet" href="assets/css/DT_bootstrap.css"/>
  <link rel="stylesheet" href="assets/css/responsive-tables.css">
  <link type="text/css" rel="stylesheet" href="assets/css/jquery.plupload.queue.css"/>
  <link type="text/css" rel="stylesheet" href="assets/css/prettify.css"/>
  <link type="text/css" rel="stylesheet" href="assets/css/validationEngine.jquery.css"/>  
  <link type="text/css" rel="stylesheet" href="assets/css/jquery.gritter.css"/>
  <link type="text/css" rel="stylesheet" href="assets/css/uniform.default.css"/>
  <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/jasny-bootstrap-responsive.min.css" />        
  <link rel="stylesheet" href="assets/css/theme.css">
  <script type="text/javascript" src="datepicker/datetimepicker_css.js"></script>
</head>
 <body>
  <div id="wrap">            
   <div id="top">                
    <div class="navbar navbar-inverse navbar-static-top">
     <div class="navbar-inner">         
      <div class="container-fluid">
       <table style="width:98%;float:center">
    <tr>
      <td width="80%"align="left"><a href="menu.php"> <img src='images/logo_aino.png' height='105px' width='105px' align='absmiddle'></a></td>
      <td width="20%" align="right">
      <div class="dropdown">
        <a class="dropdown-toggle a_user" data-toggle="dropdown" href="#">Data Pengguna &nbsp;<i class="icon-chevron-down"></i></a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li>
        <div class="accordion-group-menu">
        <table width="100%" class="tableview" style="padding:7px">
        <tr>
          <td width="30%">Username</td>
          <td width="70%">: <?php echo $_SESSION['username'];?>
          </td>
        </tr>
        <tr>
          <td colspan="2"><a href="akun.php"><button class="btn">Ubah Password</button><a href="logout.php">&nbsp; &nbsp; &nbsp; <button class="btn btn-danger">Keluar</button></td>
        </table>
        </div>
        </li>
        </ul>
      </div>
      </td>
    </tr>
       </table>
      </div>
     </div>
    </div>              
   </div>
  <div id="left">                
   <ul id="menu" class="unstyled accordion collapse in">
    <li><a href="menu.php"><i class="icon-home icon-large"></i> Beranda</a></li>
  <li class="accordion-group ">
     <a data-parent="#menu" data-toggle="collapse" href="#" class="accordion-toggle" data-target="#component-nav">
     <i class="icon-tasks icon-large"></i>  Kategori Aset </a>
      <ul class="collapse " id="component-nav">
       <li><a href="tampil_kategori.php?id=1&&page=1"><i class="icon-angle-right"></i> Hardware</a></li>
       <li><a href="tampil_kategori.php?id=2&&page=1"><i class="icon-angle-right"></i> Software</a></li>
       <li><a href="tampil_kategori.php?id=3&&page=1"><i class="icon-angle-right"></i> Peralatan Kantor</a></li>
       <li><a href="tampil_kategori.php?id=4&&page=1"><i class="icon-angle-right"></i> Bangunan</a></li>
       <li><a href="tampil_kategori.php?id=5&&page=1"><i class="icon-angle-right"></i> Kendaraan</a></li>
       <li><a href="tampil_aset.php?page=1"><i class="icon-angle-right"></i> All Kategori Aset</a></li>
      </ul>
    </li>
    <li class="accordion-group ">
     <a data-parent="#menu" data-toggle="collapse" href="#" class="accordion-toggle" data-target="#component-nav2">
     <i class="icon-tasks icon-large"></i> Laporan</a>
      <ul class="collapse " id="component-nav2">
       <li><a href="cetak_kategori.php?id=1"><i class="icon-angle-right"></i> Hardware</a></li>
       <li><a href="cetak_kategori.php?id=2"><i class="icon-angle-right"></i> Software</a></li>
       <li><a href="cetak_kategori.php?id=3"><i class="icon-angle-right"></i> Peralatan Kantor</a></li>
       <li><a href="cetak_kategori.php?id=4"><i class="icon-angle-right"></i> Bangunan</a></li>
       <li><a href="cetak_kategori.php?id=5"><i class="icon-angle-right"></i> Kendaraan</a></li>
       <li><a href="cetak_kategori_all.php"><i class="icon-angle-right"></i>All Kategori Aset</a></li>
      </ul>
     </li>
   <li class="accordion-group ">
     <a data-parent="#menu" data-toggle="collapse" href="#" class="accordion-toggle" data-target="#component-nav3">
     <i class="icon-signal icon-large"></i> Statistik</a>
      <ul class="collapse " id="component-nav3">
       <li><a href="statistik.php"><i class="icon-angle-right"></i> Berdasarkan Kategori</a></li>
       <li><a href="statistik_stat.php"><i class="icon-angle-right"></i> Berdasarkan Status</a></li>
      </ul>
     </li>
    <li><a href="akun.php"><i class="icon-cog icon-large"></i> Pengaturan Akun</a></li>
    </ul>
   </div>            
<?php
}
  else{
  session_destroy();
  header('location:logout.php');;}
  } 
  else{
echo '<script>';
  echo "alert('Anda tidak mempunyai akses, silahkan login');";
  echo "window.location='index.php'";   
  echo '</script>';
}
?>
