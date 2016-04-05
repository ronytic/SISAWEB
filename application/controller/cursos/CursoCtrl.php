<?php
require_once('../../models/CursoModel.php');
class CursoCtrl {
	

	/** Constructor de clase */
    public function __construct() { } 
    
    /**
     * Metodo para cargar la vista
     */
	 
	 public function principal()
	 {
		 require_once('../../site_media/html/cursos/cu_Admin.php');
	 }
	 
	 public function adiciona()
	 {
		 
		echo"
			<script>
			alert('entro adiciona'); 	
        	</script>";
			
			$car=$_REQUEST['car'];
			$nom=$_REQUEST['nom'];
			$cod=$_REQUEST['cod'];
			$niv=$_REQUEST['niv'];
			$obs=$_REQUEST['obs'];
			$est=$_REQUEST['est'];
			//$usu=$_REQUEST['usu'];
			$cur_data=array();
			$cur_data['id_carrera']=$car;
			$cur_data['nombre']=$nom;
			$cur_data['codigo']=$cod;
			$cur_data['nivel']=$niv;
			$cur_data['observacion']=$obs;
			$cur_data['estado']=$est;
			//print_r($user_data);
			$curso=new cursos;
			$curso->set($cur_data);
			//print_r($_SERVER['REQUEST_URI']);
			$data1=$curso->lista();
			$this->principal();
	 }
	 
	 public function elimina()
	 {
/*		 echo"<script>alert('entro elimina')</script>";*/
		 $cur=$_REQUEST['cur'];
			echo $cur;
			//print_r($_SERVER['REQUEST_URI']);
		$curso=new cursos;
		$curso->delete($cur);
		//print_r($usuario->mensaje);
		$this->principal();
	 }
	 public function cargadatos()
	 {
		 
		//echo"buscar datos";
		$cur=$_REQUEST['cur'];
		//echo $usu;
		//print_r($_SERVER['REQUEST_URI']);
		$curso=new cursos;
		$data1=$curso->get($cur);
		//echo"lo que devulege get <br>";
		//print_r($data1);

       // $file='../../site_media/html/cursos/cu_editar.php';
		$data=array(
		'id_curso'=>$cur,
		'id_carrera'=>$curso->id_carrera,
		'nombre'=>$curso->nombre,
		'codigo'=>$curso->codigo,
		'nivel'=>$curso->nivel,
		'observacion'=>$curso->observacion,
		'estado'=>$curso->estado
		);
		echo"<br>";
		print_r($data);
	
		require_once('../../site_media/html/cursos/cu_editar.php');
		echo "<script>
		var cu='".$data['id_curso']."';
		var ca='".$data['id_carrera']."';
		var no='".$data['nombre']."';
		var co='".$data['codigo']."';
		var ni='".$data['nivel']."';
		var ob='".$data['observacion']."';
		var es='".$data['estado']."';
		carga(cu,ca,no,co,ni,ob,es);
		</script>";
	 }
	 
	 public function edita()
	 {
		/* echo"
			  <script>
			   alert('entro edita'); 	
        	  </script>";
		*/	
		$id=$_REQUEST['id'];
		$car=$_REQUEST['car'];
		$nom=$_REQUEST['nom'];
		$cod=$_REQUEST['cod'];
		$niv=$_REQUEST['niv'];
		$obs=$_REQUEST['obs'];
		$est=$_REQUEST['est'];
			//$usu=$_REQUEST['usu'];
		$cur_data=array();
		$cur_data['id_curso']=$id;
		$cur_data['id_carrera']=$car;
		$cur_data['nombre']=$nom;
		$cur_data['codigo']=$cod;
		$cur_data['nivel']=$niv;
		$cur_data['observacion']=$obs;
		$cur_data['estado']=$est;
		
		print_r($cur_data);
		$curso=new cursos;
		$curso->edit($cur_data);
		$data1=$curso->lista();
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
$curso = new CursoCtrl();
$curso->load();

?>