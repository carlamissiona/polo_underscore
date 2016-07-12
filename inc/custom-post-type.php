<?php
/**
 * polo_s functions and definitions for custom post type.
 *
 * @package polo_s
 *
 */


function add_post_type($name, $args = array() ) {
	add_action("init" , function() use( $name , $args) {
		$upper = ucwords($name);
		$name = strtolower( str_replace(' ', '_',$name) );
		
		$args = array_merge(
			array(
				"public" => true , 
				"label" => "All $upper" .'s' , 
				"labels" => array( "add_new_item" => "Add New ".$upper),
				"supports" => array("title" , "editor" , "comments") 		
			) , 
			$args
		);
		register_post_type( $name , $args ) ;
	
	});
	
}

 
function add_taxonomy($name ,$post_type , $args = array()){
	$name = strtolower($name);
	add_action("init" , function() use($name , $post_type ,$args) {
		$args = array_merge(
			array(
				"label" => ucwords($name)
			),
			$args
		);
	
		register_taxonomy($name , $post_type , $args);
	});
	
}