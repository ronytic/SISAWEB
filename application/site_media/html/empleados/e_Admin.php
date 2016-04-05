<?PHP 
//print_r($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" colocalntent="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="../../site_media/css/main.css"/>
<link rel="stylesheet" type="text/css" href="../../site_media/css/jquery.dataTables.css">
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../../site_media/js/tabla.js"></script>
    <script type="text/javascript" language="javascript" src="../../site_media/js/E_Admin.js"></script>
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.dataTables.js"></script>
<script>javascript:adminemp('../../site_media/html/empleados/e_table.php')</script>
</head>
<body>
<div class="content_body">
    <div class="head_admin">
        <div class="tittle_admin">
            <img src="../../site_media/img/docente.jpg" width="30px" height="30px"/>
            <span class="name_admin">ADMINISTRA EMPLEADOS</span>
        </div><!--tittle_admin-->
        <div class="icon_admin">
        	<a href="javascript:adminemp('../../site_media/html/empleados/e_adiciona.php')" > 
            <div class="iconA">
                <img src="../../site_media/img/docente_add.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Adiciona</span>
            </div><!--iconA-->
        	</a>
          
            <a href="javascript:emodifica('../../site_media/html/empleados/e_modifica.php')" > 
            <div class="iconA">
                <img src="../../site_media/img/docente_edit.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Modifica</span>
            </div><!--iconA-->
            </a>
           
            <a href="javascript:e_elimina('../../site_media/html/empleados/e_elimina.php')" > 
            <div class="iconA">
              <img src="../../site_media/img/docente_delete.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Elimina</span>
            </div><!--iconA-->
            </a> 
               
            <a href="javascript:adminemp('../../site_media/html/empleados/e_table.php')" > 
            <div class="iconA">
               <img src="../../site_media/img/docente_search.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Busca</span>
            </div><!--iconA-->
            </a> 
            
             <a href="#" > 
            <div class="iconA">
                <img src="../../site_media/img/docente_asigna.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Asignar C.</span>
            </div><!--iconA-->
            </a> 
             <a href="#" > 
            <div class="iconA">
                <img src="../../site_media/img/docente_detalle.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Detalle</span>
            </div><!--iconA-->
            </a> 
            
        </div><!--icon_admin-->
    </div><!--head_admin-->
    <div id="body_admin">
   
    </div><!--body_admin-->
</div><!--content_body-->
</body>
</html>