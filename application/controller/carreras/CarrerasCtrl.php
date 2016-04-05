<?php
require_once('../../models/CarreraModel.php');
class CarreCtrl {
	

	/** Constructor de clase */
    public function __construct() { } 
    
    /**
     * Metodo para cargar la vista
     */
	 
	 public function principal()
	 {
		 require_once('../../site_media/html/carreras/c_Admin.php');
	 }
	 
	 public function adiciona()
	 {
		 
		/*echo"
			<script>
			alert('entro adiciona'); 	
        	</script>";
			*/
			$id=$_REQUEST['id'];
			$car=$_REQUEST['car'];
			$fec=$_REQUEST['fec'];
			$obs=$_REQUEST['obs'];
		
			//$usu=$_REQUEST['usu'];
			$carr_data=array();
			$carr_data['id_carrera']=$id;
			$carr_data['carrera']=$car;
			$carr_data['fecha_creacion']=$fec;
			$carr_data['observacion']=$obs;
			
			print_r($carr_data);
			$carrera=new Carreras;
			$carrera->set($carr_data);
			//print_r($_SERVER['REQUEST_URI']);
			$data1=$carrera->lista();
			$this->principal();
	 }
	 
	 public function elimina()
	 {
		 $id=$_REQUEST['carr'];
			//echo $usu;
			//print_r($_SERVER['REQUEST_URI']);
		$carrera=new Carreras;
			$carrera->delete($id);
			//print_r($_SERVER['REQUEST_URI']);
			$data1=$carrera->lista();
			$this->principal();
	 }
	 public function cargadatos()
	 {
		 
		//echo"buscar datos";
		$id=$_REQUEST['id'];
		//echo $usu;
		//print_r($_SERVER['REQUEST_URI']);
		$carrera=new Carreras;
		$carrera->get($id);
		echo"lo que devulege get <br>";
		

       // $file='../../site_media/html/carreras/c_editar.php';
		$data=array(
		'id_carrera'=>$carrera->id_carrera,
		'carrera'=>$carrera->carrera,
		'fecha_creacion'=>$carrera->fecha_creacion,
		'observacion'=>$carrera->observacion,
		'estado'=>$carrea->estado
		);
		echo"<br>";
		print_r($data);
	
	require_once('../../site_media/html/carreras/c_editar.php');
		echo "<script>
		var i='".$data['id_carrera']."';
		var c='".$data['carrera']."';
		var f='".$data['fecha_creacion']."';
		var o='".$data['observacion']."';
		var e='".$data['estado']."';
		alert('porafaafaf'+i);
		carga(i,c,f,o,e);
		</script>";
	 }
	 
	 public function edita()
	 {
		 echo"
			  <script>
			   alert('entro edita'); 	
        	  </script>";
			
		$id=$_REQUEST['id'];
		$ca=$_REQUEST['ca'];
		$fe=$_REQUEST['fe'];
		$ob=$_REQUEST['ob'];
		$es=$_REQUEST['es'];
	
			//$usu=$_REQUEST['usu'];
		$carre_data=array();
		$carre_data['id_carrera']=$id;
		$carre_data['carrera']=$ca;
		$carre_data['fecha_creacion']=$fe;
		$carre_data['observacion']=$ob;
		$carre_data['estado']=$es;
	
		
		print_r($carre_data);
		$carrera=new Carreras;
			$carrera->edit($carre_data);
			//print_r($_SERVER['REQUEST_URI']);
			$data1=$carrera->lista();
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
$carre = new CarreCtrl();
$carre->load();

?>