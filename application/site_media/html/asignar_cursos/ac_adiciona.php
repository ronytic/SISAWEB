<?php 
require_once('../../../models/PerfilModel.php');
$perfil=new Perfiles;
$data1=$perfil->lista();

require_once('../../../models/UsuarioModel.php');
$usuario1=new Usuarios;
$data2=$usuario1->listaid();

//print_r($_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
	<script type="text/javascript" language="javascript" src="../../js/jquery.js"></script>
    	<script type="text/javascript" language="javascript" src="../../js/U_admin.js"></script>
</head>
<body>
<div class="container_formulario">
<div class="admin_formulario">
 	<div class="tittle_form">
    REGISTRO DE ASIGNACION DE CURSOS
    </div><!--tittle-->
    
    <div class="label_form">Id Usuario:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtUAId" name="txtUAId" value="<?php foreach ($data2 as $v2) {echo $v2['id'];} ?>" readonly="readonly"/>
    </div> 
    
    <div class="label_form">Carnet:
    </div><!--tittle-->
    <div class="input_form">
    <input type="text" id="txtUACarnet" name="txtUACarnet"/>
    </div> 
       <div class="label_form">Perfil:
    </div><!--tittle-->
    <div class="input_form">
     <select id="sltUAPerfil" name="sltUAPerfil">
     
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
    Login:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtUALogin" name="txtUALogin"/> 
    </div>
    
    <div class="label_form">Password:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtUAPassword" name="txtUAPassword"/>
    </div>
    
    <div class="label_form">
    Estado:
    </div><!--tittle-->
    <div class="input_form">
     <select id="sltUAEstado" name="sltUAEstado">
      <option value="1">Activo</option>
      <option value="0">Inactivo</option>
     </select>
    </div>
    
    <div class="button_form">
    <input type="button" id="btnUAGuardar" name="btnUAGuardar" value="Guardar" onclick="javascript:uadiciona()"/>
    </div><!--tittle-->
    <div class="button_form">
    <input type="button" id="btnUALimpiar" name="btnUALimpiar" value="Limpiar"/>
    </div>
</div><!--admin_formulario-->
</div><!--container-->
</body>
</html>