<?php
class PrincipalCtrl{
	function sesion()
	{
		session_start();
	}
	function handler()
	{
	
		$data=array(
		'usuario'=>$_SESSION['usuario'],
		'perfil'=>$_SESSION['perfil'],
		'login'=>$_SESSION['login'],
		'hora'=>date("d-m-Y H:i:s")
		);
		$this->remplaza($data);
	}

	function remplaza($data)
	{
		$file='../site_media/html/principal.php';
		$template=file_get_contents($file);
			
		foreach($data as $clave=>$valor)
		{
			$template=str_replace('{'.$clave.'}', $valor, $template);
		}
		print $template;
	}

	function menu()
	{
		
		echo"
			<script>
			menu(); 	
			</script>";
	}

	
}

$prin=new PrincipalCtrl();
$prin->sesion();
$prin->handler();
$prin->menu();


			
?>