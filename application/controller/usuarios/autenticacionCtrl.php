<?php
class AutenCtrl {
	private $evento;
	  /** Constructor de clase */
    public function __construct() {
		$evento="autenticar";
		 } 
    
    /**
     * Metodo para cargar la vista?
     */
		 
    public function load()
    { 
		if( isset( $_REQUEST['pagina'] )  )
        {
			$evento=$_REQUEST['pagina'];//cuando se manda otra pagina se hara otra accion
			if($evento="autenticar")
			{
			
				$this->principal();			           
        	}
			else
			{
				$this->inicio();
			}
		
    	}       
		else//la primera vez ingresara aca
		{
	
	   		$this->inicio();
   		}
	}
	public function principal()
	{
		require_once('../models/UsuarioModel.php');
		$usuario=new Usuarios;
		$usu=$_REQUEST['usu'];
        $pas=$_REQUEST['pas'];
        $usuario->get($usu);
		$data=array('login'=>$usuario->login,
					'usuario'=>$usuario->carnet,
					'perfil'=>$usuario->observacion
					);
		$i=0;
//		print_r($data);
		foreach($data as $valor )
		{
			if($valor<>null and $valor<>" ")
			{
				$i=$i+1;
			}
		}
				
		if($i>0)
			{
					//echo"se direcciona a pag principal";
				session_start();
				$_SESSION['usuario']=$data['usuario'];
				$_SESSION['perfil']=$data['perfil'];
				$_SESSION['login']=$data['login'];
/*			    echo $_SESSION['usuario'];
				   echo $_SESSION['perfil'];
				      echo $_SESSION['login'];*/
				header("Location: ../controller/principalCtrl.php");
			}
			else
				{
					echo"
					<script>
					alert('error en autenticacion');
	               document.location.href='../../index1.php'; 	
        			</script>";
					
				}
	}
 public function inicio()
 {
	  //  echo"entro inicio";
        //preguntamos si el archivo principal.php existe 
        if(is_readable( 'application/site_media/html/index.php' ))
        {            
            include 'application/site_media/html/index.php';       //incluimos la vista             
        }
        else
        {
            echo 'Error critico: archivo de theme [principal.php] no existe.';
        }
 }

}
$aut = new AutenCtrl();
$aut->load();
?>