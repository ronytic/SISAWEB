<?php 
require_once('../../../models/CarreraModel.php');
$carrera=new Carreras;
$data2=$carrera->listaid();


//print_r($_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
	<script type="text/javascript" language="javascript" src="../../js/jquery.js"></script>
    	<script type="text/javascript" language="javascript" src="../../js/C_admin.js"></script>
</head>
<body>
<div class="container_formulario">
<div class="admin_formulario">
 	<div class="tittle_form">
    REGISTRO DE CARRERAS
    </div><!--tittle-->
    
    <div class="label_form">Id Carrera:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtCAId" name="txtCAId"/>
    </div> 
    
    <div class="label_form">Carrera:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtCACarrera" name="txtCACarrera"/>
    </div> 
       <div class="label_form">Fecha de Creacion:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtCAFechaC" name="txtCAFechaC"/>
    </div>
    
    <div class="label_form">
    Observacion:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtCAObservacion" name="txtCAObservacion"/> 
    </div>
    
   
    <div class="button_form">
    <input type="button" id="btnCAGuardar" name="btnCAGuardar" value="Guardar" onclick="javascript:cadiciona()"/>
    </div><!--tittle-->
    <div class="button_form">
    <input type="button" id="btnCALimpiar" name="btnCALimpiar" value="Limpiar"/>
    </div>
</div><!--admin_formulario-->
</div><!--container-->
</body>
</html>