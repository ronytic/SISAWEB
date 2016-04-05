<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMINISTRADOR DE CLINICAS - UMSA - FACULTAD DE ODONTOLOGIA</title>
<link rel="stylesheet" type="text/css" href="../css/main_admin.css" />
<link rel="stylesheet" type="text/css" href="../css/menu.css" />S
<link href="menu/css/styles.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico"/>
</head>
<body>
    <div id="container">
        <div id="head">
<!--           <iframe width="100%" height="80px" src="head.php" frameborder="1" marginheight="0" marginwidth="0" name="head" scrolling="no" id="head"></iframe>-->
            <div id="content-head">
                <div id="banner">
                    <div id="banner-left"></div>
                    <div id="banner-middle">
                        <div id="logo"></div>
                        <div id="name-system"><div id="head">SISTEMA DE ADMINISTRACI&Oacute;N DE CLINICAS Y PRE-CLINICAS</div><div id="version">V-1.0.1</div></div>
                        <div id="user">
                            <div id="information-user">
                                <div><span>Usuario:</span><?php echo $_SESSION['user_name'];?></div>
                                <div><span>C&oacute;digo:</span><?php echo $_SESSION['codigo_user'];?></div>
                                <div><span>Cargo:</span><?php echo $_SESSION['cargo_user'] ?></div>
                                <div><span>Cl&iacute;nica:</span><?php echo $_SESSION['clinic_name'] ?></div>
                                <div><span>Hora Inicio:</span><?php echo $_SESSION['hora_inicio']; ?></div>

                            </div>
                            <div id="logout"><a href="logout.php" alt="<?php echo close;?>" title="<?php echo close;?>"><img src="../images/img_adm/logout.png" /></a>
                            </div>
                        </div>
                    </div>
                    <div id="banner-right"></div>
                </div>
                <div id="menu">
                   <?php include '../../menu/menu.php';?>
                </div>
            </div>
        </div><!-- end head -->
        <div id="body">
           <iframe src="main.php" marginheight="0" marginwidth="0" name="main" scrolling="no" id="body-iframe"></iframe>
        </div><!-- end body-->
    </div> 
    <!--end container-->
</body>
</html>