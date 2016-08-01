<?php

		// scripts 

		function my_init() {

					wp_deregister_script('jquery'); 
					wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', false, '2.1.4'); 
					wp_enqueue_script('jquery');
	
			}

		add_action('init', 'my_init');

		function theme_name_scripts() {

		    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js' );
		
		    //wp_enqueue_script( 'yourscriptname', get_stylesheet_directory_uri() . '/js/yourscriptname.js'  );

		}

		add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
?>
