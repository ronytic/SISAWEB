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
    	<script type="text/javascript" language="javascript" src="../../site_media/js/C_admin.js"></script>
<link rel="stylesheet" type="text/css" href="../../site_media/css/main.css" />
<link rel="stylesheet" type="text/css" href="../../site_media/jquery-ui-1.7.2.custom.css" />
</head>
<body>
<div class="container_formulario">
<div class="admin_formulario">
 	<div class="tittle_form">
    EDITAR USUARIO
    </div><!--tittle-->
    <div class="label_form">Id Carrera:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtCMId" name="txtCAId" readonly="readonly"/>
    </div> 
    
    <div class="label_form">Carrera:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtCMCarrera" name="txtCMCarrera"/>
    </div> 
       <div class="label_form">Fecha de Creacion:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtCMFechaC" name="txtCMFechaC"/>
    </div>
    
    <div class="label_form">
    Observacion:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtCMObservacion" name="txtCMObservacion"/> 
    </div>
        
      <div class="label_form">
    Estado:
    </div><!--tittle-->
    <div class="input_form">
     <select id="sltCMEstado" name="sltCMEstado">
      <option value="1">Activo</option>
      <option value="0">Inactivo</option>
     </select>
    </div>
       
    <div class="button_form">
 <input type="button" id="btnCGuardar" name="btnCGuardar" value="Guardar" onclick="javascript:cmodifica2()"/>
    </div><!--tittle-->
    <div class="button_form">
    <input type="button" id="btnUELimpiar" name="btnUELimpiar" value="Limpiar"/>
    </div>
</div><!--admin_formulario-->
</div><!--container-->
</body>
</html>