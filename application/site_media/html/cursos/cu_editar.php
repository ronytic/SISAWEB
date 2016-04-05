<?php 
require_once('../../models/CarreraModel.php');
$carrera=new Carreras;
$data1=$carrera->lista();
//print_r($_SERVER['REQUEST_URI']);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edicion de usuarios</title>
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.js"></script>
    	<script type="text/javascript" language="javascript" src="../../site_media/js/CU_admin.js"></script>
<link rel="stylesheet" type="text/css" href="../../site_media/css/main.css" />
<link rel="stylesheet" type="text/css" href="../../site_media/jquery-ui-1.7.2.custom.css" />
</head>
<body>
<div class="container_formulario">
<div class="admin_formulario">
 	<div class="tittle_form">
    EDITAR CURSOS
    </div><!--tittle-->
    <div class="label_form">Carrera:
    </div><!--tittle-->
     <div class="input_form">
     <select id="sltCUMCarrera" name="sltCUMCarrera">
     
       <?php
                foreach ($data1 as $v1) {
					?>
	 <option value="<?php echo $v1['id_carrera'];?>"><?php echo $v1['carrera'];?></option>
     
      <?php
				}
					?>
						
     </select>
    </div>
    
    <div class="label_form">Nombre:
    </div><!--tittle-->
    <div class="input_form">
    <input type="hidden" id="txtCUId" name="txtCUId" />
    <input type="text" id="txtCUMNombre" name="txtCUMNombre"/>
    </div> 
       <div class="label_form">Codigo:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtCUMCodigo" name="txtCUMCodigo"/>
    </div>
    
    <div class="label_form">
    Nivel:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtCUMNivel" name="txtCUMNivel"/> 
    </div>
    
    <div class="label_form">Observacion:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtCUMObservacion" name="txtCUMObservacion"/>
    </div>
    
    <div class="label_form">
    Estado:
    </div><!--tittle-->
    <div class="input_form">
     <select id="sltCUMEstado" name="sltCUMEstado">
      <option value="1">Activo</option>
      <option value="0">Inactivo</option>
     </select>
    </div>
       
    <div class="button_form">
 <input type="button" id="btnCUMGuardar" name="btnCUMGuardar" value="Guardar" onclick="javascript:cumodifica2()"/>
    </div><!--tittle-->
    <div class="button_form">
    <input type="button" id="btnCUMLimpiar" name="btnCUMLimpiar" value="Limpiar"/>
    </div>
</div><!--admin_formulario-->
</div><!--container-->
</body>
</html>