<?php 

//print_r($_SERVER['REQUEST_URI']);
$emp=$_REQUEST['emp'];
//echo "esto es".$emp;
require_once('../../../models/EmpleadoModel.php');
$empleado=new empleados;
$data1=$empleado->lista_car($emp);
//print_r($data1);

//echo "esto es los estudios".$emp;
require_once('../../../models/HAcademicoEModel.php');
$estudios=new estudiosE;
$datae1=$estudios->listaid($emp);
//print_r($datae1);

?>
<table id="tblDatosA">
 <?php
                foreach ($data1 as $v1) {
					?>
<tr>
    <td>
    <?php echo $v1['nombre'] ?>
    </td>
    <td>
    <?php echo $v1['paterno'] ?>
    </td>
    <td>
    <?php echo $v1['materno'] ?>
    </td>
</tr>
 <?php
				}
				?>
       <tr>
       		<td>
        	<div class="tbllabel">Estudio</div>
            </td>
            <td>
            <div class="tbllabel">Lugar Estudio</div>
            </td>
            <td>
            <div class="tbllabel">Fecha de Estudio</div>
            </td>
       </tr>
       <?php
                foreach ($datae1 as $ve1) {
					?>
        <tr>
            <td>
      			
   		     <div class="tblinput_form"> <input type="text" id="txtEAEstudio1" name="txtEAEstudio1" value="<?php echo $ve1['estudio'] ?>"/></div>
            </td>
             <td>
             
   		     <div class="tblinput_form"> <input type="text" id="txtEAELugar1" name="txtEAELugar1" value="<?php echo $ve1['lugar_estudio'] ?>"/></div>
            </td>
             <td>
              
   		      <div class="tblinput_form"><input type="text" id="txtEAEFecha1" name="txtEAEFecha1" value="<?php echo $ve1['fecha_egreso'] ?>"/></div>
            </td>
        </tr>
        <?php } ?>
    </table>
<?php
/*echo"<br><br>ahora los estudios";
require_once('../../../models/HAcademicoEModel.php');
$estudiose=new estudiosE;
$datae=$estudiose->listaid($emp);
print_r($datae);
*/
?>

