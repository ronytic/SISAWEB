<?php 
//$emp=$_REQUEST['emple'];
require_once('../../models/EmpleosModel.php');
$empleo=new empleos;
$data1=$empleo->lista();

//echo "esto es los estudios".$emp;
require_once('../../models/HAcademicoEModel.php');
$estudios=new estudiosE;
$datae1=$estudios->listaid($data['carnet']);
$num=0;

/*require_once('../../models/HAcademicoEModel.php');
$estudiose=new estudiosE;
$datae1=$estudiose->listaid('545889');
print_r($datae1);

*/
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<hEMd>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edicion de usuarios</title>
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.js"></script>
    	<script type="text/javascript" language="javascript" src="../../site_media/js/E_admin.js"></script>
<link rel="stylesheet" type="text/css" href="../../site_media/css/main.css" />
<link rel="stylesheet" type="text/css" href="../../site_media/jquery-ui-1.7.2.custom.css" />
</hEMd>
<body>
<div class="container_formulario">
<div class="admin_formulario">
 	<div class="tittle_form">
   
    EDITAR DATOS PERSONALES DE EMPLEADO
    </div><!--tittle-->
  
  <div id="adiP">
<div class="tbltitulabel">
    Datos Personales
    </div><!--tittle-->
    <table id="tblDatosP">
        <tr>
            <td>
          <div class="tbllabel">  Nombre:</div>
    	  <div class="tblinput_form"> <input type="text" id="txtEMNombre" name="txtEMNombre"/>  </div>
            </td>
            <td>
             <div class="tbllabel">Paterno:</div>
     		 <div class="tblinput_form"><input type="text" id="txtEMPaterno" name="txtEMPaterno"/></div>
				
            </td>
            <td>
     		 <div class="tbllabel"> Materno:</div>
  
      <div class="tblinput_form"><input type="text" id="txtEMMaterno" name="txtEMMaterno"/></div>

            </td>
        </tr>
        <tr>
            <td>
             <div class="tbllabel">Carnet:</div>
         <div class="tblinput_form"><input type="text" id="txtEMCarnet" name="txtEMCarnet"/></div>
    
            </td>
             <td>
             <div class="tbllabel">Empleo:</div>
        
          <div class="tblinput_form"><select id="sltEMEmpleo" name="sltEMEmpleo">
         
           <?php
                    foreach ($data1 as $v1) {
                        ?>
         <option value="<?php echo $v1['id_empleo'];?>"><?php echo $v1['observacion'];?></option>
         
          <?php
                    }
                        ?>
                            
         </select>
         </div>
            </td>
             <td>
              <div class="tbllabel"> Fecha Nacimiento:</div>
          <div class="tblinput_form"> <input type="text" id="txtEMFechaN" name="txtEMFechaN"/></div>
            </td>
        </tr>
        <tr>
            <td>
          		 <div class="tbllabel">Genero:</div>
                  <div class="tblinput_form"> <select id="sltEMGenero" name="sltEMGenero">
   <option value="F">FEMENINO</option>
   <option value="M">MASCULINO</option> 
    </select></div>
    
            </td>
        

             <td>
                <div class="tbllabel"> Telefono Fijo:</div>
   			 <div class="tblinput_form"><input type="text" id="txtEMTelefonoF" name="txtEMTelefonoF"/></div>
            </td>
            
             <td>
              <div class="tbllabel">Celular:</div>
     		 <div class="tblinput_form"><input type="text" id="txtEMCelular" name="txtEMCelular"/></div>

            </td>
        </tr>
         <tr>
             <td>
            <div class="tbllabel">Direccion:</div>
   		     <div class="tblinput_form"><input type="text" id="txtEMDireccion" name="txtEMDireccion"/></div>
             </td>
             
             <td>
              <div class="tbllabel"> Zona:</div>
		      <div class="tblinput_form"><input type="text" id="txtEMZona" name="txtEMZona"/></div>

             </td>
             <td>
                <div class="tbllabel">Ciudad:</div>
         <div class="tblinput_form"><select id="sltEMCiudad" name="sltEMCiudad">
    <option value="LA PAZ">LA PAZ</option>
    <option value="ORURO">ORURO</option>
    <option value="POTOSI">POTOSI</option>
    <option value="COCHABAMBA">COCHABAMBA</option>
    <option value="CHUQUISACA">CHUQUISACA</option>
    <option value="TARIJA">TARIJA</option>
    <option value="SANTA CRUZ">SANTA CRUZ</option>
    <option value="BENI">BENI</option>
    <option value="PANDO">PANDO</option>
    </select>
    </div>
			</td>
         
         </tr>
         <tr>
             <td>
                  <div class="tbllabel">Foto:</div>
                
                 <div class="tblinput_form"> <input type="text" id="txtEMFoto" name="txtEMFoto"/></div>

    
             </td>
             <td>
             <div class="tbllabel"> Fecha de Ingreso:</div>
   
     		 <div class="tblinput_form"><input type="text" id="txtEMFechaI" name="txtEMFechaI"/></div>
  
             </td>
             
               <td>
             <div class="tbllabel"> Observacion:</div>
   
     		 <div class="tblinput_form"><input type="text" id="txtEMObservacion" name="txtEMObservacion"/></div>

             </td>
         </tr>
    </table>
    </div>
   
  <div id="adiA">
    <div class="tbltitulabel" id="tbltitulabel">
    Datos Academicos
    </div><!--tittle-->
       <table id="tblDatosA">
        <tr>
            <td>
      			 <div class="tbllabel">Estudio:</div>
   		  
            </td>
             <td>
              <div class="tbllabel">Lugar Estudio:</div>
   		   
            </td>
             <td>
              <div class="tbllabel">Fecha de Estudio:</div>
   		
            </td>
        </tr>
        
        <?php
                foreach ($datae1 as $ve1) {
					?>
        <tr>
        
            <td>
      			<input type="hidden" id="txtEAidm<?php echo $num;?>" name="txtEAidm" value="<?php echo $ve1['id_faca'] ?>"/>
                
   		     <div class="tblinput_form"> <input type="text" id="txtEAEstudiom<?php echo $num;?>" name="txtEAEstudio1" value="<?php echo $ve1['estudio'] ?>"/></div>
            </td>
             <td>
             
   		     <div class="tblinput_form"> <input type="text" id="txtEAELugarm<?php echo $num;?>" name="txtEAELugar1" value="<?php echo $ve1['lugar_estudio'] ?>"/></div>
            </td>
             <td>
              
   		      <div class="tblinput_form"><input type="text" id="txtEAEFecham<?php echo $num;?>" name="txtEAEFecha1" value="<?php echo $ve1['fecha_egreso'] ?>"/></div>
            </td>
        </tr>
        <?php 
		$num=$num+1;
		} ?>
    
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
              <div class="tblbutton_form"><input type="button" id="btnUEGuardar" name="btnUEGuardar" value="Guardar" onclick="javascript:umodifica2(<?php echo $num ?>)"/></div>
        
                </td>
                   <td>
                    <div class="tblbutton_form"><input type="button" id="btnUELimpiar" name="btnUELimpiar" value="Limpiar"/></div>
        
                </td>
            </tr>
        </table>
   	</div>
  
</div><!--admin_formulario-->
</div><!--container-->
</body>
</html>