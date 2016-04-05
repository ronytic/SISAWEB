<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingresar al Sistema</title>
<link rel="stylesheet" type="text/css" href="application/site_media/css/main.css" />
<script type="text/javascript" src="application/site_media/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="application/site_media/js/funciones.js"></script>

<script type="text/javascript" src="application/site_media/js/alert.js"></script>
<link rel="stylesheet" href="application/site_media/css/alertify.core.css" />
<link rel="stylesheet" href="application/site_media/css/alertify.default.css" id="toggleCSS" />
<script src="application/site_media/js/alertify.min.js"></script>

</head>
<body>
<div id="containerI">
    <div id="headI">
        <div class="logoI">
        <img src="application/site_media/img/logo.png" title="ICEI"/>
        </div><!---logo-->
    </div><!--headI-->
    <div id="formularioI">
        <form id="autenticacion" action="{get}" method="get">
        <div id="title1A">
        SISTEMA DE ADMINISTRACION ACADEMICA ICEI
        </div><!--title1I-->	
        <div id="title2A">
        AUTENTICACION DE USUARIO
        </div><!--title2I-->
        <div id="contentA">
            <div id="informationA">
                <div class="item_requerid">
                USUARIO:
                </div><!--requerid-->
                <div class="form_requerid">
                <input type="text" name="txtAUsuario" id="txtAUsuario"/>
                </div><!---form_requerid-->
                <div class="item_requerid">
                PASSWORD:
                </div><!--requerid-->
                <div class="form_requerid">
                <input type="text" name="txtAPassword" id="txtAPassword"/>
                </div><!---form_requerid-->
                <div id="button_requerid">
                <input type="button" name="btnGuardarA" id="btnGuardarA" value="Guardar"/>
                  <input type="button" name="btnBorrarA" id="btnBorrarA" value="Borrar"/>
                </div><!--button-->
       		</div><!--informationA-->
            <div id="imagenA">
            <img src="application/site_media/img/My Computer.png" width="100px" height="90px"/>
            </div><!---imagenA-->
        </div><!--contentA-->
        <div id="bottomA">
        </div><!--bottomA-->
        </form>
    </div><!--formularioI-->
</div><!--containerI-->
</body>
</html>