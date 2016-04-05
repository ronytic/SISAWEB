<?php
# Importar modelo de abstracción de base de datos
require_once('db_abstract_model.php');
class Perfiles extends DBAbstractModel
{
	
	public $id_perfil;
	public $nombre;

	
	public function lista($usuario='')
	{
		
			$this->query = "select * from perfiles";
			//print_r($this->query);
			$this->get_results_from_query();
	     
		  $data=$this->rows;
	// print_r($data);
            return $data; 
			//print_r($this->mensaje);
	}
	
	public function get($login='')
	{
		 if ($login != '')
		{
			
			$this->query = "
			select * from perfiles where login='$login'";
			print_r($this->query);
			$this->get_results_from_query();
		}
		    //echo"esto devuelvegetresult<br>";
			print_r($this->rows);
			if(count($this->rows) == 1) {
			foreach ($this->rows[0] as $propiedad=>$valor) {
			$this->$propiedad = $valor;
			}
			$this->mensaje = 'Usuario encontrado';
			
			} else {
				
			$this->mensaje = 'Usuario no encontrado';
			}
			//print_r($this->mensaje);
	}
	
	# Crear un nuevo usuario
    public function set($user_data=array()) 
   {
	if(array_key_exists('login', $user_data)) 
	{
    	$this->get($user_data['login']);
    	if($user_data['login'] != $this->usuario) 
			{
			foreach ($user_data as $campo=>$valor) 
				{
				$$campo = $valor;
				echo $$campo;
				}	
			$this->query = "
			INSERT INTO perfiles(login, password, perfil, observacion, estado)
			VALUES
			('$login', '$password', '$perfil', '$observacion','$estado')
			";

			print_r($this->query);
			$this->execute_single_query();
			$this->mensaje = 'Usuario agregado exitosamente';
			} 
			else 
			{
			$this->mensaje = 'El usuario ya existe';
			}
	} 
	else 
	{
	$this->mensaje = 'No se ha agregado al usuario';
	}
print_r($this->mensaje);
}
# Modificar un usuario
public function edit($user_data=array()) {
foreach ($user_data as $campo=>$valor) {
$$campo = $valor;
}
$this->query = "
UPDATE usuario
SET login='$login',
nivel='$nivel',
nombre='$nombre',
estado='$estado'
WHERE usuario = '$usuario'
";
print_r($this->query);
$this->execute_single_query();
$this->mensaje = 'Usuario modificado';
print_r($this->mensaje);
}
# Eliminar un usuario
public function delete($user_email='') {
$this->query = "
DELETE FROM usuario
WHERE usuario = '$user_email'
";
//print_r($this->query);
$this->execute_single_query();
$this->mensaje = 'Usuario eliminado';

}
# Método constructor
function __construct() {
$this->db_name = 'sisaweb';
}
# Método destructor del objeto
function __destruct() {
unset($this);
}

}

?>