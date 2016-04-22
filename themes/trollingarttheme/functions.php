<?php
/**
 * trollingarttheme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package trollingarttheme
 */

if ( ! function_exists( 'trollingarttheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function trollingarttheme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on trollingarttheme, use a find and replace
	 * to change 'trollingarttheme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'trollingarttheme', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'trollingarttheme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'trollingarttheme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // trollingarttheme_setup
add_action( 'after_setup_theme', 'trollingarttheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function trollingarttheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'trollingarttheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'trollingarttheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function trollingarttheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'trollingarttheme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'trollingarttheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function trollingarttheme_scripts() {
	wp_enqueue_style( '_s-style', get_stylesheet_uri() );
	wp_enqueue_style('trolling-styles', get_template_directory_uri() . '/css/trollingart.css');

	wp_enqueue_script( '_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), 'v3.3.5', true );
		wp_enqueue_script( 'trolling-js', get_template_directory_uri() . '/js/trollingart.js', array( 'jquery' ), 'v3.3.5', true );
}
add_action( 'wp_enqueue_scripts', 'trollingarttheme_scripts' );

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
/* 																	Nuevos campos para usuarios                         */
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

function custom_user_profile_fields($user){
    if(is_object($user)) {
        $company = esc_attr( get_the_author_meta( 'company', $user->ID ) );
				$wikiPic = esc_attr( get_the_author_meta( 'wikiPicfile', $user->ID ) );
    } else {
        $company = null;
		}
    ?>
    <h3>Extra profile information</h3>
    <table class="form-table">
        <tr>
            <th><label for="company">Wiki URL</label></th>
            <td>
                <input type="text" class="regular-text" name="company" value="<?php echo $company; ?>" id="company" /><br />
                <span class="description">Json URL</span>
            </td>
        </tr>
				<tr>
            <th><label for="pic">Wiki Pic</label></th>
            <td>
                <img alt="<?php echo $wikiPic; ?>" src="<?php echo $wikiPic; ?>" class="avatar avatar-96 photo" height="96" width="96">
                <br><span class="description">Json URL</span>
            </td>
        </tr>
    </table>
<?php
}
add_action( 'show_user_profile', 'custom_user_profile_fields' );
add_action( 'edit_user_profile', 'custom_user_profile_fields' );
add_action( "user_new_form", "custom_user_profile_fields" );

function save_custom_user_profile_fields($user_id){
    # again do this only if you can
    if(!current_user_can('manage_options'))
        return false;

    # save my custom field

		$urlbio = "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts|pageimages&exlimit=max&explaintext&exintro&pithumbsize=300&titles=".$_POST['company'];

		$str = file_get_contents($urlbio);
		$parsed_json = json_decode($str);
		foreach($parsed_json->query->pages as $k) {
		    $bioArtist = $k->extract;
				$nickName = $k->title;
				if (!empty($k->thumbnail)) {
					$arrayThum[] = $k->thumbnail;
					foreach($arrayThum as $q) {
						$wikiProfile = $q->source;
						//echo $q->source;
					}
		    }
		}
		if (strpos($nickName, ' ') !== false) {
	  	$nameLastname = explode(" ", $nickName);
			$name = $nameLastname[0];
			$lastname = $nameLastname[1];
		}else {
			$name = $nickName;
			$lastname = $nickName;
		}

    update_user_meta($user_id, 'company', $_POST['company']);
		update_user_meta($user_id, 'wikiPicfile', $wikiProfile);
		update_user_meta($user_id, 'description', $bioArtist);
		update_user_meta($user_id, 'first_name', $name);
		update_user_meta($user_id, 'last_name', $lastname);
		update_user_meta($user_id, 'nickname', $nickName);
		update_user_meta($user_id, 'display_name', $nickName);
}
add_action('user_register', 'save_custom_user_profile_fields');
add_action('profile_update', 'save_custom_user_profile_fields');

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
/* 																	Profile Artista                                     */
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


add_role('basic_contributor', 'Basic Contributor', array(
    'read' => false, // True allows that capability
    'edit_posts' => false,
    'delete_posts' => false, // Use false to explicitly deny
));

add_role('pintor', 'Pintor', array(
   'read' => false, // True allows that capability
   'edit_posts' => false,
   'delete_posts' => false, // Use false to explicitly deny
));

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
/* 																	Crear Memes                                         */
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

function makeMeme($post_id) {


/*echo $image; exit();*/

  if (has_post_thumbnail()) {

    //Obtener ruta completa de la imagen original
    $image_filepath = get_attached_file( get_post_thumbnail_id($post_id));
    //sólo el nombre de la imagen con su extensión ('.jpg')
    $image_name_full = wp_basename ( $image_filepath ); 
    //el nombre de la imagen SIN la extensión
    $image_name = wp_basename ($image_filepath, ".jpg");
    //ruta local a las imágenes del post en cuestión
    $post_filepath = str_replace($image_name_full,"",$image_filepath);
    //imagen intermedia local, sólo con el texto convertido a imagen
    $textimage = $post_filepath . "textimg.jpg";
    //imagen resultante del proceso, a guardarse en el mismo directorio que las imágenes del post
    $outputfile = $post_filepath . $image_name . "_meme.jpg";
    
    //texto del post a ser agregado a la imagen
    $texto = get_post_field('post_content', $post_id);
    
    //función que crea la imagen intermedia textimg.jpg que luego se sumará sobre la original
    CrearTextoImagen($texto, $image_filepath);
    //función que agrega la imagen intermedia sobre la original
    merge($textimage,$image_filepath,$outputfile);
  }
}
add_action( 'save_post', 'makeMeme', 100 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
* Bootstrap integration
*/
require get_template_directory() . '/inc/functions-strap.php';


/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
/* 												 FUNCIONES DE PROCESAMIENTO DE IMÁGENES                       */
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

function CrearTextoImagen($text, $source_file) {
	//averigüemos el directorio local de la imagen para guardar la siguiente ahí
	
	$image_name = wp_basename ($source_file);
	$public_file_path = str_replace($image_name,"",$source_file);
	
	//Establecer tipo y tamaño de letra
  $font = './fonts/arial.ttf';
  $font_size = 12;
  
  // Mide dimensiones de la imagen original
  list($width, $height) = getimagesize($source_file);
  
  //Asignar el ID de un tamaño estándar de fuentes del sistema, para medirlo
  //y usar esas medidas para hacerle wrap al texto
  $font_id = 3;
  
  
  //Romper el texto con saltos de línea de acuerdo con el ancho de la imagen
  $h = imagefontheight($font_id);
  $fw = imagefontwidth($font_id);
  $text = wordwrap($text, ($width / $fw), "\n", FALSE);
  
  // Establecer el margen de la izquierda (x) y de arriba (y) para el texto
  $offset_x = 3;
  $offset_y = 20;
   
  // Obtener el tamaño del área de texto de acuerdo con
  //la longitud del textoy el tipo de fuente
  $dims = imagettfbbox($font_size, 0, $font, $text);
  $text_width = $dims[4] - $dims[6] + $offset_x;
  $text_height = $dims[3] - $dims[5] + $offset_y;
   
  // crea una imagen vacía del mismo ancho que la imagen $image_p a la que sumaré el texto
  $image_p = imagecreatetruecolor($width, $text_height);
  
  // Preparar los colores de texto y de fondo
  $text_color = imagecolorallocate($image_p, 0, 0, 0);
  $bg_color = imagecolorallocate($image_p, 255, 255, 255);
  
  // Agregar el fondo del mismo ancho $width que la imagen
  imagefilledrectangle($image_p, 0, 0, $width, $text_height, $bg_color);
   
  // Add text
  imagettftext($image_p, $font_size, 0, $offset_x, $offset_y, $text_color, $font, $text);
   
  // Save the picture
  imagejpeg($image_p, $public_file_path . 'textimg.jpg', 100); 
  
  // Clear
  imagedestroy($image_p);
}

//Función para sumar las dos imágenes, una arriba y la otra abajo

function merge($filename_x, $filename_y, $filename_result) {

 // Get dimensions for specified images

 list($width_x, $height_x) = getimagesize($filename_x);
 list($width_y, $height_y) = getimagesize($filename_y);

 // Create new image with desired dimensions

 $image = imagecreatetruecolor($width_x, $height_x + $height_y);

 // Load images and then copy to destination image

 $image_x = imagecreatefromjpeg($filename_x);
 $image_y = imagecreatefromjpeg($filename_y);

 imagecopy($image, $image_x, 0, 0, 0, 0, $width_x, $height_x);
 imagecopy($image, $image_y, 0, $height_x, 0, 0, $width_y, $height_y);

 // Save the resulting image to disk (as JPEG)

 imagejpeg($image, $filename_result);

 // Clean up

 imagedestroy($image);
 imagedestroy($image_x);
 imagedestroy($image_y);

}