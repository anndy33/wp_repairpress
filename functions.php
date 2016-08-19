<?php
/**
 * _s functions and definitions
 *
 * @package _s
 */
/*
@Declare constant 
  @THEME_URL : lay dan thu muc theme
  @CORE : lay duong dan thu muc core
*/
  define( 'THEME_URL', get_stylesheet_directory() );
  define( 'CORE', THEME_URL . '/core' );
/*
  @Nhung file 
  @ Load file /core/init.php
  @ Đây là file cấu hình ban đầu của theme mà sẽ không nên được thay đổi sau này.
*/
require_once( CORE . '/init.php' );
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( '_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _s_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files
	 */
	load_theme_textdomain( '_s', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', '_s' ),
	) );
  register_nav_menus( array(
    'menu-footer' => __( 'Footer Menu', '_s' ),
  ) );
   register_nav_menus( array(
    'menu-sevice-footer' => __( 'Service Footer Menu', '_s' ),
  ) );
	register_nav_menus( array(
		'top-menu-right' => __( 'Top Menu', '_s' ),
	) );
	register_nav_menus( array(
		'menu-icon-right' => __( 'Icon Header Menu', '_s' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // _s_setup
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function _s_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_s' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

add_action( 'widgets_init', '_s_widgets_init' );
/*
@ Thiết lập hàm hiển thị logo
@ thachpham_logo()
**/
if ( ! function_exists( 'thachpham_logo' ) ) {
  function thachpham_logo() {?>
    <?php
      global $tp_options;
    ?>
 
    <?php if ( $tp_options['logo-on'] == 1 ) : ?>
      <div class="logo">
        <img src="<?php echo $tp_options['logo-image']['url']; ?>">
      </div>
    <?php else : ?>
      <div class="logo">
        <div class="site-name">
          <?php if ( is_home() ) {
            printf(
              '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
              get_bloginfo( 'url' ),
              get_bloginfo( 'description' ),
              get_bloginfo( 'sitename' )
            );
          } else {
            printf(
              '<a href="%1$s" title="%2$s">%3$s</a>',
              get_bloginfo( 'url' ),
              get_bloginfo( 'description' ),
              get_bloginfo( 'sitename' )
            );
          } // endif ?>
        </div>
        <div class="site-description"><?php bloginfo( 'description' ); ?></div>
      </div>
      <?php endif;
  }
}
if ( ! function_exists( 'thachpham_logo_ft' ) ) {
  function thachpham_logo_ft() {?>
    <?php
      global $tp_options;
    ?>
 
    <?php if ( $tp_options['logo-ft-on'] == 1 ) : ?>
      <div class="logo">
        <img src="<?php echo $tp_options['logo-image']['url']; ?>">
      </div>
    <?php else : ?>
      <div class="logo">
        <div class="site-name">
          <?php if ( is_home() ) {
            printf(
              '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
              get_bloginfo( 'url' ),
              get_bloginfo( 'description' ),
              get_bloginfo( 'sitename' )
            );
          } else {
            printf(
              '<a href="%1$s" title="%2$s">%3$s</a>',
              get_bloginfo( 'url' ),
              get_bloginfo( 'description' ),
              get_bloginfo( 'sitename' )
            );
          } // endif ?>
        </div>
        <div class="site-description"><?php bloginfo( 'description' ); ?></div>
      </div>
      <?php endif;
  }
}
//add some function
/*ngothuong_entry_meta: lay du lieu post*/
if( ! function_exists( 'ngothuong_entry_meta' ) ) {
  function ngothuong_entry_meta() {
    if ( ! is_page() ) :
      echo '<div class="entry-meta-1">';
        // Hiển thị tên tác giả, tên category và ngày tháng đăng bài
        printf( __('<span class="author">By %1$s &nbsp; &nbsp; &nbsp;/&nbsp;&nbsp; &nbsp;</span>', 'ngothuong'),
          get_the_author() ); 
     	 printf( __('<span class="date-published"> %1$s </span>', 'ngothuong'),
          get_the_date('j') );
        printf( __('<span class="date-published-1"> %1$s </span>', 'ngothuong'),
          get_the_date('M') );
        printf( __('<span class="category"> %1$s &nbsp; &nbsp; &nbsp; /&nbsp; &nbsp; &nbsp;</span>', 'ngothuong'),
          get_the_category_list( ', ' ) );
        // Hiển thị số đếm lượt bình luận
        if ( comments_open() ) :
          echo ' <span class="meta-reply">';
            comments_popup_link(
              __('Leave a comment', 'ngothuong'),
              __('One comment', 'ngothuong'),
              __('% comments', 'ngothuong'),
              __('Read all comments', 'ngothuong')
             );
          echo '</span>';
        endif;
      echo '</div>';
    endif;
  }
}
/*
@ Hàm hiển thị nội dung của post type
@ Hàm này sẽ hiển thị đoạn rút gọn của post ngoài trang chủ (the_excerpt)
@ Nhưng nó sẽ hiển thị toàn bộ nội dung của post ở trang single (the_content)
@ thachpham_entry_content()
**/
if ( ! function_exists( 'ngothuong_entry_content' ) ) {
  function ngothuong_entry_content() { 
    // if ( ! is_single() ) :
    //   the_excerpt();
    // else :
      the_content(); 
      /*
       * Code hiển thị phân trang trong post type
       */
      $link_pages = array(
        'before' => __('<p>Page:', 'ngothuong'),
        'after' => '</p>',
        'nextpagelink'     => __( 'Next page', 'ngothuong' ),
        'previouspagelink' => __( 'Previous page', 'ngothuong' )
      );
      wp_link_pages( $link_pages );
    // endif; 
  }
}
//this function using to modify the link
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Read More</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );
// *function used to display thumbnail of content*/
  if(!function_exists('ngothuong_thumbnail')){
    function ngothuong_thumbnail($size){
      if( !is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image') ): ?>
        <figure class="post-thumbnail"><?php the_post_thumbnail($size);?></figure>
        <?php endif; ?>
    <?php }
  }
/*
@ Hàm hiển thị tag của post
@ thachpham_entry_tag()
**/
if ( ! function_exists( 'ngothuong_entry_tag' ) ) {
  function ngothuong_entry_tag() {
    if ( has_tag() ) :
      echo '<div class="entry-tag">';
      printf( __('%1$s', 'ngothuong'), get_the_tag_list() );
      echo '</div>';
    endif;
  }
}
function page_nav() {

      if( is_singular() )
        return;

      global $wp_query;

      /** Stop execution if there's only 1 page */
      if( $wp_query->max_num_pages <= 1 )
        return;

      $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
      $max   = intval( $wp_query->max_num_pages );

      /** Add current page to the array */
      if ( $paged >= 1 )
        $links[] = $paged;

      /** Add the pages around the current page to the array */
      if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
      }

      if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
      }

      echo '<div class="pagination-page"><ul>' . "\n";

      /** Previous Post Link */
      if ( get_previous_posts_link() )
        printf( '<li class="prev">%s</li>' . "\n", get_previous_posts_link('<i class="fa fa-caret-left" aria-hidden="true"></i>') );

      /** Link to first page, plus ellipses if necessary */
      if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
          echo '<li>…</li>';
      }

      /** Link to current page, plus 2 pages in either direction if necessary */
      sort( $links );
      foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
      }

      /** Link to last page, plus ellipses if necessary */
      if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
          echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
      }

      /** Next Post Link */
      if ( get_next_posts_link() )
        printf( '<li class="next">%s</li>' . "\n", get_next_posts_link('<i class="fa fa-caret-right" aria-hidden="true"></i>') );

      echo '</ul></div>' . "\n";

}
/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
	wp_enqueue_style( '_s-style', get_stylesheet_uri() );

	wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( '_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') );
    wp_enqueue_script( 'bootstrap-js' );
    wp_register_script( 'jquery-js', get_template_directory_uri() . '/js/jquery-1.9.1.min.js', array('jquery') );
    wp_enqueue_script( 'jquery-js' );
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap.min.css', 'all' );
    wp_enqueue_style( 'bootstrap-css' );
    wp_register_script( 'materialize-js', get_template_directory_uri() . '/js/materialize.min.js', array('jquery') );
    wp_enqueue_script( 'materialize-js' );
     wp_register_style( 'materialize-css', get_template_directory_uri() . '/materialize.css', 'all' );
    wp_enqueue_style( 'materialize-css' );
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );
//enqueues our locally supplied font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/font-awesome.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
