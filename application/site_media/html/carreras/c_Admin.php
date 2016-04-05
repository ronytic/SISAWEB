<?PHP 
print_r($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" colocalntent="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="../../site_media/css/main.css"/>
<link rel="stylesheet" type="text/css" href="../../site_media/css/jquery.dataTables.css">
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../../site_media/js/tabla.js"></script>
    <script type="text/javascript" language="javascript" src="../../site_media/js/C_admin.js"></script>
	<script type="text/javascript" language="javascript" src="../../site_media/js/jquery.dataTables.js"></script>
<script>javascript:admincarre('../../site_media/html/carreras/c_table.php')</script>
</head>
<body>
<div class="content_body">
    <div class="head_admin">
        <div class="tittle_admin">
            <img src="../../site_media/img/carreras.png" width="30px" height="30px"/>
            <span class="name_admin">ADMINISTRA CARRERAS</span>
        </div><!--tittle_admin-->
        <div class="icon_admin">
        	<a href="javascript:admincarre('../../site_media/html/carreras/c_adiciona.php')" > 
            <div class="iconA">
                <img src="../../site_media/img/user_add.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Adiciona</span>
            </div><!--iconA-->
        	</a>
            <a href="javascript:cmodifica()" > 
            <div class="iconA">
                <img src="../../site_media/img/user_edit.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Modifica</span>
            </div><!--iconA-->
            </a>
            <a href="javascript:c_elimina()" > 
            <div class="iconA">
              <img src="../../site_media/img/user_delete.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Elimina</span>
            </div><!--iconA-->
            </a> 
            <a href="javascript:admincarre('../../site_media/html/carreras/c_table.php')" > 
            <div class="iconA">
               <img src="../../site_media/img/user_search.jpg" width="20px" height="20px"/>
                <span class="letter_icon">Busca</span>
            </div><!--iconA-->
            </a> 
            
        </div><!--icon_admin-->
    </div><!--head_admin-->
    <div id="body_admin">
   
    </div><!--body_admin-->
</div><!--content_body-->
</body>
</html>