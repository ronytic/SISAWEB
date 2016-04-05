<?php
# Importar modelo de abstracción de base de datos
require_once('db_abstract_model.php');
class semcon extends DBAbstractModel
{
	public $id_sem_cur;
	public $tipo;
	public $nombre;
	public $pensum;
	public $observacion;
	public $estado;
	
	public function lista($carrera='')
	{
		
		$this->query = "select * from carreras";
		//print_r($this->query);
		$this->get_results_from_query();
	    $data=$this->rows;
	 //print_r($data);
        return $data; 
		//print_r($this->mensaje);
	}
	
	public function listaid($carrera='')
	{
		
			$this->query = "select max(id_carrera)+1 as id from carreras";
			//print_r($this->query);
			$this->get_results_from_query();
	     	$data=$this->rows;
			// print_r($data);
            return $data; 
			//print_r($this->mensaje);
	}
	
	public function lista_car($ci)
	{
		
			$this->query = "select * from carrera where carnet='$ci'";
			//print_r($this->query);
			$this->get_results_from_query();
	     	$data=$this->rows;
			// print_r($data);
            return $data; 
			//print_r($this->mensaje);
	}
	
		public function lista_id($id)
	{
		
			$this->query = "select * from seminarios_conferencias where id_sem_cur='$id'";
			//echo $this->query;
				$this->get_results_from_query();
	     	$data=$this->rows;
			//print_r($data);
			//echo"<br>no";
            return $data; 
	}
	public function getid($id='')
	{
		
			$this->query = "select * from carreras where id_carrera='$id'";
			//print_r($this->query);
			$this->get_results_from_query();
	     	$data=$this->rows;
			// print_r($data);
            return $data; 
			//print_r($this->mensaje);
	}
	public function get($id='')
	{
		
		
		 if ($id != '')
		{
			
			$this->query = "
			select * from carreras where id_carrera='$id'";
			//print_r($this->query);
			$this->get_results_from_query();
		}
		   //echo"esto devuelvegetresult<br>";
			//print_r($this->rows);
			if(count($this->rows) == 1) {
			foreach ($this->rows[0] as $propiedad=>$valor) {
			$this->$propiedad = $valor;
			}
			$this->mensaje = 'carrera encontrado';
			
			} else {
				
			$this->mensaje = 'carrera no encontrado';
			}
			//print_r($this->mensaje);
	}
	
	# Crear un nuevo carrera
    public function set($carre_data=array()) 
   {
	if(array_key_exists('id_carrera', $carre_data)) 
	{
    	$this->get($carre_data['id_carrera']);
    	if($carre_data['id_carrera'] != $this->id_carrera) 
			{
			foreach ($carre_data as $campo=>$valor) 
				{
				$$campo = $valor;
				echo $$campo;
				}	
			$this->query = "
			INSERT INTO carreras(id_carrera,carrera,fecha_creacion,observacion,estado)
			VALUES
			('$id_carrera','$carrera', '$fecha_creacion','$observacion', '1')
			";

			print_r($this->query);
			$this->execute_single_query();
			$this->mensaje = 'carrera agregada exitosamente';
			} 
			else 
			{
			$this->mensaje = 'La carrera ya existe ya existe';
			}
		} 
		else 
		{
		$this->mensaje = 'No se ha agregado la carrera';
		}
		print_r($this->mensaje);
	}
# Modificar un carrera
public function edit($carre_data=array()) 
{
	foreach ($carre_data as $campo=>$valor) {
	$$campo = $valor;
	}
	$this->query = "
	UPDATE carreras
	SET carrera='$carrera',
	fecha_creacion='$fecha_creacion',
	observacion='$observacion',
	estado='$estado'
	WHERE id_carrera = '$id_carrera'
	";
	print_r($this->query);
	$this->execute_single_query();
	$this->mensaje = 'carrera modificada';
	//print_r($this->mensaje);
}
# Eliminar un carrera
public function delete($id_carrera='') 
{
	$this->query = "
	DELETE FROM carreras
	WHERE id_carrera = '$id_carrera'
	";
	//print_r($this->query);
	$this->execute_single_query();
	$this->mensaje = 'carrera eliminada';

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