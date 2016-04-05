<?php
require_once('../../models/HAcademicoEModel.php');
class HAEmpCtrl {
	

	/** Constructor de clase */
    public function __construct() { } 
    
    /**
     * Metodo para cargar la vista
     */
	 
	 public function principal()
	 {
		 require_once('../../site_media/html/empleados/e_Admin.php');
	 }
	 
	 public function adiciona()
	 {
		 
		echo"
			<script>
			alert('entro adiciona'); 	
        	</script>";
			
			
			$car=$_REQUEST['car'];
			$est=$_REQUEST['est'];
			$lug=$_REQUEST['lug'];
			$fec=$_REQUEST['fec'];
			
			
			//$emp=$_REQUEST['usu'];
			$haemple_data=array();
			$haemple_data['id_empleado']=$car;
			$haemple_data['estudio']=$est;
			$haemple_data['lugar_estudio']=$lug;
			$haemple_data['fecha_egreso']=$fec;
			
			print_r($haemple_data);
			$haempleado=new estudiosE;
			$haempleado->set($haemple_data);
			//print_r($_SERVER['REQUEST_URI']);
			$data1=$empleado->lista();
			$this->principal();
	 }
	 
	 public function elimina()
	 {
		 $emp=$_REQUEST['emp'];
			//echo $emp;
			//print_r($_SERVER['REQUEST_URI']);
		$empleado=new empleados;
		$empleado->delete($emp);
		//print_r($empleado->mensaje);
		$this->principal();
	 }
	 public function cargadatos()
	 {
		 
		//echo"buscar datos";
		$emp=$_REQUEST['emp'];
		//echo $emp;
		//print_r($_SERVER['REQUEST_URI']);
		$empleado=new empleados;
		$data1=$empleado->get($emp);
		//echo"lo que devulege get <br>";
		print_r($data1);
		echo"<br><br>dats";
       // $file='../../site_media/html/empleados/e_editar.php';
		$data=array(
		'empleo'=>$empleado->id_empleo,
		'carnet'=>$empleado->carnet,
		'nombre'=>$empleado->nombre,
		'paterno'=>$empleado->paterno,
		'materno'=>$empleado->materno,
		'fecha_nacimiento'=>$empleado->fecha_nacimiento,
		'genero'=>$empleado->genero,
		'tel_fijo'=>$empleado->tel_fijo,
		'celular'=>$empleado->celular,
		'direccion'=>$empleado->direccion,
		'zona'=>$empleado->zona,
		'ciudad'=>$empleado->ciudad,
		'foto'=>$empleado->foto,
		'fecha_ingreso'=>$empleado->fecha_ingreso,
		'observacion'=>$empleado->observacion,
		'estado'=>$empleado->estado
		);
		//echo"<br>";
		print_r($data);
	
		require_once('../../site_media/html/empleados/e_editar.php');
		echo "<script>
		var emp='".$data['empleo']."';
		var car='".$data['carnet']."';
		var nom='".$data['nombre']."';
		var pat='".$data['paterno']."';
		var mat='".$data['materno']."';
		var fen='".$data['fecha_nacimiento']."';
		var gen='".$data['genero']."';
		var tef='".$data['tel_fijo']."';
		var cel='".$data['celular']."';
		var dir='".$data['direccion']."';
		var zon='".$data['zona']."';
		var ciu='".$data['ciudad']."';
		var fot='".$data['foto']."';
		var fei='".$data['fecha_ingreso']."';
		var obs='".$data['observacion']."';
		var est='".$data['estado']."';
	    alert('EMPLEADO'+emp+'carnet'+car+'foto'+fot);
		carga(emp,car,nom,pat,mat,fen,gen,tef,cel,dir,zon,ciu,fot,fei,obs,est);
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
			$emp=$_REQUEST['emp'];
			$nom=$_REQUEST['nom'];
			$pat=$_REQUEST['pat'];
			$mat=$_REQUEST['mat'];
			$fen=$_REQUEST['fen'];
			$gen=$_REQUEST['gen'];
			$tef=$_REQUEST['tef'];
			$cel=$_REQUEST['cel'];
			$dir=$_REQUEST['dir'];
			$zon=$_REQUEST['zon'];
			$ciu=$_REQUEST['ciu'];
			$fot=$_REQUEST['fot'];
			$fei=$_REQUEST['fei'];
			$obs=$_REQUEST['obs'];
			$est=$_REQUEST['est'];
			//$emp=$_REQUEST['usu'];
			$emple_data=array();
			$emple_data['carnet']=$car;
			$emple_data['id_empleo']=$emp;
			$emple_data['nombre']=$nom;
			$emple_data['paterno']=$pat;
			$emple_data['materno']=$mat;
			$emple_data['fecha_nacimiento']=$fen;
			$emple_data['genero']=$gen;
			$emple_data['tel_fijo']=$tef;
			$emple_data['celular']=$cel;
			$emple_data['direccion']=$dir;
			$emple_data['zona']=$zon;
			$emple_data['ciudad']=$ciu;
			$emple_data['foto']=$fot;
			$emple_data['fecha_ingreso']=$fei;
			$emple_data['observacion']=$obs;
			$emple_data['estado']=$est;
			print_r($emple_data);
		
		//print_r($emple_data);
		$empleado=new empleados;
		$empleado->edit($emple_data);
		$data1=$empleado->lista();
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
$empc = new EmpCtrl();
$empc->load();

?>