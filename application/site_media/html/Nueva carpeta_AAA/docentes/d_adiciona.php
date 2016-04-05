<?php 
//require_once('../../../models/UsuarioModel.php');
//$usuario=new Usuarios;
//$data1=$usuario->lista();
print_r($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
	<script type="text/javascript" language="javascript" src="../../js/jquery.js"></script>
    	<script type="text/javascript" language="javascript" src="../../js/D_admin.js"></script>
</head>
<body>
<div class="container_formulario">
<div class="admin_formulario">
 	<div class="tittle_form">
    REGISTRO DE DOCENTES
    </div><!--tittle-->
    <div class="label_form">Carnet:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtDCarnet" name="txtDcarnet"/>
    </div> 
    <div class="label_form">
    Nombre:
    </div><!--tittle-->
   <div class="input_form">
     <input type="text" id="txtDNombre" name="txtDNombre"/>
    </div>
    
    <div class="label_form">
    Paterno:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtDPaterno" name="txtDPaterno"/> 
    </div>
    
    <div class="label_form">Materno:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtDMaterno" name="txtDMaterno"/>
    </div>
    
    <div class="label_form">Direccion:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtDDireccion" name="txtDDireccion"/>
    </div>
    
    <div class="label_form">Telefono:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtDTelefono" name="txtDTelefono"/>
    </div>
    
    <div class="label_form">Celular:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtDCelular" name="txtDCelular"/>
    </div>
    
    <div class="label_form">Email:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtDEmail" name="txtDEmail"/>
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
    <input type="button" id="btnDAGuardar" name="btnDAGuardar" value="Guardar" onclick="javascript:dadiciona()"/>
    </div><!--tittle-->
    <div class="button_form">
    <input type="button" id="btnDALimpiar" name="btnDALimpiar" value="Limpiar"/>
    </div>
</div><!--admin_formulario-->
</div><!--container-->
</body>
</html>