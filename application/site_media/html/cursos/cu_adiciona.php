<?php 
require_once('../../../models/CarreraModel.php');
$carrera=new Carreras;
$data1=$carrera->lista();

//print_r($_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
	<script type="text/javascript" language="javascript" src="../../js/jquery.js"></script>
    	<script type="text/javascript" language="javascript" src="../../js/CU_admin.js"></script>
</head>
<body>
<div class="container_formulario">
<div class="admin_formulario">
 	<div class="tittle_form">
    REGISTRO DE CURSOS
    </div><!--tittle-->
    
    <div class="label_form">Carrera:
    </div><!--tittle-->
     <div class="input_form">
     <select id="sltCUACarrera" name="sltCUACarrera">
     
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
    <input type="text" id="txtCUANombre" name="txtCUANombre"/>
    </div> 
       <div class="label_form">Codigo:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtCUACodigo" name="txtCUACodigo"/>
    </div>
    
    <div class="label_form">
    Nivel:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtCUANivel" name="txtCUANivel"/> 
    </div>
    
    <div class="label_form">Observacion:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtCUAObservacion" name="txtCUAObservacion"/>
    </div>
    
    <div class="label_form">
    Estado:
    </div><!--tittle-->
    <div class="input_form">
     <select id="sltCUAEstado" name="sltCUAEstado">
      <option value="1">Activo</option>
      <option value="0">Inactivo</option>
     </select>
    </div>
    
    <div class="button_form">
    <input type="button" id="btnCUAGuardar" name="btnCUAGuardar" value="Guardar" onclick="javascript:cuadiciona()"/>
    </div><!--tittle-->
    <div class="button_form">
    <input type="button" id="btnCUALimpiar" name="btnCUALimpiar" value="Limpiar"/>
    </div>
</div><!--admin_formulario-->
</div><!--container-->
</body>
</html>