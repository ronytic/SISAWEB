<?php

class Options{
function optionMenu(){
//    echo "hola".$_SESSION['type_user'];
    //switch ($_SESSION['type_user']) {
		switch (0) {
        case 0:
            $menu1=array
            (
                    1 => 	array
                                    (
                                            'text'		=> 	'Inicio',
                                            'class'		=> 	'home',
                                            'link'		=> 	'../site_media/html/main.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    2 =>	array
                                    (
                                            'text'		=> 	'Usuarios',
                                            'class'		=> 	'usuarios',
                                            'link'		=> '../controller/usuarios/UsuarioCtrl.php?pagina=principal',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    3 =>	array
                                    (
                                            'text'		=> 	'Docentes',
                                            'class'		=> 	'docentes',
                                            'link'		=> 	'../controller/empleados/EmpleadoCtrl.php?pagina=principal',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    4 =>	array
                                    (
                                            'text'		=> 	'Carreras',
                                            'class'		=> 	'carreras',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    5 =>	array
                                    (
                                            'text'		=> 	'Reservas',
                                            'class'		=> 	'reservas',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    6 =>	array
                                    (
                                            'text'		=> 	'Inscripciones',
                                            'class'		=> 	'inscripciones',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    7 =>	array
                                    (
                                            'text'		=> 	'Notas',
                                            'class'		=> 	'notas',
                                            'link'		=> 	'../patient/index.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    8 =>	array
                                    (
                                            'text'		=> 	'Estudiantes',
                                            'class'		=> 	'estudiantes',
                                            'link'		=> 	'../patient/edit_patient.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    9 =>	array
                                    (
                                            'text'		=> 	'Pagos',
                                            'class'		=> 	'pagos',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	0
                                    ),
                    10 =>	array
                                    (
                                            'text'		=> 	'Administra Usuarios',
                                            'class'		=> 	'admin_usuarios',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	2
                                    ),
                    11 =>	array
                                    (
                                            'text'		=> 	'Administra Cuenta',
                                            'class'		=> 	'admin_cuenta',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	2
                                    ),
					12 =>	array
                                    (
                                            'text'		=> 	'Adiciona',
                                            'class'		=> 	'usuario_add',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	10
                                    ),
					13 =>	array
                                    (
                                            'text'		=> 	'Modifica',
                                            'class'		=> 	'usuario_edit',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	10
                                    ),
					14 =>	array
                                    (
                                            'text'		=> 	'Elimina',
                                            'class'		=> 	'usuario_delete',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	10
                                    ),
					15 =>	array
                                    (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'usuario_search',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	10
                                    ),
					16 =>	array
                                    (
                                            'text'		=> 	'Modificar Contraseña',
                                            'class'		=> 	'modifica_password',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	11
                                    ),
                    17 =>	array
                                  (
                                            'text'		=> 	'Administra Empleados',
                                            'class'		=> 	'admin_datos',
                                            'link'		=> 	'../controller/empleados/EmpleadoCtrl.php?pagina=principal',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	3
                                    ),
                    18 =>	array
                                    (
                                            'text'		=> 	'Asigna Cursos',
                                            'class'		=> 	'asigna_cursos',
                                            'link'		=> 	'../controller/asigna_cursos/AsignaCursosCtrl.php?pagina=principal',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	3
                                    ),
                    19 =>	array
                                    (
                                            'text'		=> 	'Adiciona',
                                            'class'		=> 	'docente_add',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	17
                                    ),
                    20 =>	array
                                    (
                                            'text'		=> 	'Modifica',
                                            'class'		=> 	'docente_edit',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	17
                                    ),
                    21 =>	array
                                    (
                                            'text'		=> 	'Elimina',
                                            'class'		=> 	'docente_delete',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	17
                                    ),
                    22 =>	array
                                   (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'docente_search',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	17
                                    ),
                    23 =>	array
                                    (
                                            'text'		=> 	'Adiciona',
                                            'class'		=> 	'asigna_add',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	18
                                    ),
                    24 =>	array
                                    (
                                            'text'		=> 	'Modifica',
                                            'class'		=> 	'asigna_edit',
                                            'link'		=> 	'../integral_ninhos/index.php',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	18
                                    ),
                    25 =>	array
                                    (
                                            'text'		=> 	'Elimina',
                                            'class'		=> 	'asigna_delete',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	18
                                    ),
                    26 =>	array
                                    (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'asigna_search',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	18
                                    ),
                    27 =>	array
                                    (
                                            'text'		=> 	'Administra Carreras',
                                            'class'		=> 	'admin_carreras',
                                            'link'		=> 	'../controller/carreras/CarrerasCtrl.php?pagina=principal',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	4
                                    ),
                    28 =>	array
                                    (
                                            'text'		=> 	'Administra Cursos',
                                            'class'		=> 	'admin_cursos',
                                            'link'		=> 	'../controller/cursos/CursoCtrl.php?pagina=principal',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	4
                                    ),
                    29 =>	array
                                    (
                                            'text'		=> 	'Administra Cursos Programados',
                                            'class'		=> 	'cursos_programados',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	4
                                    ),
                    30 =>	array
                                    (
                                            'text'		=> 	'Administra Seminarios/Conferencias',
                                            'class'		=> 	'seminarios_programados',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	4
                                    ),
                    31 =>	array
                                    (
                                            'text'		=> 	'Adiciona',
                                            'class'		=> 	'add',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>27
                                    ),
                    32 =>	array
                                    (
                                            'text'		=> 	'Modifica',
                                            'class'		=> 	'edit',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>27
                                    ),
                    33 =>	array
                                    (
                                            'text'		=> 	'Elimina',
                                            'class'		=> 	'elimina',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>27
                                    ),
					 34 =>	array
                                    (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'search',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	27
                                    ),
                
				 35 =>	array
                                    (
                                            'text'		=> 	'Adiciona',
                                            'class'		=> 	'add',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>28
                                    ),
                    36 =>	array
                                    (
                                            'text'		=> 	'Modifica',
                                            'class'		=> 	'edit',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>28
                                    ),
                    37 =>	array
                                    (
                                            'text'		=> 	'Elimina',
                                            'class'		=> 	'elimina',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	28
                                    ),
					 38 =>	array
                                    (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'search',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	28
                                    ),
					 39 =>	array
                                    (
                                            'text'		=> 	'Adiciona',
                                            'class'		=> 	'add',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>29
                                    ),
                    40 =>	array
                                    (
                                            'text'		=> 	'Modifica',
                                            'class'		=> 	'edit',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>29
                                    ),
                    41 =>	array
                                    (
                                            'text'		=> 	'Elimina',
                                            'class'		=> 	'elimina',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	29
                                    ),
					 42 =>	array
                                    (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'search',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	29
                                    ),
				 43 =>	array
                                    (
                                            'text'		=> 	'Adiciona',
                                            'class'		=> 	'add',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>30
                                    ),
                    44 =>	array
                                    (
                                            'text'		=> 	'Modifica',
                                            'class'		=> 	'edit',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>30
                                    ),
                    45 =>	array
                                    (
                                            'text'		=> 	'Elimina',
                                            'class'		=> 	'elimina',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	30
                                    ),
					 46 =>	array
                                    (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'search',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	30
                                    ),
				 47 =>	array
                                    (
                                            'text'		=> 	'Adiciona Reserva',
                                            'class'		=> 	'reserva_add',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>5
                                    ),
                    48 =>	array
                                    (
                                            'text'		=> 	'Modifica Reserva',
                                            'class'		=> 	'reserva_edit',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>5
                                    ),
                    49 =>	array
                                    (
                                            'text'		=> 	'Elimina Reserva',
                                            'class'		=> 	'reserva_delete',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	5
                                    ),
					 50 =>	array
                                    (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'reserva_search',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	5
                                    ),
				 51 =>	array
                                    (
                                            'text'		=> 	'Inscripciones Cursos',
                                            'class'		=> 	'inscripcionC',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>6
                                    ),
                    52 =>	array
                                    (
                                            'text'		=> 	'Inscripciones Seminarios',
                                            'class'		=> 	'inscripcionS',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>6
                                    ),
                    53 =>	array
                                    (
                                            'text'		=> 	'Adiciona',
                                            'class'		=> 	'i_add',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	51
                                    ),
					 54 =>	array
                                    (
                                            'text'		=> 	'Modifica',
                                            'class'		=> 	'i_edit',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	51
                                    ),
			 55 =>	array
                                    (
                                            'text'		=> 	'Elimina',
                                            'class'		=> 	'i_delete',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>51
                                    ),
                    56 =>	array
                                    (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'i_search',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>51
                                    ),
                    57 =>	array
                                    (
                                            'text'		=> 	'Adiciona',
                                            'class'		=> 	'i_add',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	52
                                    ),
					 58 =>	array
                                    (
                                            'text'		=> 	'Modifica',
                                            'class'		=> 	'i_edit',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	52
                                    ),
				 59 =>	array
                                    (
                                            'text'		=> 	'Elimina',
                                            'class'		=> 	'i_delete',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>52
                                    ),
                    60 =>	array
                                    (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'i_search',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>52
                                    ),
                    61=>	array
                                    (
                                            'text'		=> 	'Notas Alumnos',
                                            'class'		=> 	'notasA',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	7
                                    ),
					 62 =>	array
                                    (
                                            'text'		=> 	'Notas Docentes',
                                            'class'		=> 	'notasD',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	7
                                    ),
				 63 =>	array
                                    (
                                            'text'		=> 	'Adiciona',
                                            'class'		=> 	'nota_add',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>61
                                    ),
                    64 =>	array
                                    (
                                            'text'		=> 	'Modifica',
                                            'class'		=> 	'nota_edit',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>61
                                    ),
                    65 =>	array
                                    (
                                            'text'		=> 	'Elimina',
                                            'class'		=> 	'nota_delete',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	61
                                    ),
					 66 =>	array
                                    (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'nota_search',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	61
                                    ),
				 67 =>	array
                                    (
                                            'text'		=> 	'Adiciona',
                                            'class'		=> 	'nota_add',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>62
                                    ),
                    68 =>	array
                                    (
                                            'text'		=> 	'Modifica',
                                            'class'		=> 	'nota_edit',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>62
                                    ),
                    69 =>	array
                                    (
                                            'text'		=> 	'Elimina',
                                            'class'		=> 	'nota_delete',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	62
                                    ),
					 70 =>	array
                                    (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'nota_search',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	62
                                    ),
				 71 =>	array
                                    (
                                            'text'		=> 	'Administra Estudiantes',
                                            'class'		=> 	'admin_estudiantes',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>8
                                    ),
                    72 =>	array
                                    (
                                            'text'		=> 	'Cuenta Estudiante',
                                            'class'		=> 	'cuenta_estudiante',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>8
                                    ),
                    73 =>	array
                                    (
                                            'text'		=> 	'Adiciona',
                                            'class'		=> 	'e_add',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	71
                                    ),
					 74 =>	array
                                    (
                                            'text'		=> 	'Modifica',
                                            'class'		=> 	'e_edit',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	71
                                    ),
				 75 =>	array
                                    (
                                            'text'		=> 	'Elimina',
                                            'class'		=> 	'e_delete',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>71
                                    ),
                    76 =>	array
                                    (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'e_search',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>71
                                    ),
                    77 =>	array
                                    (
                                            'text'		=> 	'Actualizar Datos',
                                            'class'		=> 	'actualizar_datos',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	72
                                    ),
					 78 =>	array
                                    (
                                            'text'		=> 	'Mi curso Actual',
                                            'class'		=> 	'mi_cursoA',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	72
                                    ),
				 79 =>	array
                                    (
                                            'text'		=> 	'Ver Pagos',
                                            'class'		=> 	'ver_pagos',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>72
									),
					 80 =>	array
                                    (
                                            'text'		=> 	'Ficha Academica',
                                            'class'		=> 	'fichaA',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>72
                                    ),
                    81 =>	array
                                    (
                                            'text'		=> 	'Pagos Cursos',
                                            'class'		=> 	'pago_curso',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>9
                                    ),
                    82 =>	array
                                    (
                                            'text'		=> 	'Pagos Certificados',
                                            'class'		=> 	'pago_certificado',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	9
                                    ),
					 83 =>	array
                                    (
                                            'text'		=> 	'Adiciona',
                                            'class'		=> 	'pago_add',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	81
                                    ),
									
				 84 =>	array
                                    (
                                            'text'		=> 	'Modifica',
                                            'class'		=> 	'pago_edit',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>81
                                    ),
                    85 =>	array
                                    (
                                            'text'		=> 	'Elimina',
                                            'class'		=> 	'pago_delete',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>81
                                    ),
                    86 =>	array
                                    (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'pago_search',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	81
                                    ),
					 87 =>	array
                                    (
                                            'text'		=> 	'Adiciona',
                                            'class'		=> 	'pago_add',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	82
                                    ),
				 88 =>	array
                                    (
                                            'text'		=> 	'Modifica',
                                            'class'		=> 	'pago_edit',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>82
                                    ),
                    89 =>	array
                                    (
                                            'text'		=> 	'Elimina',
                                            'class'		=> 	'pago_delete',
                                            'link'		=> 	'#',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>82
                                    ),
                    90 =>	array
                                    (
                                            'text'		=> 	'Busca',
                                            'class'		=> 	'pago_search',
                                            'link'		=> 	'../citas_paciente/index.php?argumento=0',
                                            'show_condition'=>	TRUE,
                                            'parent'	=>	82
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
