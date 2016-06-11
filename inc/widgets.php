<?php
/**
 * Declaring widgets
 *
 *
 * @package auxe
 */
function auxe_widgets_init() {
				register_sidebar( array(
					'name'          => __( 'Sidebar', 'auxe' ),
					'id'            => 'sidebar-1',
					'description'   => 'Sidebar widget area',
					'before_widget' => '<aside id="%1$s" class="widget %2$s">',
					'after_widget'  => '</aside>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
					) );

				register_sidebar( array(
        	'name'          => __( 'Hero Slider', 'auxe' ),
        	'id'            => 'hero',
        	'description'   => 'Hero slider area. Place two or more widgets here and they will slide!',
        	'before_widget' => '<div class="item">',
        	'after_widget'  => '</div>',
        	'before_title'  => '',
        	'after_title'   => '',
    			) );

				register_sidebar( array(
        	'name'          => __( 'Hero Static', 'auxe' ),
        	'id'            => 'statichero',
        	'description'   => 'Static Hero widget. no slider functionallity',
        	'before_widget' => '',
        	'after_widget'  => '',
        	'before_title'  => '',
        	'after_title'   => '',
    			) );

				

		/*
		TKSD WIDGETS AREAS
		*/
		// slideshow sidebar
				register_sidebar(array(
					'id' => 'sidebarslideshow',
					'name' => __('slideshow', 'auxe'),
					'description' => __('The first (primary) sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					)	);
		//header sibebars
				register_sidebar(array(
					'id' => 'sidebarheadera',
					'name' => __('Header A', 'auxe'),
					'description' => __('The second TKSD (primary) sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					) );
				register_sidebar(array(
					'id' => 'sidebarheaderb',
					'name' => __('Header B', 'auxe'),
					'description' => __('The second TKSD (primary) sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					) );
			  register_sidebar(array(
			  	'id' => 'sidebarheaderc',
			  	'name' => __('Header C', 'auxe'),
			  	'description' => __('The third TKSD (primary) sidebar.', 'auxe'),
			  	'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
		) );

				// top sidebars
				register_sidebar(array(
					'id' => 'sidebara',
					'name' => __('Top A', 'auxe'),
					'description' => __('The second TKSD (primary) sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					) );
				register_sidebar(array(
					'id' => 'sidebarb',
					'name' => __('Top B', 'auxe'),
					'description' => __('The second TKSD (primary) sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					) );
				register_sidebar(array(
					'id' => 'sidebarc',
					'name' => __('Top C', 'auxe'),
					'description' => __('The third TKSD (primary) sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					) );
				// Content sidebars
				register_sidebar( array(
					'name'          => __( 'Sidebar A', 'auxe' ),
					'id'            => 'sidebar-a',
					'description'   => '',
					'before_widget' => '<aside id="%1$s" class="widget %2$s">',
					'after_widget'  => '</aside>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
					) );
    		register_sidebar( array(
					'name'          => __( 'Sidebar B', 'auxe' ),
					'id'            => 'sidebar-b',
					'description'   => '',
					'before_widget' => '<aside id="%1$s" class="widget %2$s">',
					'after_widget'  => '</aside>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
					) );

					// middle sidebar
				register_sidebar(array(
					'id' => 'sidebarmd1',
					'name' => __('Middle A', 'auxe'),
					'description' => __('The first middle sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					) );
				register_sidebar(array(
					'id' => 'sidebarmd2',
					'name' => __('Middle B', 'auxe'),
					'description' => __('The second middle sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					) );


				//footer sidebars
				register_sidebar( array(
        	'name'          => __( 'Footer Full', 'auxe' ),
        	'id'            => 'footerfull',
        	'description'   => 'Widget area below main content and above footer',
        	'before_widget' => '',
        	'after_widget'  => '',
        	'before_title'  => '',
        	'after_title'   => '',
    				) );
				register_sidebar(array(
					'id' => 'sidebarfa',
					'name' => __('Footer A', 'auxe'),
					'description' => __('The second TKSD (primary) sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					) );
				register_sidebar(array(
					'id' => 'sidebarfb',
					'name' => __('Footer B', 'auxe'),
					'description' => __('The second TKSD (primary) sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					) );
				register_sidebar(array(
					'id' => 'sidebarfc',
					'name' => __('Footer C', 'auxe'),
					'description' => __('The third TKSD (primary) sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					) );


		// Register footer 2 sidebars

				register_sidebar(array(
					'id' => 'sidebarf2a',
					'name' => __('Footer 2A', 'auxe'),
					'description' => __('The second TKSD (primary) sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					) );
				register_sidebar(array(
					'id' => 'sidebarf2b',
					'name' => __('Footer 2B', 'auxe'),
					'description' => __('The second TKSD (primary) sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					) );
			register_sidebar(array(
					'id' => 'sidebarf2c',
					'name' => __('Footer 2C', 'auxe'),
					'description' => __('The third TKSD (primary) sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					) );
		// Contact Page widgets

				register_sidebar(array(
					'id' => 'sidebarcfa',
					'name' => __('Contact A', 'auxe'),
					'description' => __('The second TKSD (primary) sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					) );
				register_sidebar(array(
					'id' => 'sidebarcfb',
					'name' => __('Contact B', 'auxe'),
					'description' => __('The second TKSD (primary) sidebar.', 'auxe'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
					)	);
			// Off Canvas
			register_sidebar(array(
				'id' => 'offcanvas',
				'name' => __('Offcanvas', 'auxe'),
				'description' => __('The offcanvas sidebar.', 'auxe'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h2 class="widgettitle">',
				'after_title' => '</h2>',
				) );

}
add_action( 'widgets_init', 'auxe_widgets_init' );
