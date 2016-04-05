<?php 
require_once('../../../models/CursoModel.php');
$curso=new cursos;
$data1=$curso->lista();
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
						<th>Carrera</th>
						<th>Nombre</th>
						<th>Codigo</th>
                        <th>Nivel</th>
                        <th>Observacion</th>
                          <th>Estado</th>
                        <th>Seleccionar</th>
						
					</tr>
				</thead>

				<tfoot>
              <tr>
					<th>Carrera</th>
						<th>Nombre</th>
						<th>Codigo</th>
                        <th>Nivel</th>
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
                        <th><?php echo $v1['nombre']; ?></th>
                        <th><?php echo $v1['codigo'];?></th>
                        <th><?php echo $v1['nivel'];?></th>
                        <th><?php echo $v1['observacion'];?></th>
                        <th><?php echo $v1['estado'];?></th>
					<th><label>

			
                <input name="idcur" id="idcur" type="radio" value="<?php echo $v1['id_curso'] ?>"/>
              </label></th>
					</tr>
					<?php } ?>
				</tbody>
			</table>


	

</body>
</html>