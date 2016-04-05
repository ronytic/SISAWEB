<?php 
require_once('../../models/PerfilModel.php');
$perfil=new Perfiles;
$data1=$perfil->lista();
//print_r($_SERVER['REQUEST_URI']);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edicion de usuarios</title>
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.js"></script>
    	<script type="text/javascript" language="javascript" src="../../site_media/js/U_admin.js"></script>
<link rel="stylesheet" type="text/css" href="../../site_media/css/main.css" />
<link rel="stylesheet" type="text/css" href="../../site_media/jquery-ui-1.7.2.custom.css" />
</head>
<body>
<div class="container_formulario">
<div class="admin_formulario">
 	<div class="tittle_form">
    EDITAR USUARIO
    </div><!--tittle-->
    <div class="label_form">Login:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtUELogin" name="txtUELogin" readonly="readonly" value="{login}" />
    </div> 
   
    <div class="label_form">Carnet:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtUECarnet" name="txtUECarnet" value="{carnet}"/>
    </div> 
    <div class="label_form">Perfil:
    </div><!--tittle-->
    <div class="input_form">
     <select id="sltUEPerfil" name="sltUEPerfil">
     
       <?php
                foreach ($data1 as $v1) {
					?>
	 <option value="<?php echo $v1['id_perfil'];?>"><?php echo $v1['nombre'];?></option>
     
      <?php
				}
					?>
						
     </select>
    </div>
    
    <div class="label_form">
    Password:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtUEPassword" name="txtUEPassword" value="{password}"/> 
    </div>
    
      <div class="label_form">
    Estado:
    </div><!--tittle-->
    <div class="input_form">
     <select id="sltUEEstado" name="sltUAEstado">
      <option value="1">Activo</option>
      <option value="0">Inactivo</option>
     </select>
    </div>
       
    <div class="button_form">
 <input type="button" id="btnUeGuardar" name="btnUEGuardar" value="Guardar" onclick="javascript:umodifica2()"/>
    </div><!--tittle-->
    <div class="button_form">
    <input type="button" id="btnUELimpiar" name="btnUELimpiar" value="Limpiar"/>
    </div>
</div><!--admin_formulario-->
</div><!--container-->
</body>
</html>