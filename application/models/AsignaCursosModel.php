<?php
# Importar modelo de abstracción de base de datos
require_once('db_abstract_model.php');
class Asigcursos extends DBAbstractModel
{
	protected $id;
	public $carnet;
	public $login;
	public $password;
	public $perfil;
	public $observacion;
	public $estado;
	
	public function lista($asignar_cursos='')
	{
		
		$this->query = "select * from asignar_cursos";
		//print_r($this->query);
		$this->get_results_from_query();
	    $data=$this->rows;
	// print_r($data);
        return $data; 
		//print_r($this->mensaje);
	}
	
	public function listaid($asignar_cursos='')
	{
		
			$this->query = "select max(id)+1 as id from asignar_cursos";
			//print_r($this->query);
			$this->get_results_from_query();
	     	$data=$this->rows;
			// print_r($data);
            return $data; 
			//print_r($this->mensaje);
	}
	
	public function get($asignar_cursos='')
	{
		 if ($asignar_cursos != '')
		{
			
			$this->query = "
			select * from asignar_cursos where login='$asignar_cursos'";
			//print_r($this->query);
			$this->get_results_from_query();
		}
		    //echo"esto devuelvegetresult<br>";
			//print_r($this->rows);
			if(count($this->rows) == 1) {
			foreach ($this->rows[0] as $propiedad=>$valor) {
			$this->$propiedad = $valor;
			}
			$this->mensaje = 'asignar_cursos encontrado';
			
			} else {
				
			$this->mensaje = 'asignar_cursos no encontrado';
			}
			//print_r($this->mensaje);
	}
	
	# Crear un nuevo asignar_cursos
    public function set($user_data=array()) 
   {
	if(array_key_exists('login', $user_data)) 
	{
    	$this->get($user_data['login']);
    	if($user_data['login'] != $this->login) 
			{
			foreach ($user_data as $campo=>$valor) 
				{
				$$campo = $valor;
				echo $$campo;
				}	
			$this->query = "
			INSERT INTO asignar_cursos(carnet,login, password, perfil, observacion, estado)
			VALUES
			('$carnet', '$login','$password', '$perfil', '$observacion','$estado')
			";

			print_r($this->query);
			$this->execute_single_query();
			$this->mensaje = 'asignar_cursos agregado exitosamente';
			} 
			else 
			{
			$this->mensaje = 'El asignar_cursos ya existe';
			}
		} 
		else 
		{
		$this->mensaje = 'No se ha agregado al asignar_cursos';
		}
		print_r($this->mensaje);
	}
# Modificar un asignar_cursos
public function edit($user_data=array()) 
{
	foreach ($user_data as $campo=>$valor) {
	$$campo = $valor;
	}
	$this->query = "
	UPDATE asignar_cursos
	SET password='$password',
	perfil='$perfil',
	carnet='$carnet',
	observacion='$observacion',
	estado='$estado'
	WHERE login = '$login'
	";
	//print_r($this->query);
	$this->execute_single_query();
	$this->mensaje = 'asignar_cursos modificado';
	//print_r($this->mensaje);
}
# Eliminar un asignar_cursos
public function delete($login='') 
{
	$this->query = "
	DELETE FROM asignar_cursos
	WHERE login = '$login'
	";
	//print_r($this->query);
	$this->execute_single_query();
	$this->mensaje = 'asignar_cursos eliminado';

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