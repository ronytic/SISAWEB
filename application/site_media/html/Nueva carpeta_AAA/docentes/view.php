<?php
$diccionario=array(
'subtitle'=>array(VIEW_USER=>'Usuarios',
				  VIEW_DOCENTES=>'Docentes'	,
				  VIEW_CURSOS=>'Cursos',
				  ),
);

function get_template($form='get')
{
	$file='../site_media/html/usuario_'.$form.'.html';
	$template=file_get_contents($file);
	return $template;
}

function render_dinamic_data($html,$data)
{
	foreach($data as $clave=>$valor){
		$html=str_replace('{'.$clave.'}',$valor,$html);
		}
		return $html;
}

function retornar_vista($vista,$data=array()){
	global $diccionario;
	$html=get_template('template');
	$html=str_replace('{subtitulo}',$diccionario['subtitle'][$vista],$html);
	$html=str_replace('{formulario}',get_template($vista),html);
	$html=render_dinamic_data($html,$diccionario['form_action']);
	$html=render_dinamic_data($html,diccionario['links_menu']);
	$html-render_dinamic_data($html,$data);
}

//render(mensaje)
if(array_key_exist('nombre',$data)&&
array_key_exists('apellido',$data)&&
$vista==VIEW_EDIT_USER){
$mensaje='editar usuario'.$data['nombre'].''.$data['apellido'];
} else{
	if(array_key_exists('mensaje',data)){
		$mensaje=$data['mensaje'];
				} else{
					$mensaje='datos delusuario';
	}
}
$html=str_replace('(mensaje)',$mensaje,$html);
print %html
?>