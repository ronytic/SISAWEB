<?php
# Importar modelo de abstracción de base de datos
require_once('db_abstract_model.php');
class empleos extends DBAbstractModel
{
	protected $id_empleo;
	public $empleo;
	public $observacion;
	public $estado;
	
	
	public function lista($empleos='')
	{
		
		$this->query = "select * from empleos";
		//print_r($this->query);
		$this->get_results_from_query();
	    $data=$this->rows;
	// print_r($data);
        return $data; 
		//print_r($this->mensaje);
	}
	
	public function listaid($id_empleo='')
	{
		
			$this->query = "select observacion from empleos where id_empleo='$id_empleo'";
			//print_r($this->query);
			$this->get_results_from_query();
	     	$data=$this->rows;
			// print_r($data);
            return $data; 
			//print_r($this->mensaje);
	}
	
	public function get($empleos='')
	{
		 if ($empleos != '')
		{
			
			$this->query = "
			select * from empleos where id_empleado='$empleos'";
			//print_r($this->query);
			$this->get_results_from_query();
		}
		    //echo"esto devuelvegetresult<br>";
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
	
	# Crear un nuevo empleos
    public function set($emple_data=array()) 
   {
	if(array_key_exists('id_empleado', $emple_data)) 
	{
    	$this->get($emple_data['id_empleado']);
    	if($emple_data['id_empleado'] != $this->id_empleado) 
			{
			foreach ($emple_data as $campo=>$valor) 
				{
				$$campo = $valor;
				echo $$campo;
				}	
			$this->query = "
			INSERT INTO empleos(carnet,id_empleo, nombre, paterno, materno, fecha_nacimiento, genero, tel_fijo, celular, direccion, zona, ciudad, foto, fecha_ingreso, observacion, estado)
			VALUES
			('$carnet', '$id_empleo','$nonbre', '$paterno', '$materno','$fecha_nacimiento', '$genero', '$tel_fijo', '$celular', '$direccion', '$zona', '$ciudad', '$foto', '$fecha_ingreso', '$observacion', '$estado')
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
# Modificar un empleos
public function edit($emple_data=array()) 
{
	foreach ($emple_data as $campo=>$valor) {
	$$campo = $valor;
	}
	$this->query = "
	UPDATE empleos
	SET id_empleo='$id_empleo,
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
	WHERE id_empleado = '$id_empleado'
	";
	//print_r($this->query);
	$this->execute_single_query();
	$this->mensaje = 'empleado modificado';
	//print_r($this->mensaje);
}
# Eliminar un empleos
public function delete($id_empleado='') 
{
	$this->query = "
	DELETE FROM empleos
	WHERE id_empleado = '$id_empleado'
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