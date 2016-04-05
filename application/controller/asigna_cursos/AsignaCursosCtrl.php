<?php
require_once('../../models/AsignaCursosModel.php');
require_once('../../models/EmpleadoModel.php');

$asicur=new Asigcursos;
$emp=new empleados;

class AsiCurCtrl {
	

	/** Constructor de clase */
    public function __construct() { } 
    
    /**
     * Metodo para cargar la vista
     */
	 
	 public function principal()
	 {
		 require_once('../../site_media/html/asignar_cursos/ac_Admin.php');
	 }
	 
	  public function adiciona()
	 {
		$idac=$_REQUEST['cur']; 
		$data1=$asicur->get($idac);
		//echo"lo que devulege get <br>";
		//print_r($data1);

       // $file='../../site_media/html/usuarios/u_editar.php';
		$data=array(
		'login'=>$usuario->login,
		'carnet'=>$usuario->carnet,
		'perfil'=>$usuario->perfil,
		'password'=>$usuario->password,
		'estado'=>$usuario->estado
		);
		//echo"<br>";
		//print_r($data);
	
		require_once('../../site_media/html/usuarios/u_editar.php');
		echo "<script>
		var l='".$data['login']."';
		var c='".$data['carnet']."';
		var p='".$data['perfil']."';
		var pa='".$data['password']."';
		var e='".$data['estado']."';
		carga(l,c,p,pa,e);
		</script>";
	 }
	 public function adiciona1()
	 {
		 
		/*echo"
			<script>
			alert('entro adiciona'); 	
        	</script>";
			*/
			$car=$_REQUEST['car'];
			$per=$_REQUEST['per'];
			$logi=$_REQUEST['logi'];
			$pas=$_REQUEST['pas'];
			$obs=$_REQUEST['obs'];
			$est=$_REQUEST['est'];
			//$usu=$_REQUEST['usu'];
			$user_data=array();
			$user_data['carnet']=$car;
			$user_data['login']=$logi;
			$user_data['password']=$pas;
			$user_data['estado']=$est;
			$user_data['observacion']=$obs;
			$user_data['perfil']=$per;
			//print_r($user_data);
			$usuario=new Usuarios;
			$usuario->set($user_data);
			//print_r($_SERVER['REQUEST_URI']);
			$data1=$usuario->lista();
			$this->principal();
	 }
	 
	 public function elimina()
	 {
		 $usu=$_REQUEST['usu'];
			//echo $usu;
			//print_r($_SERVER['REQUEST_URI']);
		$usuario=new Usuarios;
		$usuario->delete($usu);
		//print_r($usuario->mensaje);
		$this->principal();
	 }
	 public function cargadatos()
	 {
		 
		//echo"buscar datos";
		$usu=$_REQUEST['usu'];
		//echo $usu;
		//print_r($_SERVER['REQUEST_URI']);
		$usuario=new Usuarios;
		$data1=$usuario->get($usu);
		//echo"lo que devulege get <br>";
		//print_r($data1);

       // $file='../../site_media/html/usuarios/u_editar.php';
		$data=array(
		'login'=>$usuario->login,
		'carnet'=>$usuario->carnet,
		'perfil'=>$usuario->perfil,
		'password'=>$usuario->password,
		'estado'=>$usuario->estado
		);
		//echo"<br>";
		//print_r($data);
	
		require_once('../../site_media/html/usuarios/u_editar.php');
		echo "<script>
		var l='".$data['login']."';
		var c='".$data['carnet']."';
		var p='".$data['perfil']."';
		var pa='".$data['password']."';
		var e='".$data['estado']."';
		carga(l,c,p,pa,e);
		</script>";
	 }
	 
	 public function edita()
	 {
		/* echo"
			  <script>
			   alert('entro edita'); 	
        	  </script>";
		*/	
		$car=$_REQUEST['car'];
		$per=$_REQUEST['per'];
		$logi=$_REQUEST['logi'];
		$pas=$_REQUEST['pas'];
		$obs=$_REQUEST['obs'];
		$est=$_REQUEST['est'];
			//$usu=$_REQUEST['usu'];
		$user_data=array();
		$user_data['carnet']=$car;
		$user_data['login']=$logi;
		$user_data['password']=$pas;
		$user_data['estado']=$est;
		$user_data['observacion']=$obs;
		$user_data['perfil']=$per;
		
		//print_r($user_data);
		$usuario=new Usuarios;
		$usuario->edit($user_data);
		$data1=$usuario->lista();
		$this->principal();
	 }
    public function load()
    { 

	  if( isset( $_REQUEST['pagina'] )  )
      {
		$evento=$_REQUEST['pagina'];
		if($evento=='principal')
		{
			$this->principal();
		}
		if($evento=='adiciona')
		{
			$this->adiciona();
		}
		
		if($evento=='elimina')
		{
		 $this->elimina();	
		}
		
		if($evento=='modifica2')
		{
			$this->edita();
		}
		
			if($evento=='modifica')
		{
			
		 $this->cargadatos();	
		}
	 }
	 else
	 {   
	//echo "entro principal";
     $this->principal(); 
	 }
   }
}
$asic = new AsiCurCtrl();
$asic->load();

?>