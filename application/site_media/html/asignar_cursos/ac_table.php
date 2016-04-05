<?php 
require_once('../../../models/AsignaCursosModel.php');
require_once('../../../models/EmpleadoModel.php');
require_once('../../../models/CursoModel.php');
require_once('../../../models/CarreraModel.php');
require_once('../../../models/SeminarioConferenciaModel.php');
require_once('../../../models/AsignaSemConModel.php');

$asicur=new Asigcursos;
$data1=$asicur->lista();

$asiseco=new Asigsemcon;
$datas=$asiseco->lista();

$emp=new empleados;
$emp1=new empleados;
$cur=new cursos;
$car=new carreras;
$sec=new semcon;

//print_r($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../../site_media/js/tabla.js"></script>
    <script type="text/javascript" language="javascript" src="../../site_media/js/U_Admin.js"></script>
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.dataTables.js"></script>

</head>

<body>
<table id="example" class="display" cellspacing="0" width="100%">
            
				<thead>
					<tr>
						<th>Docente</th>
						<th>Curso</th>
                        <th>Seminario,Conferencia </th>
					    <th>Estado</th>
                        <th>Seleccionar</th>
						
					</tr>
				</thead>

				<tfoot>
              <tr>
						<th>Docente</th>
						<th>Curso</th>
                        <th>Seminario,Conferencia </th>
					    <th>Estado</th>
                        <th>Seleccionar</th>
						
					</tr>
				</tfoot>

				<tbody>
        <?php
                foreach ($data1 as $v1) {
					?>
					<tr>
						<th><?php $datae=$emp->lista_ide($v1['id_empleado']);
						  foreach ($datae as $ve) {echo $ve['nombre'].' '.$ve['paterno'];}?></th>
                        
                        <th><?php 
						
						$data=$cur->get1($v1['id_curso']);
						foreach ($data as $v) {
							$cur= $v['nombre'];
							$idca=$v['id_carrera'];
							}
							$dataca=$car->getid($idca);
							foreach ($dataca as $va) {
							echo $va['carrera']." ".$cur;
							
							}
						 ?>
                         </th>
                         <th>
                         -
                         </th>
                        
                        <th><?php echo $v1['estado'];?></th>
					<th><label>

			
                <input name="uestado" id="acestado" type="radio" value="<?php echo $v1['id_asig_cur'] ?>"/>
              </label></th>
					</tr>
					<?php } ?>
                    
                    
                      <?php
				 echo"esto es";
				// print_r($datas);
                foreach ($datas as $vs) {
					?>
					<tr>
						<th><?php 
						//echo $vs['id_empleado'];
						$datae1=$emp1->lista_ide($vs['id_empleado']);
//						print_r($datae1);
						  foreach ($datae1 as $ve1) {echo $ve1['nombre'].' '.$ve1['paterno'];}
						  ?></th>
                         <th>
                         -
                         </th>
                        <th><?php 
						echo $vs['id_semcur'];
						//$data=$sec->lista_id('c1');
						//print_r($data);
						/*foreach ($data as $v) {
							echo( $v['nombre']);
							
							}*/
						 ?>
                         </th>
                        
                        
                        <th><?php echo $v1['estado'];?></th>
					<th><label>

			
                <input name="uestado" id="acestado" type="radio" value="<?php echo $v1['id_asig_cur'] ?>"/>
              </label></th>
					</tr>
					<?php } ?>
				</tbody>
			</table>


	

</body>
</html>