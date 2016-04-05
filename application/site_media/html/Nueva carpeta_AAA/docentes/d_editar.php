<?php print_r($_SERVER['REQUEST_URI']);
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
    EDITAR DOCENTES  u_editar
    </div><!--tittle-->
    
    <div class="label_form">Nombre:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtDNombre" name="txtDNombre" value="{nombre}"/>
    </div>
    
     <div class="label_form">Paterno:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtDPaterno" name="txtDPaterno" value="{paterno}"/>
    </div> 
     
      <div class="label_form">Materno:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtDMaterno" name="txtDMaterno" value="{materno}"/>
    </div> 
     
      <div class="label_form">Direccion:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtDDireccion" name="txtDDireccion" value="{direccion}"/>
    </div> 
    
     <div class="label_form">Telefono:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtDTelefono" name="txtDTelefono" value="{telefono}"/>
    </div> 
    
     <div class="label_form">Celular:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtDCelular" name="txtDCelular" value="{celular}"/>
    </div> 
    
    <div class="label_form">
    Email:
    </div><!--tittle-->
   <div class="input_form">
     <input type="text" id="txtDEmail" name="txtDEmail" value="{email}"/>
    </div>
    
   <div class="label_form">
    Estado:
    </div><!--tittle-->
    <div class="input_form">
     <select id="sltDEstado" name="sltDEstado">
      <option>1 </option>
      <option>2 </option>
     </select>
    </div>
    
    <div class="button_form">
 <input type="button" id="btnDAGuardar" name="btnDAGuardar" value="Guardar" onclick="javascript:dmodifica2()"/>
    </div><!--tittle-->
    <div class="button_form">
    <input type="button" id="btnDALimpiar" name="btnDALimpiar" value="Limpiar"/>
    </div>
</div><!--admin_formulario-->
</div><!--container-->
</body>
</html>