<?php
// WP Ajax para mostrar una cantidad determinada de
add_action('wp_ajax_mostrar_random', 'ajax_mostrar_random');
function ajax_mostrar_random(){

	$cantidad = $_REQUEST['cantidad_post'];
	$html = "";
	
	query_posts(array(
		'orderby'   =>  'rand',
		'showposts' =>  $cantidad
	));
	while (have_posts()) { the_post();
		$html .= '- '.get_the_title().'<br>';
	}
    wp_reset_query();

	echo $html;
	exit();

}
?>
