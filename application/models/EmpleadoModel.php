<?php
# Importar modelo de abstracción de base de datos
require_once('db_abstract_model.php');
class empleados extends DBAbstractModel
{
	public $id_empleado;
	public $carnet;
	public $id_empleo;
	public $nombre;
	public $paterno;
	public $materno;
	public $fecha_nacimiento;
	public $genero;
	public $tel_fijo;
	public $celular;
	public $direccion;
	public $zona;
	public $ciudad;
	public $foto;
	public $fecha_ingreso;
	public $observacion;
	public $estado;
	
	public function lista($empleados='')
	{
		
		$this->query = "select * from empleados";
		//print_r($this->query);
		$this->get_results_from_query();
	    $data=$this->rows;
	 //print_r($data);
        return $data; 
		//print_r($this->mensaje);
	}
	
	public function listaid($empleados='')
	{
		
			$this->query = "select max(id_empleado)+1 as id from empleados";
			//print_r($this->query);
			$this->get_results_from_query();
	     	$data=$this->rows;
			// print_r($data);
            return $data; 
			//print_r($this->mensaje);
	}
	
	public function lista_car($ci)
	{
		
			$this->query = "select * from empleados where carnet='$ci'";
			//print_r($this->query);
			$this->get_results_from_query();
	     	$data=$this->rows;
			// print_r($data);
            return $data; 
			//print_r($this->mensaje);
	}
	
	public function lista_ide($id)
	{
		
			$this->query = "select * from empleados where id_empleado='$id'";
			//print_r($this->query);
			$this->get_results_from_query();
	     	$data=$this->rows;
			//print_r($data);
			//echo"<br>no";
            return $data; 
			//print_r($this->mensaje);
	}
	public function get($empleados='')
	{
		
		
		 if ($empleados != '')
		{
			
			$this->query = "
			select * from empleados where carnet='$empleados'";
			print_r($this->query);
			$this->get_results_from_query();
		}
		   // echo"esto devuelvegetresult<br>";
			//print_r($this->rows);
			if(count($this->rows) == 1) {
			foreach ($this->rows[0] as $propiedad=>$valor) {
			$this->$propiedad = $valor;
			}
			$this->mensaje = 'empleado encontrado';
			
			} else {
				
			$this->mensaje = 'empleado no encontrado';
			}
			//print_r($this->mensaje);
	}
	
	# Crear un nuevo empleados
    public function set($emple_data=array()) 
   {
	if(array_key_exists('carnet', $emple_data)) 
	{
    	$this->get($emple_data['carnet']);
    	if($emple_data['carnet'] != $this->carnet) 
			{
			foreach ($emple_data as $campo=>$valor) 
				{
				$$campo = $valor;
				echo $$campo;
				}	
			$this->query = "
			INSERT INTO empleados(carnet,id_empleo, nombre, paterno, materno, fecha_nacimiento, genero, tel_fijo, celular, direccion, zona, ciudad, foto, fecha_ingreso, observacion, estado)
			VALUES
			('$carnet', '$id_empleo','$nombre', '$paterno', '$materno','$fecha_nacimiento', '$genero', '$tel_fijo', '$celular', '$direccion', '$zona', '$ciudad', '$foto', '$fecha_ingreso', '$observacion', '1')
			";

			print_r($this->query);
			$this->execute_single_query();
			$this->mensaje = 'empleado agregado exitosamente';
			} 
			else 
			{
			$this->mensaje = 'El empleado ya existe';
			}
		} 
		else 
		{
		$this->mensaje = 'No se ha agregado al empleado';
		}
		print_r($this->mensaje);
	}
# Modificar un empleados
public function edit($emple_data=array()) 
{
	foreach ($emple_data as $campo=>$valor) {
	$$campo = $valor;
	}
	$this->query = "
	UPDATE empleados
	SET id_empleo='$id_empleo',
	nombre='$nombre',
	paterno='$paterno',
	materno='$materno',
	fecha_nacimiento='$fecha_nacimiento',
	genero='$genero',
	tel_fijo='$tel_fijo',
	celular='$celular',
	direccion='$direccion',
	zona='$zona',
	ciudad='$ciudad',
	foto='$foto',
	fecha_ingreso='$fecha_ingreso',
	observacion='$observacion',
	estado='$estado'
	WHERE carnet = '$carnet'
	";
	print_r($this->query);
	$this->execute_single_query();
	$this->mensaje = 'empleado modificado';
	//print_r($this->mensaje);
}
# Eliminar un empleados
public function delete($id_empleado='') 
{
	$this->query = "
	DELETE FROM empleados
	WHERE carnet = '$id_empleado'
	";
	//print_r($this->query);
	$this->execute_single_query();
	$this->mensaje = 'empleado eliminado';

}
# Método constructor
function __construct() 
{
	$this->db_name ='sisaweb';
}
# Método destructor del objeto
function __destruct() 
{
	unset($this);
}

}

?>