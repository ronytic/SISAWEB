<?php
session_start();
//echo "hola".$_SESSION['clinic_id'];
include 'options.php';
$menu1=new Options();
/*
|---------------------------------------------------------------
| CREDITS
|---------------------------------------------------------------
|
| http://www.cssplay.co.uk/ for the best free css menus
| http://www.famfamfam.com/lab/icons/silk/ for the icons
|
*/
	error_reporting ( E_ALL );

	$menu = $menu1->optionMenu();
	function build_menu ( $menu )
	{
		$out = '<div class="container4">' . "\n";
		$out .= '	<div class="menu4">' . "\n";
		$out .= "\n".'<ul>' . "\n";
		
		for ( $i = 1; $i <= count ( $menu ); $i++ )
		{
			if ( is_array ( $menu [ $i ] ) ) {//must be by construction but let's keep the errors home
				if ( $menu [ $i ] [ 'show_condition' ] && $menu [ $i ] [ 'parent' ] == 0 ) {//are we allowed to see this menu?
					$out .= '<li class="' . $menu [ $i ] [ 'class' ] . '"><a href="' . $menu [ $i ] [ 'link' ] . '" target="main">';
					$out .= $menu [ $i ] [ 'text' ];
					$out .= '</a>';
					$out .= get_childs ( $menu, $i );
					$out .= '</li>' . "\n";
				}
			}
			else {
				die ( sprintf ( 'menu nr %s must be an array', $i ) );
			}
		}
		
		$out .= '</ul>'."\n";
		$out .= "\n\t" . '</div>';
		return $out . "\n\t" . '</div>';
	}
	
	function get_childs ( $menu, $el_id )
	{
		$has_subcats = FALSE;
		$out = '';
		$out .= "\n".'	<ul>' . "\n";
		for ( $i = 1; $i <= count ( $menu ); $i++ )
		{
			if ( $menu [ $i ] [ 'show_condition' ] && $menu [ $i ] [ 'parent' ] == $el_id ) {//are we allowed to see this menu?
				$has_subcats = TRUE;
				$add_class = ( get_childs ( $menu, $i ) != FALSE ) ? ' subsubl' : '';
				$out .= '		<li class="' . $menu [ $i ] [ 'class' ] . $add_class . '"><a href="' . $menu [ $i ] [ 'link' ] . '" target="main">';
				$out .= $menu [ $i ] [ 'text' ];
//				$out .= 'target=main';
				$out .= '</a>';
				$out .= get_childs ( $menu, $i );
				$out .= '</li>' . "\n";
			}
		}
		$out .= '	</ul>'."\n";
		return ( $has_subcats ) ? $out : FALSE;
	}

?>
	
		<?= build_menu ( $menu ) ?>


