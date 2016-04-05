<?php
abstract class  DBAbstractModel
{
	private static $db_host='localhost';
    private static $db_user='root';
    private static $db_pass='';
	protected $db_name='sisaweb';
	protected $query;
	protected $rows=array();
	private $conn;
	public $mensaje ='hola';
	
	# métodos abstractos para ABM de clases que hereden
	abstract protected function get();
	abstract protected function set();
	abstract protected function edit();
	abstract protected function delete();
	
	public function __construct () {
    $this->servidor="localhost";
    $this->user="root";
    $this->password="";
    $this->db_name="sisaweb";
	}

	private function open_connection(){
//		echo"<br> ingresando a coneccion";
	$this->conn=new MySQLi(self::$db_host,self::$db_user,self::$db_pass,$this->db_name);
	if ($this->conn->connect_errno) {
    printf("Conexión fallida: %s\n", $this->conn->connect_error);
    exit();
	}
	//else{echo"correcta conexion";}
	}  
	
	private function close_connection(){
		$this->conn->close();
	}
	
	# Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
	protected function execute_single_query() {
	//if($_POST) {
		//echo "entro post<br>";
	$this->open_connection();
	$resultado=$this->conn->query($this->query);
	//print_r($resultado);
	if (!$resultado) {
    die('Consulta no válida: ' . mysql_error());
     //}

	$this->close_connection();
	} else {

	$this->mensaje = 'Metodo no permitido';
	}
	}
	
	protected function get_results_from_query() {
	$this->open_connection();
	//echo"espero <br>";
	//print_r($this->query);
	$result ="";
	$result = $this->conn->query($this->query);
    //echo"<br>el resultado es :<br>";
	//print_r($result);
	while ($this->rows[] = $result->fetch_assoc());
	$result->close();
	$this->close_connection();
	array_pop($this->rows);
	//print_r($this->rows);
	
	}
 
	
}
?>