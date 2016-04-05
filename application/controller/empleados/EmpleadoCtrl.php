<?php
require_once('../../models/EmpleadoModel.php');
require_once('../../models/HAcademicoEModel.php');
class EmpCtrl {
	

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
			//print_r($emple_data);
			$empleado=new empleados;
			$empleado->set($emple_data);
			
		
			$numf=$_REQUEST['num'];
			echo "las filas son".$numf;
			$haempleado=new estudiosE;
			for($f=1; $f<=$numf; $f++)
			{
				$re='est'.$f;
				$rl='lug'.$f;
				$rf='fec'.$f;	
			$est=$_REQUEST[$re];
			$lug=$_REQUEST[$rl];
			$fec=$_REQUEST[$rf];
			//echo"est:".$est."<br>";
				//echo"lug:".$lug."<br>";
					//echo"fec:".$fec."<br>";
			
			//$emp=$_REQUEST['usu'];
			
			$haemple_data=array();
			$haemple_data['id_empleado']=$car;
			$haemple_data['estudio']=$est;
			$haemple_data['lugar_estudio']=$lug;
			$haemple_data['fecha_egreso']=$fec;
			echo"<br>ahora estudio<br>";
			print_r($haemple_data);
			$haempleado->set($haemple_data);
			}
			$empleado=new empleados;
			$empleado->set($emple_data);
			
				
			//print_r($_SERVER['REQUEST_URI']);
			//$data1=$empleado->lista();
			//$this->principal();
	 }
	 
	 public function elimina()
	 {
		 $emp=$_REQUEST['emp'];
			//echo $emp;
			//print_r($_SERVER['REQUEST_URI']);
		$empleado=new empleados;
		$empleado->delete($emp);
		
		$haempleado=new estudiosE;
		$haempleado->delete($emp);
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
		//print_r($data1);
		//echo"<br><br>datos";
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
		//print_r($data);

	 //   $car1=$data['carnet'];
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
	    alert('EMPLEADO'+emp+'carnet'+car+'foto'+fot+'CIUDAD'+ciu);
		carga(emp,car,nom,pat,mat,fen,gen,tef,cel,dir,zon,ciu,fot,fei,obs,est);
		</script>";
		
	 }
	 
	 public function edita()
	 {
		 echo"
			  <script>
			   alert('entro edita'); 	
        	  </script>";
			
	$empleado=new empleados;
	$haempleado=new estudiosE;
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
		
	
		
		$numf=$_REQUEST['num'];
		$numf2=$_REQUEST['num2'];
			echo "las filas son num1".$numf."y num2".$numf2;
			//$haempleado=new estudiosE;
			for($f=2; $f<=$numf; $f++)
			{
				$re='est'.$f;
				$rl='lug'.$f;
				$rf='fec'.$f;	
			$est=$_REQUEST[$re];
			$lug=$_REQUEST[$rl];
			$fec=$_REQUEST[$rf];
			//echo"est:".$est."<br>";
				//echo"lug:".$lug."<br>";
					//echo"fec:".$fec."<br>";
			
			//$emp=$_REQUEST['usu'];
			
			$haemple_data=array();
			$haemple_data['id_empleado']=$car;
			$haemple_data['estudio']=$est;
			$haemple_data['lugar_estudio']=$lug;
			$haemple_data['fecha_egreso']=$fec;
			
			$haempleado->set($haemple_data);
			
			//$haempleado->set($haemple_data);
			}
			
				for($f=0; $f<$numf2; $f++)
			{
				$id='id'.$f;
				$re='estm'.$f;
				$rl='lugm'.$f;
				$rf='fecm'.$f;	
			$ide=$_REQUEST[$id];	
			$est=$_REQUEST[$re];
			$lug=$_REQUEST[$rl];
			$fec=$_REQUEST[$rf];
			
			$hamemple_data=array();
			$hamemple_data['id_faca']=$ide;
			$hamemple_data['id_empleado']=$car;
			$hamemple_data['estudio']=$est;
			$hamemple_data['lugar_estudio']=$lug;
			$hamemple_data['fecha_egreso']=$fec;
			echo"<br>ahora estudios q se modifican<br>";
			print_r($hamemple_data);
			$haempleado->edit($hamemple_data);
			}
			
			echo"<br>ahora estudios q se adicionan<br>";
			print_r($haemple_data);
			
		
			//$empleado=new empleados;
			//$empleado->set($emple_data);
			
				
			//print_r($_SERVER['REQUEST_URI']);
			//$data1=$empleado->lista();
			//$this->principal();
			
			
		$this->principal();
		
		
			//print_r($emple_data);
		//$empleado=new empleados;
		//$empleado->edit($emple_data);
		//$data1=$empleado->lista();
		
		
		//adicionar datos academicos
		
		
		//$haempleado->edit($hamemple_data);
	 }
	 
	 public function cargadatosEst()
	 {
		 
		//echo"buscar datos";
		$emp=$_REQUEST['emp'];
		$empleado=new empleados;
		$data1=$empleado->get($emp);
$estudiose=new estudiosE;
$datae1=$estudiose->listaid($emp);
		
		require_once('../../site_media/html/empleados/e_editar.php');
		echo "<script>
		var emp='".$datae1['id_empleado']."';
		var est='".$datae1['estudio']."';
		var les='".$datae1['lugar_estudio']."';
		var feg='".$datae1['fecha_egreso']."';
		var est='".$data['estado']."';
		
	    alert('EMPLEADO'+emp+'carnet'+car+'foto'+fot+'CIUDAD'+ciu);
		carga(emp,car,nom,pat,mat,fen,gen,tef,cel,dir,zon,ciu,fot,fei,obs,est);
		</script>";
		
	 }
	 
	 public function adicionarha()
	 {
		 
		//echo"buscar datos";
		$emp=$_REQUEST['emp'];
		//echo $emp;
		//print_r($_SERVER['REQUEST_URI']);
		$empleado=new empleados;
		$data1=$empleado->get($emp);
		//echo"lo que devulege get <br>";
		//print_r($data1);
		//echo"<br><br>datos";
       // $file='../../site_media/html/empleados/e_editar.php';
		$data=array(
		'empleo'=>$empleado->id_empleo,
		'carnet'=>$empleado->carnet,
		'nombre'=>$empleado->nombre,
		'paterno'=>$empleado->paterno,
		'materno'=>$empleado->materno
		);

		
		require_once('../../site_media/html/empleados/hae_adiciona.php');
		echo "<script>
		var emp='".$data['id_empleado']."';
		var car='".$data['carnet']."';
		var nom='".$data['nombre']."';
		var pat='".$data['paterno']."';
		var mat='".$data['materno']."';
		
	    alert('EMPLEADO'+emp+'carnet'+car+'nombre'+nom+'paterno'+pat+'materno'+mat);
		cargaha(emp,car,nom,pat,mat);
		</script>";
		
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
		if($evento=='adicionaha')
		{
			
		 $this->adicionarha();	
		}
		if($evento=='modificaEst')
		{
			
		 $this->cargadatosEst();	
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