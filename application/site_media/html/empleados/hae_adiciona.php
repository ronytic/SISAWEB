<?php 
require_once('../../../models/EmpleosModel.php');
$empleo=new empleos;
$data1=$empleo->lista();

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
	<div class="tittle_form">
    REGISTRO DE EMPLEADOS
    </div><!--tittle-->
    <div id="adiP">
<div class="tbltitulabel">
    Datos Personales
    </div><!--tittle-->
    <table id="tblDatosP">
        <tr>
            <td>
          <div class="tbllabel">  Nombre:</div>
    	  <div class="tblinput_form"> <input type="text" id="txtHANombre" name="txtEANombre"/> </div>
            </td>
            <td>
             <div class="tbllabel">Paterno:</div>
     		 <div class="tblinput_form"><input type="text" id="txtHAPaterno" name="txtEAPaterno"/></div>
				
            </td>
            <td>
     		 <div class="tbllabel"> Materno:</div>
  
      <div class="tblinput_form"><input type="text" id="txtHAMaterno" name="txtEAMaterno"/></div>

            </td>
        </tr>
        <tr>
            <td>
             <div class="tbllabel">Carnet:</div>
         <div class="tblinput_form"><input type="text" id="txtHACarnet" name="txtEACarnet"/></div>
    
            </td>
             
         </tr>
    </table>
    </div>
    <div id="adiA">
    <div class="tbltitulabel" id="tbltitulabel">
    Adicionar Datos Academicos
    </div><!--tittle-->
       <table id="tblDatosA">
        <tr>
            <td>
      			 <div class="tbllabel">Estudio:</div>
   		     <div class="tblinput_form"> <input type="text" id="txtEAEstudio1" name="txtEAEstudio1"/></div>
            </td>
             <td>
              <div class="tbllabel">Lugar Estudio:</div>
   		     <div class="tblinput_form"> <input type="text" id="txtEAELugar1" name="txtEAELugar1"/></div>
            </td>
             <td>
              <div class="tbllabel">Fecha de Estudio:</div>
   		      <div class="tblinput_form"><input type="text" id="txtEAEFecha1" name="txtEAEFecha1"/></div>
            </td>
        </tr>
    </table>
    
    </div>
 
   <div id="adicon">
   
   
	
   <a href="javascript:adiestudioe()">
   <img width="50px" height="50px" src="../../site_media/img/inscripcion.bmp">

</a>
<div class="tbltitulabel"> Adiciona Estudios</div>
</div>
    <div id="adibot">
         <table id="tblbotones">
            <tr>
                <td>
              <div class="tblbutton_form"><input type="button" id="btnEAGuardar" name="btnEAGuardar" value="Guardar" onclick="javascript:eadiciona()"/></div>
        
                </td>
                   <td>
                    <div class="tblbutton_form"><input type="button" id="btnEALimpiar" name="btnEALimpiar" value="Limpiar"/></div>
        
                </td>
            </tr>
        </table>
   	</div>
</div><!--container-->
</body>
</html>