<?php


	add_action( 'wp_enqueue_scripts', 'styles_scripts' );
	function styles_scripts() {
		wp_enqueue_style( 'parent-style', get_stylesheet_uri() );

		wp_deregister_script( 'jquery-core' );
		wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' );
		wp_enqueue_script( 'jquery' );
	}

	function slick_slider() {
		wp_enqueue_style( 'slick-styles', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
		wp_enqueue_script( 'slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ) );
	}

	function swiper_bundle() {
		wp_enqueue_style( 'swiper-styles', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
		wp_enqueue_script( 'swiper-script', 'https://unpkg.com/swiper/swiper-bundle.min.js', array( 'jquery' ) );
	}

	function aos_js_animation() {
		wp_enqueue_style( 'aos-styles', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
		wp_enqueue_script( 'aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array( 'jquery' ) );

	}

	function acf_options( $name ) {
		if ( function_exists( 'acf_add_options_page' ) ) {
			acf_add_options_page( array(
				'page_title' => 'Theme General Settings',
				'menu_title' => $name,
				'menu_slug'  => 'theme-general-settings',
				'capability' => 'edit_posts',
				'redirect'   => false
			) );
		}
	}

	function theme_support() {
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);
	}


	/* * TGM init * */
	require_once get_template_directory() . '/tgm/init-tgm.php';