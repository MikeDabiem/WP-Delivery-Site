<?php
	add_action( 'wp_enqueue_scripts', function() {
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css' );
		wp_enqueue_style( 'style', get_stylesheet_uri(), array(), time() );

		wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/select.js', array(), 'null', true);
	});

	add_theme_support('title-tag');
	add_theme_support('custom-logo');

	register_nav_menus(
		array(
			'head_menu' => 'Header menu'
		)
	);

	function add_additional_class_on_li($classes, $item, $args) {
		if(isset($args->add_li_class)) {
			$classes[] = $args->add_li_class;
		}
		return $classes;
	}
	add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

	add_action( 'after_setup_theme', function() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo', array(
			'width' => 134,
			'height' => 42,
		));
	});

?>