<?php
class Options{

function optionMenu(){
//    echo "hola".$_SESSION['type_user'];
    switch (0) {
        case 0:
            $menu1=array
            (
                    1 => 	array
                                    (
                                            'text'		=> 	'Inicio',
                                            'class'		=> 	'home',
                                            'link'		=> 	'main.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    2 =>	array
                                    (
                                            'text'		=> 	'Pacientes',
                                            'class'		=> 	'patient',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    3 =>	array
                                    (
                                            'text'		=> 	'Cl&iacute;nicas',
                                            'class'		=> 	'dental',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    4 =>	array
                                    (
                                            'text'		=> 	'Estudiantes',
                                            'class'		=> 	'dentist',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    5 =>	array
                                    (
                                            'text'		=> 	'Enfermeras',
                                            'class'		=> 	'nurse',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    6 =>	array
                                    (
                                            'text'		=> 	'Reportes',
                                            'class'		=> 	'report',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    7 =>	array
                                    (
                                            'text'		=> 	'Adicionar Paciente',
                                            'class'		=> 	'patient-add',
                                            'link'		=> 	'../patient/index.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	2
                                    ),
                    8 =>	array
                                    (
                                            'text'		=> 	'Editar Paciente',
                                            'class'		=> 	'patient-edit',
                                            'link'		=> 	'../patient/edit_patient.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	2
                                    ),
                    9 =>	array
                                    (
                                            'text'		=> 	'Buscar Paciente',
                                            'class'		=> 	'patient-search',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	2
                                    ),
                    10 =>	array
                                    (
                                            'text'		=> 	'Eliminar Paciente',
                                            'class'		=> 	'patient-delete',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	2
                                    ),
                    11 =>	array
                                    (
                                            'text'		=> 	'Operatoria',
                                            'class'		=> 	'clinic-children-operatoria',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	3
                                    ),
                    12 =>	array
                                    (
                                            'text'		=> 	'Endodoncia',
                                            'class'		=> 	'clinic-children-endodoncia',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	3
                                    ),
                    13 =>	array
                                    (
                                            'text'		=> 	'Periodoncia',
                                            'class'		=> 	'clinic-children-periodoncia',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	3
                                    ),
                    14 =>	array
                                    (
                                            'text'		=> 	'Cirug&iacute;a',
                                            'class'		=> 	'clinic-children-cirugia',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	3
                                    ),
                    15 =>	array
                                    (
                                            'text'		=> 	'Odontopediatr&iacute;a',
                                            'class'		=> 	'clinic-children-odontopediatria',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	3
                                    ),
                    16 =>	array
                                    (
                                            'text'		=> 	'Ortodoncia',
                                            'class'		=> 	'clinic-children-ortodoncia',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	3
                                    ),
                    17 =>	array
                                    (
                                            'text'		=> 	'Protesis Fija',
                                            'class'		=> 	'clinic-children-fija-removible',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	3
                                    ),
                    18 =>	array
                                    (
                                            'text'		=> 	'Protesis Removible',
                                            'class'		=> 	'clinic-children-fija-removible',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	3
                                    ),
                    19 =>	array
                                    (
                                            'text'		=> 	'Integral Ni&ntilde;os',
                                            'class'		=> 	'clinic-children-ninhos',
                                            'link'		=> 	'../integral_ninhos/index.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	3
                                    ),
                    20 =>	array
                                    (
                                            'text'		=> 	'Integral Adultos',
                                            'class'		=> 	'clinic-children-old',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	3
                                    ),
                    21 =>	array
                                    (
                                            'text'		=> 	'3er a&ntilde;o',
                                            'class'		=> 	'student-children',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	4
                                    ),
                    22 =>	array
                                    (
                                            'text'		=> 	'4to a&ntilde;o',
                                            'class'		=> 	'student-children',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	4
                                    ),
                    23 =>	array
                                    (
                                            'text'		=> 	'5to a&ntilde;o',
                                            'class'		=> 	'student-children',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	4
                                    ),
                    24 =>	array
                                    (
                                            'text'		=> 	'Adicionar Enfermera',
                                            'class'		=> 	'nurse-add',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	5
                                    ),
                    25 =>	array
                                    (
                                            'text'		=> 	'Eliminar Enfermera',
                                            'class'		=> 	'nurse-delete',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	5
                                    ),
                    26 =>	array
                                    (
                                            'text'		=> 	'Modificar Enfermera',
                                            'class'		=> 	'nurse-update',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	5
                                    ),
                    27 =>	array
                                    (
                                            'text'		=> 	'Buscar Enfermera',
                                            'class'		=> 	'nurse-search',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	5
                                    ),
                    28 =>	array
                                    (
                                            'text'		=> 	'Citas de Paciente',
                                            'class'		=> 	'patient-calendar',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	2
                                    ),
                   29 =>	array
                                    (
                                            'text'		=> 	'Mi cuenta',
                                            'class'		=> 	'patient',
                                            'link'		=> 	'../usuario/change_password.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),


            );
            return $menu1;
            break;
        case 1:
            $menu1=array(
                    1 => 	array
                                    (
                                            'text'		=> 	'Inicio',
                                            'class'		=> 	'home',
                                            'link'		=> 	'index.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
             );
             return $menu1;
             break;
        case 2:
            $menu1=array(
                    1 => 	array
                                    (
                                            'text'		=> 	'Inicio',
                                            'class'		=> 	'home',
                                            'link'		=> 	'index.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
             );
             return $menu1;
             break;
         //para el estudiante.
        case 3:
            if($_SESSION['nfEstudiante']==1){
             $menu1=array(
                    1 => 	array
                                    (
                                            'text'		=> 	'Inicio',
                                            'class'		=> 	'home',
                                            'link'		=> 	'main.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    2 => 	array
                                    (
                                            'text'		=> 	'Cl&iacute;nica',
                                            'class'		=> 	'dental',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    3 => 	array
                                    (
                                            'text'		=> 	'Paciente',
                                            'class'		=> 	'patient',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    4 => 	array
                                    (
                                            'text'		=> 	$_SESSION['datos_estudiante'][0]['name'],
                                            'class'		=> 	$_SESSION['datos_estudiante'][0]['clase'],
                                            'link'		=> 	$_SESSION['datos_estudiante'][0]['link'],
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	2
                                    ),
                    5 => 	array
                                    (
                                            'text'		=> 	'',
                                            'class'		=> 	$_SESSION['datos_estudiante'][0]['clase'],
                                            'link'		=> 	$_SESSION['datos_estudiante'][0]['link'],
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	2
                                    ),
             );
            }
            else{
                $menu1=array(
                    1 => 	array
                                    (
                                            'text'		=> 	'Inicio',
                                            'class'		=> 	'home',
                                            'link'		=> 	'main.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                     2 => 	array
                                    (
                                            'text'		=> 	'Pacientes',
                                            'class'		=> 	'patient',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    3 => 	array
                                    (
                                            'text'		=> 	'Seguimiento',
                                            'class'		=> 	'citas-patient',
                                            'link'		=> 	'main.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    4 => 	array
                                    (
                                            'text'		=> 	'Estad&iacute;sticas',
                                            'class'		=> 	'citas-patient',
                                            'link'		=> 	'main.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    5 => 	array
                                    (
                                            'text'		=> 	'Ficha Cl&iacute;nica ',
                                            'class'		=> 	$_SESSION['datos_estudiante'][0]['clase'],
                                            'link'		=> 	'../patient/',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	2
                                    ),
                    6 => 	array
                                    (
                                            'text'		=> 	'Diagn&oacute;ostico',
                                            'class'		=> 	$_SESSION['datos_estudiante'][1]['clase'],
                                            'link'		=> 	'../integral_ninhos/lista_diagnostico.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	2
                                    ),
                    7 => 	array
                                    (
                                            'text'		=> 	'Tratamiento',
                                            'class'		=> 	$_SESSION['datos_estudiante'][1]['clase'],
                                            'link'		=> 	'../integral_ninhos/',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	2
                                    ),
                    8 => 	array
                                    (
                                            'text'		=> 	'Historial',
                                            'class'		=> 	$_SESSION['datos_estudiante'][1]['clase'],
                                            'link'		=> 	'../integral_ninhos/ninhos.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	2
                                    ),
                    9 => 	array
                                    (
                                            'text'		=> 	'Citas de Paciente',
                                            'class'		=> 	'citas-patient',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	2
                                    ),
                    10 => 	array
                                    (
                                            'text'		=> 	'Reportes',
                                            'class'		=> 	'report',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                     11 =>	array
                                    (
                                            'text'		=> 	'Mi cuenta',
                                            'class'		=> 	'patient',
                                            'link'		=> 	'../usuario/change_password.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    );
            }
             return $menu1;
             break;
        case 4:
             $menu1=array(
                    1 => 	array
                                    (
                                            'text'		=> 	'Inicio',
                                            'class'		=> 	'home',
                                            'link'		=> 	'main.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    2 => 	array
                                    (
                                            'text'		=> 	'Mis Citas',
                                            'class'		=> 	'citas-patient',
                                            'link'		=> 	'../citas_paciente/detalle_cita.php?id='.$_SESSION['user_id']."",
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    3 => 	array
                                    (
                                            'text'		=> 	'Tratamientos',
                                            'class'		=> 	'tratamientos-patient',
                                            'link'		=> 	'index.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    4 => 	array
                                    (
                                            'text'		=> 	'Cuenta',
                                            'class'		=> 	'patient',
                                            'link'		=> 	'../usuario/change_password.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
             );
             return $menu1;
             break;

    }

    
       
    }
}
?>
