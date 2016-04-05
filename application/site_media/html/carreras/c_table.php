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
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../../site_media/js/tabla.js"></script>
    <script type="text/javascript" language="javascript" src="../../site_media/js/C_Admin.js"></script>
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.dataTables.js"></script>

</head>

<body>
<table id="example" class="display" cellspacing="0" width="100%">
            
				<thead>
					<tr>
						<th>Id Carrera</th>
						<th>Carrera</th>
						<th>Fecha de Creacion</th>
                        <th>Observacion</th>
                        <th>Estado</th>
                        <th>Seleccionar</th>
						
					</tr>
				</thead>

				<tfoot>
              <tr>
						<th>Id Carrera</th>
						<th>Carrera</th>
						<th>Fecha de Creacion</th>
                        <th>Observacion</th>
                        <th>Estado</th>
                        <th>Seleccionar</th>
						
					</tr>
				</tfoot>

				<tbody>
        <?php
                foreach ($data1 as $v1) {
					?>
					<tr>
						<th><?php echo $v1['id_carrera'];?></th>
                        <th><?php echo $v1['carrera']; ?></th>
                        <th><?php echo $v1['fecha_creacion'];?></th>
                        <th><?php echo $v1['observacion'];?></th>
                        <th><?php echo $v1['estado'];?></th>
					<th><label>

			
                <input name="cestado" id="cestado" type="radio" value="<?php echo $v1['id_carrera'] ?>"/>
              </label></th>
					</tr>
					<?php } ?>
				</tbody>
			</table>


	

</body>
</html>