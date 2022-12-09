<?php
/**
 * feliskitchen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package feliskitchen
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'feliskitchen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function feliskitchen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on feliskitchen, use a find and replace
		 * to change 'feliskitchen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'feliskitchen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'feliskitchen' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'feliskitchen_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'feliskitchen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function feliskitchen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'feliskitchen_content_width', 640 );
}
add_action( 'after_setup_theme', 'feliskitchen_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function feliskitchen_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'feliskitchen' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'feliskitchen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'feliskitchen_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function feliskitchen_scripts() {
	wp_enqueue_style( 'feliskitchen-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'feliskitchen-style', 'rtl', 'replace' );

	wp_enqueue_script( 'feliskitchen-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'feliskitchen_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    #adminmenu, #adminmenuback, #adminmenuwrap {
		background: #D50132;
	}
	#wpadminbar {
		color: #fff;
		background: #D50132;
	}
	.wp-core-ui .button-primary {
		background: #D50132;
		border-color: #D50132;
		color: #fff;
	}
    #wp-admin-bar-wp-logo{
        display:none;
    }
    #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top {
        background: #212121;
    }
    #adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu {
        background: #332F21;
    }
  </style>';
}
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
           background-image: url('https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/logo-feliz.svg');
            width: 220px;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
        .login #login_error, .login .message, .login .success {
        border-left: 4px solid #D50132
        !important;
        }
        .wp-core-ui .button-primary {
        background: #D50132
        !important;
        border-color:  #D50132
        !important;
        }
        .wp-core-ui .button-secondary {
        color: #D50132
        !important;
        }
        .privacy-policy-page-link{display:none !important;}
    </style>

<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
