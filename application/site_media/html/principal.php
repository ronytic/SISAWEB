<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{titulo}</title>
<link rel="stylesheet" type="text/css" href="../site_media/css/main.css" />
<link href="../site_media/css/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../site_media/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../site_media/js/funciones.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="../site_media/images/favicon.ico"/>

</head>

<body>
<?php print_r($_SERVER['REQUEST_URI']); ?>
<div id="Pcontainer">
	<div id="Phead">
    <div id="Pbanner">
    	<div id="Plogo">
          <img src="../site_media/img/logo.png" align="middle"/>      
    	</div>               
        <div id="Pslogan">
           <img src="../site_media/img/logo2.gif" align="middle"/>        
    	</div>
        <div id="Pinformation-user">
           <span class="title_information">Usuario:</span><span class="view_information">{usuario}</span>
                 <span class="title_information">Login:</span><span class="view_information">{login}</span>
                 <span class="title_information">Cargo:</span><span class="view_information">{perfil}</span>
                 <span class="title_information">Hora:</span><span class="view_information">{hora}</span>        
    	</div>
        <div id="logout">
             <a href=""><img src="../site_media/img/logout.png" title="salir"/></a>
             <span class="letter_session">Cerrar Sesion</span>
            </div><!--logout-->
    </div>
    <div id="Pmenu">
              
    </div>
	</div>

    <div id="Pbody">
      <iframe src="../site_media/html/main.php" marginheight="0" marginwidth="0" name="main" scrolling="no" id="body-iframe" ></iframe>
    </div><!-- end body-->
</div> <!--end container-->
</body>
</html>