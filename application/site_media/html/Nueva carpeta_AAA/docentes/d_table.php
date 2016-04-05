<?php 
require_once('../../../models/DocenteModel.php');
$usuario=new Docentes;
$data1=$usuario->lista();
print_r($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../../site_media/js/tabla.js"></script>
    <script type="text/javascript" language="javascript" src="../../site_media/js/D_Admin.js"></script>
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.dataTables.js"></script>

</head>

<body>
<table id="example" class="display" cellspacing="0" width="100%">
            
				<thead>
					<tr>
						<th>Carnet</th>
						<th>Nombre</th>
						<th>Paterno</th>
						<th>Materno</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Estado</th>
                        <th>Seleccionar</th>
						
					</tr>
				</thead>

				<tfoot>
              <tr>
						<th>Carnet</th>
						<th>Nombre</th>
						<th>Paterno</th>
						<th>Materno</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Estado</th>
                        <th>Seleccionar</th>
						
					</tr>
				</tfoot>

				<tbody>
        <?php
                foreach ($data1 as $v1) {
					?>
					<tr>
						<th><?php echo $v1['ci_docente'];?></th>
                        <th><?php echo $v1['nombre']; ?></th>
                        <th><?php echo $v1['paterno'];?></th>
                        <th><?php echo $v1['materno'];?></th>
                        <th><?php echo $v1['direccion'];?></th>
                        <th><?php echo $v1['telefono'];?></th>
                        <th><?php echo $v1['celular'];?></th>
                        <th><?php echo $v1['email'];?></th>
                        <th><?php echo $v1['estado'];?></th>
					<th><label>

			
                <input name="destado" id="destado" type="radio" value="<?php echo $v1['ci_docente'] ?>"/>
              </label></th>
					</tr>
					<?php } ?>
				</tbody>
			</table>


	

</body>
</html>