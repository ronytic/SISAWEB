<?php
# Importar modelo de abstracción de base de datos
require_once('db_abstract_model.php');
class estudiosE extends DBAbstractModel
{
	public $id_faca;
	public $id_empleado;
	public $estudio;
	public $lugar_estudio;
	public $fecha_egreso;
	public $estado;
	
	public function lista()
	{
		
		$this->query = "select * from for_aca_emple";
		//print_r($this->query);
		$this->get_results_from_query();
	    $data=$this->rows;
	// print_r($data);
        return $data; 
		//print_r($this->mensaje);
	}
	
	public function listaid($ci='')
	{
		
			$this->query = "select * from for_aca_emple where id_empleado=$ci";
			print_r($this->query);
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
			select * from for_aca_emple where id_faca='$id'";
			print_r($this->query);
			$this->get_results_from_query();
		}
		    //echo"esto devuelvegetresult<br>";
			//print_r($this->rows);
			if(count($this->rows) == 1) {
			foreach ($this->rows[0] as $propiedad=>$valor) {
			$this->$propiedad = $valor;
			}
			$this->mensaje = 'estudioado encontrado';
			
			} else {
				
			$this->mensaje = 'estudioado no encontrado';
			}
			//print_r($this->mensaje);
	}
	
	# Crear un nuevo estudioados
    public function set($estudio_data=array()) 
   {
	   echo"entro ser hsmodel";
/*	if(array_key_exists('id_faca', $estudio_data)) 
	{
    	$this->get($estudio_data['id_faca']);
    	if($estudio_data['id_faca'] != $this->id_faca) 
			{*/
			foreach ($estudio_data as $campo=>$valor) 
				{
				$$campo = $valor;
				echo $$campo;
				}	
			$this->query = "
			INSERT INTO for_aca_emple(id_empleado, estudio, lugar_estudio, fecha_egreso, estado)
			VALUES
			('$id_empleado', '$estudio','$lugar_estudio', '$fecha_egreso', '1')
			";

			print_r($this->query);
			$this->execute_single_query();
			$this->mensaje = 'estudio agregado exitosamente';
			/*} 
			else 
			{
			$this->mensaje = 'El estudio ya existe';
			}
		} 
		else 
		{
		$this->mensaje = 'No se ha agregado al estudio';
		}*/
		print_r($this->mensaje);
	}
# Modificar un estudioados
public function edit($estudio_data=array()) 
{
	foreach ($estudio_data as $campo=>$valor) {
	$$campo = $valor;
	}
	$this->query = "
	UPDATE for_aca_emple
	SET 
	estudio='$estudio',
	lugar_estudio='$lugar_estudio',
	fecha_egreso='$fecha_egreso',
	estado='1'
	WHERE id_faca='$id_faca'
	";
	print_r($this->query);
	$this->execute_single_query();
	$this->mensaje = 'estudio modificado';
	//print_r($this->mensaje);
}
# Eliminar un estudioados
public function delete($id='') 
{
	$this->query = "
	DELETE FROM for_aca_emple
	WHERE id_empleado = '$id'
	";
	//print_r($this->query);
	$this->execute_single_query();
	$this->mensaje = 'estudio eliminado';

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