<?php 
require_once('../../models/EmpleosModel.php');
$empleo=new empleos;
$data1=$empleo->lista();
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
    EDITAR USUARIO
    </div><!--tittle-->
   <div class="label_form">Carnet:
        </div><!--tittle-->
        <div class="input_form">
        <input type="text" id="txtEMCarnet" name="txtEMCarnet"/>
        </div> 
        
        
           <div class="label_form">Empleo:
        </div><!--tittle-->
        <div class="input_form">
         <select id="sltEMEmpleo" name="sltEMEmpleo">
         
           <?php
                    foreach ($data1 as $v1) {
                        ?>
         <option value="<?php echo $v1['id_empleo'];?>"><?php echo $v1['observacion'];?></option>
         
          <?php
                    }
                        ?>
                            
         </select>
        </div>

    <div class="label_form">
    Nombre:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtEMNombre" name="txtEMNombre"/> 
    </div>
    
    <div class="label_form">Paterno:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtEMPaterno" name="txtEMPaterno"/>
    </div>
    
    <div class="label_form">Materno:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtEMMaterno" name="txtEMMaterno"/>
    </div>
    
     <div class="label_form">Fecha Nacimiento:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtEMFechaN" name="txtEMFechaN"/>
    </div>
    
    <div class="label_form">Genero:
    </div><!--tittle-->
    <div class="input_form">
   <select id="sltEMGenero" name="sltEMGenero">
   <option value="F">FEMENINO</option>
   <option value="M">MASCULINO</option> 
    </select>
    </div>
    
    <div class="label_form">Telefono Fijo:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtEMTelefonoF" name="txtEMTelefonoF"/>
    </div>
    
    <div class="label_form">Celular:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtEMCelular" name="txtEMCelular"/>
    </div>
      
      
    <div class="label_form">Direccion:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtEMDireccion" name="txtEMDireccion"/>
    </div> 
    
    <div class="label_form">Zona:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtEMZona" name="txtEMZona"/>
    </div>
    
    <div class="label_form">Ciudad:
    </div><!--tittle-->
    <div class="input_form">
    <select id="sltEMCiudad" name="sltEMCiudad">
    <option value="LP">LA PAZ</option>
    <option value="OR">ORURO</option>
    <option value="PO">POTOSI</option>
    <option value="CO">COCHABAMBA</option>
    <option value="CH">CHUQUISACA</option>
    <option value="TA">TARIJA</option>
    <option value="SC">SANTA CRUZ</option>
    <option value="BE">BENI</option>
    <option value="PA">PANDO</option>
    </select>
    </div>
    
    <div class="label_form">Foto:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtEMFoto" name="txtEMFoto"/>
    </div> 
    
    <div class="label_form">Fecha de Ingreso:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtEMFechaI" name="txtEMFechaI"/>
    </div>
    
    <div class="label_form">Observacion:
    </div><!--tittle-->
    <div class="input_form">
     <input type="text" id="txtEMObservacion" name="txtEMObservacion"/>
    </div>
      <div class="label_form">
    Estado:
    </div><!--tittle-->
    <div class="input_form">
     <select id="sltEMEstado" name="sltEMEstado">
      <option value="1">Activo</option>
      <option value="2">Inactivo</option>
     </select>
    </div>
       
    <div class="button_form">
 <input type="button" id="btnUEGuardar" name="btnUEGuardar" value="Guardar" onclick="javascript:umodifica2()"/>
    </div><!--tittle-->
    <div class="button_form">
    <input type="button" id="btnUELimpiar" name="btnUELimpiar" value="Limpiar"/>
    </div>
</div><!--admin_formulario-->
</div><!--container-->
</body>
</html>