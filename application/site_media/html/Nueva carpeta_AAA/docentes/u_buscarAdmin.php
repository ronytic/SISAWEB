<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="../../css/main.css"/>
</head>
<body>
<div class="content_body">
    <div class="head_admin">
        <div class="tittle_admin">
            <img src="../../img/usuarios.png" width="30px" height="30px"/>
            <span class="name_admin">ADMINISTRA USUARIOS</span>
        </div><!--tittle_admin-->
        <div class="icon_admin">
        	<a href="#" > 
            <div class="iconA">
                <img src="../../img/user_add.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Adiciona</span>
            </div><!--iconA-->
        	</a>
            <a href="#">  
            <div class="iconA">
                <img src="../../img/user_edit.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Modifica</span>
            </div><!--iconA-->
            </a>
            <a href="#" >  
            <div class="iconA">
              <img src="../../img/user_delete.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Elimina</span>
            </div><!--iconA-->
            </a> 
            <a href="#" > 
            <div class="iconA">
               <img src="../../img/user_search.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Busca</span>
            </div><!--iconA-->
            </a> 
            <a href="#" > 
            <div class="iconA">
                <img src="../../img/user_registro.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Registro</span>
            </div><!--iconA-->
            </a> 
        </div><!--icon_admin-->
    </div><!--head_admin-->
    <div class="body_admin">
      <?php
	  include 'u_adiciona.php'; 
	  //include 'u_buscar.php'; 
	  ?>
    </div><!--body_admin-->
</div><!--content_body-->
</body>
</html>