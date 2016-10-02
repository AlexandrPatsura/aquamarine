<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override test_setup() in a child theme, add your own test_setup to your child theme's
 * functions.php file.
 *
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_custom_background() To add support for a custom background.
 * @uses add_editor_style() To style the visual editor.
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_custom_image_header() To add support for a custom header.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Twelve 1.0
 */
function test_setup() {

    // This theme styles the visual editor with editor-style.css to match the theme style.
  add_editor_style();

    // Post Format support. You can also use the legacy "gallery" or "asides" (note the plural) categories.
  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat', ) );

    // This theme uses post thumbnails
  add_theme_support( 'post-thumbnails' );

    // Add default posts and comments RSS feed links to head
  add_theme_support( 'automatic-feed-links' );

    // Make theme available for translation
    // Translations can be filed in the /languages/ directory
  load_theme_textdomain( 'test', get_template_directory() . '/languages' );

  $locale = get_locale();
  $locale_file = get_template_directory() . "/languages/$locale.php";
  if ( is_readable( $locale_file ) )
    require_once( $locale_file );

    // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'test_header_menu' => __( 'Header Menu', 'test' ),
    ) );

    // This theme allows users to set a custom background
  add_theme_support( 'custom-background' );

  $url = get_theme_mod( 'header_image', get_theme_support( 'custom-header', 'default-image' ) );

  $args = array(
        // Text color and image (empty to use none).
    'default-text-color'	=> '00b3ee',
    'default-image'			=> '%s/images/section7.jpg',

        // Set height and width, with a maximum value for the width.
    'width'				=> 1920,
    'flex-width'	    => true,
    'height'			=> 1080,
    'flex-height'	    => true,

        // Callbacks for styling the header and the admin preview.
    'wp-head-callback'			=> 'test_header_style',
    'admin-head-callback'		=> 'test_admin_header_style',
    'admin-preview-callback'	=> 'test_admin_header_image',
    );

    // Set a default header image and default header image
  add_theme_support( 'custom-header', $args );

    // Your changeable header business starts here
  if ( ! defined( 'HEADER_TEXTCOLOR' ) )
    define( 'HEADER_TEXTCOLOR', '' );

    // No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
  if ( ! defined( 'HEADER_IMAGE' ) )
    define( 'HEADER_IMAGE', '%s/images/section7.jpg' );

    // The height and width of your custom header. You can hook into the theme's own filters to change these values.
    // Add a filter to test_header_image_width and test_header_image_height to change these values.
  define( 'HEADER_IMAGE_WIDTH', apply_filters( 'test_header_image_width', 1920 ) );
  define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'test_header_image_height', 1080 ) );

    // We'll be using post thumbnails for custom header images on posts and pages.
    // We want them to be 940 pixels wide by 198 pixels tall.
    // Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
    // set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );

    // Don't support text inside the header image.
  if ( ! defined( 'NO_HEADER_TEXT' ) )
    define( 'NO_HEADER_TEXT', true );

    // Add a way for the custom header to be styled in the admin panel that controls
    // custom headers. See test_admin_header_style(), below.
    // add_custom_image_header( '', 'test_admin_header_style' );

    // ... and thus ends the changeable header business.

}

// Default theme header image and background-color
function test_header_style()
{
  $header_image = get_header_image();
  $text_color = get_header_textcolor();

    // If no custom options for text are set, let's bail.
  if (empty($header_image) && $text_color == get_theme_support('custom-header', 'default-text-color'))
    return;

    // If we get this far, we have custom styles.
  if ( ! empty( $header_image ) ) : ?>
  <style>
    .test__header-wrapper {
      background: url( '<?php header_image(); ?>' ) #00b3ee no-repeat center center;
    }
  </style>
<?php endif;
}

// Style for theme
function test_scripts() {

  // Add custom fonts, used in the main stylesheet.
  wp_enqueue_style( 'test-font-awesome', get_template_directory_uri() . '/templates/font-awesome/css/font-awesome.min.css' );
  wp_enqueue_style( 'test-bootstrap-css', get_template_directory_uri() . '/templates/bootstrap/dist/css/bootstrap.min.css' );
  wp_enqueue_style( 'test-slick-css', get_template_directory_uri() . '/templates/slick-slider/slick/slick.css' );
  wp_enqueue_style( 'test-slick-theme-css', get_template_directory_uri() . '/templates/slick-slider/slick/slick-theme.css' );
  wp_enqueue_style( 'test-style', get_stylesheet_uri() );
  wp_enqueue_style( 'test-media-css', get_template_directory_uri() . '/media.css' );

  wp_enqueue_script( 'test-html5shiv', get_template_directory_uri() . '/templates/html5shiv/html5shiv.min.js' );
  wp_enqueue_script( 'test-respond', get_template_directory_uri() . '/templates/respond/respond.min.js' );
  wp_enqueue_script( 'test-parallax', get_template_directory_uri() . '/templates/parallax/parallax.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'test-slick-js', get_template_directory_uri() . '/templates/slick-slider/slick/slick.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'test-script', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ) );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

}


/** Tell WordPress to run test_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'test_setup' );
add_action( 'wp_enqueue_scripts', 'test_scripts' );