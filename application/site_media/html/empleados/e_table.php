<?php 
require_once('../../../models/EmpleadoModel.php');
require_once('../../../models/EmpleosModel.php');
$empleado=new empleados;
$data1=$empleado->lista();


//print_r($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../../site_media/js/tabla.js"></script>
    <script type="text/javascript" language="javascript" src="../../site_media/js/E_Admin.js"></script>
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.dataTables.js"></script>

</head>

<body>
<table id="example" class="display" cellspacing="0" width="100%">
            
				<thead>
					<tr>
						<th>Cargo</th>
						<th>Carnet</th>
						<th>Nombre</th>
                        <th>Fecha Nacimiento</th>
                        <th>Genero</th>
                        <th>Telefono fijo</th>
                        <th>Celular</th>
                        <th>Direccion</th>
                 
                        <th>Fecha Ingreso</th>
                        <th>Estado</th>
                         <th>Escoger</th>
						
					</tr>
				</thead>

				<tfoot>
              <tr>
						<th>Cargo</th>
						<th>Carnet</th>
						<th>Nombre</th>
                        <th>Fecha Nacimiento</th>
                        <th>Genero</th>
                        <th>Telefono fijo</th>
                        <th>Celular</th>
                        <th>Direccion</th>
                      
                        <th>Fecha Ingreso</th>
                        <th>Estado</th>
						 <th>Escoger</th>
					</tr>
				</tfoot>

				<tbody>
        <?php
                foreach ($data1 as $v1) {
					?>
					<tr>
                    	<th><?php
						 
						$empleo=new empleos;
 						$data2=$empleo->listaid($v1['id_empleo']);
//						print_r($data2);
						foreach ($data2 as $v2) { echo $v2['observacion'];}?></th>
						<th><?php echo $v1['carnet']; ?></th>
						<th><?php echo ($v1['nombre']." ".$v1['paterno']." ".$v1['materno']);?></th>
                        <th><?php echo $v1['fecha_nacimiento'];?></th>
                        <th><?php echo $v1['genero'];?></th>
                        <th><?php echo $v1['tel_fijo'];?></th>
                        <th><?php echo $v1['celular'];?></th>
                        <th><?php echo ($v1['direccion']." ".$v1['zona']);?></th>
                  
                        <th><?php echo $v1['fecha_ingreso'];?></th>
                        <th><?php echo $v1['estado'];?></th>
					
					<th><label>

			
                <input name="eestado" id="eestado" type="radio" value="<?php echo $v1['carnet'] ?>"/>
              </label></th>
					</tr>
					<?php } ?>
				</tbody>
			</table>


	

</body>
</html>