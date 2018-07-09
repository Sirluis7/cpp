<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<noscript>
    <div class="noscriptmsg">
    <meta http-equiv="refresh" content="0;URL=<?php echo base_url()?>nojs">
    </div>
</noscript>
<title><?php echo $titulo?></title>
<link rel="icon" href="<?php echo base_url(); ?>assets3/imagenes/logo_splice22.png">
<script src="<?php echo base_url();?>assets3/back_end/js/jquery.min.js" charset="UTF-8"></script>
<script src="<?php echo base_url();?>assets3/back_end/js/loader.js" charset="UTF-8"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets3/back_end/css/loader.css" >
<script type="text/javascript">
   google.charts.load('current', {'packages':['corechart','table','bar','line']});
</script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body id="body">
<div id="loader-wrapper">
    <div id="loader"></div>        
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div> 

<header>
  <?php 
  $n=explode(" ",$this->session->userdata("nombresUsuario"));
  ?>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top nav-tabs-main">
    <a class="navbar-brand" href="#">
      <img class="logo_splice"  class="d-inline-block align-top" alt="" src="<?php echo base_url();?>assets3/imagenes/logo_splice22.png"> 
    </a>
   
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li id="menu_cpp" class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-table"></i> Control Productividad Personas</a>
        </li>
        <!-- <li id="menu_vista_mensual" class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-table"></i> Vista mensual </a>
        </li>
        <li id="menu_mant_act" class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-file"></i> Mantenedor actividades</a>
        </li>
        <li id="menu_usuarios" class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-user"></i> Usuarios</a>
        </li> -->
       </ul>

      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <?php echo $n[0];?>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
            <a href="unlogin" class="dropdown-item" href="#">Cerrar Sesi&oacute;n</a>
          </div>

        </li>
      </ul> 
    </div>

  </nav>
</header> 




