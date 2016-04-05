<?php
# Importar modelo de abstracción de base de datos
require_once('db_abstract_model.php');
class usuarios extends DBAbstractModel
{
	protected $id;
	public $carnet;
	public $login;
	public $password;
	public $perfil;
	public $observacion;
	public $estado;
	
	public function lista($usuarios='')
	{
		
		$this->query = "select * from usuarios";
		//print_r($this->query);
		$this->get_results_from_query();
	    $data=$this->rows;
	// print_r($data);
        return $data; 
		//print_r($this->mensaje);
	}
	
	public function listaid($usuarios='')
	{
		
			$this->query = "select max(id)+1 as id from usuarios";
			//print_r($this->query);
			$this->get_results_from_query();
	     	$data=$this->rows;
			// print_r($data);
            return $data; 
			//print_r($this->mensaje);
	}
	
	public function get($usuarios='')
	{
		 if ($usuarios != '')
		{
			
			$this->query = "
			select * from usuarios where login='$usuarios'";
			//print_r($this->query);
			$this->get_results_from_query();
		}
		    //echo"esto devuelvegetresult<br>";
			//print_r($this->rows);
			if(count($this->rows) == 1) {
			foreach ($this->rows[0] as $propiedad=>$valor) {
			$this->$propiedad = $valor;
			}
			$this->mensaje = 'usuarios encontrado';
			
			} else {
				
			$this->mensaje = 'usuarios no encontrado';
			}
			//print_r($this->mensaje);
	}
	
	# Crear un nuevo usuarios
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
			INSERT INTO usuarios(carnet,login, password, perfil, observacion, estado)
			VALUES
			('$carnet', '$login','$password', '$perfil', '$observacion','$estado')
			";

			print_r($this->query);
			$this->execute_single_query();
			$this->mensaje = 'usuarios agregado exitosamente';
			} 
			else 
			{
			$this->mensaje = 'El usuarios ya existe';
			}
		} 
		else 
		{
		$this->mensaje = 'No se ha agregado al usuarios';
		}
		print_r($this->mensaje);
	}
# Modificar un usuarios
public function edit($user_data=array()) 
{
	foreach ($user_data as $campo=>$valor) {
	$$campo = $valor;
	}
	$this->query = "
	UPDATE usuarios
	SET password='$password',
	perfil='$perfil',
	carnet='$carnet',
	observacion='$observacion',
	estado='$estado'
	WHERE login = '$login'
	";
	//print_r($this->query);
	$this->execute_single_query();
	$this->mensaje = 'usuarios modificado';
	//print_r($this->mensaje);
}
# Eliminar un usuarios
public function delete($login='') 
{
	$this->query = "
	DELETE FROM usuarios
	WHERE login = '$login'
	";
	//print_r($this->query);
	$this->execute_single_query();
	$this->mensaje = 'usuarios eliminado';

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