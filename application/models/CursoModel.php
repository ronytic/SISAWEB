<?php
# Importar modelo de abstracción de base de datos
require_once('db_abstract_model.php');
class cursos extends DBAbstractModel
{
	protected $id_curso;
	public $id_carrera;
	public $nombre;
	public $codigo;
	public $nivel;
	public $observacion;
	public $estado;
	
	public function lista($cursos='')
	{
		
		$this->query = "select * from cursos";
		//print_r($this->query);
		$this->get_results_from_query();
	    $data=$this->rows;
	// print_r($data);
        return $data; 
		//print_r($this->mensaje);
	}
	
	public function listaid($cursos='')
	{
		
			$this->query = "select max(id)+1 as id from cursos";
			//print_r($this->query);
			$this->get_results_from_query();
	     	$data=$this->rows;
			// print_r($data);
            return $data; 
			//print_r($this->mensaje);
	}
		
		public function get1($id_curso='')
	{
		
			$this->query = "select * from cursos where id_curso='$id_curso'";
			//print_r($this->query);
			$this->get_results_from_query();
	     	$data=$this->rows;
			// print_r($data);
            return $data; 
			//print_r($this->mensaje);
	}
	
	public function get($id_curso='')
	{
		 if ($id_curso != '')
		{
			
			$this->query = "
			select * from cursos where id_curso='$id_curso'";
			//print_r($this->query);
			$this->get_results_from_query();
		}
		    //echo"esto devuelvegetresult<br>";
			//print_r($this->rows);
			if(count($this->rows) == 1) {
			foreach ($this->rows[0] as $propiedad=>$valor) {
			$this->$propiedad = $valor;
			}
			$this->mensaje = 'curso encontrado';
			
			} else {
				
			$this->mensaje = 'curso no encontrado';
			}
			//print_r($this->rows);
	}
	
	# Crear un nuevo cursos
    public function set($curso_data=array()) 
   {
	/*if(array_key_exists('id_curso', $curso_data)) 
	{
    	$this->get($curso_data['id_curso']);
    	if($curso_data['id_curso'] != $this->id_curso) 
			{*/
			foreach ($curso_data as $campo=>$valor) 
				{
				$$campo = $valor;
				echo $$campo;
				}	
			$this->query = "
			INSERT INTO cursos(id_carrera,nombre, codigo, nivel, observacion, estado)
			VALUES
			('$id_carrera', '$nombre','$codigo', '$nivel', '$observacion','$estado')
			";

			print_r($this->query);
			$this->execute_single_query();
			$this->mensaje = 'curso agregado exitosamente';
			//} 
			//else 
			//{
			//$this->mensaje = 'El curso ya existe';
			//}
		//} 
		//else 
		//{
		//$this->mensaje = 'No se ha agregado al curso';
		//}
		print_r($this->mensaje);
	}
# Modificar un cursos
public function edit($curso_data=array()) 
{
	foreach ($curso_data as $campo=>$valor) {
	$$campo = $valor;
	}
	$this->query = "
	UPDATE cursos
	SET id_carrera='$id_carrera',
	nombre='$nombre',
	codigo='$codigo',
	nivel='$nivel',
	observacion='$observacion',
	estado='$estado'
	WHERE id_curso = '$id_curso'
	";
	//print_r($this->query);
	$this->execute_single_query();
	$this->mensaje = 'curso modificado';
	//print_r($this->mensaje);
}
# Eliminar un cursos
public function delete($id_curso='') 
{
	$this->query = "
	DELETE FROM cursos
	WHERE id_curso = '$id_curso'
	";
	//print_r($this->query);
	$this->execute_single_query();
	$this->mensaje = 'curso eliminado';

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