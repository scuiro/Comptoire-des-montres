<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 * @author         TemplateMela
 * @version        Release: 1.0
 */
/**  Set Default options : Theme Settings  */
function tmpmela_set_default_options_child()
{
	add_option("tmpmela_logo_image", get_stylesheet_directory_uri()."/images/megnor/logo.png"); // set logo image	
	add_option("tmpmela_mob_logo_image", get_stylesheet_directory_uri()."/images/megnor/logo.png"); // set mobile logo image
	add_option("tmpmela_bkg_color", "FFFFFF"); // background color    
	
	/*Background Settings*/
	add_option("tmpmela_bkg_color","FFFFFF");//Body Background Color
	add_option("tmpmela_bodyfont_color","000000"); // Body Font Color 
	
	/*Button Settings*/
	add_option("tmpmela_button_bkg_color","D19F49"); //Button Background Color
	add_option("tmpmela_button_text_color","FFFFFF"); //Buttons Text Color
	add_option("tmpmela_buttonhover_bkg_color","000000"); // Button Background hover Color
	add_option("tmpmela_button_hover_text_color","FFFFFF"); //Buttons hover Text Color
	
	/*  Header Settings  */	
	add_option("tmpmela_header_bkg_color","212121"); // Header Background Color
	
	/*  Navigation Menu bar & Text Setting  */
	add_option("tmpmela_menu_text_color","FFFFFF"); // Menu text color
	add_option("tmpmela_menu_texthover_color","D19F49"); //  Menu text hover color
	
	/*  Content Settings  */
	add_option("tmpmela_hoverlink_color","D19F49"); // link hover color
	
    /*  Sidebar setting for other pages  */
    add_option("tmpmela_sidebar_text_color", "838383"); // Sidebar Text color
    add_option("tmpmela_sidebar_text_hover_color", "D19F49"); // Sidebar Text Hover color
	
	/*  Footer Settings  */
	add_option("tmpmela_footer_background_upload", " ");//footer background image
	add_option("tmpmela_footer_bkg_color","212121"); //Footer Background Color
	add_option("tmpmela_footerlink_color","FFFFFF"); // footer background color
	add_option("tmpmela_footerhoverlink_color","D19F49"); //  Footer Link Hover Color 
}	
add_action('init', 'tmpmela_set_default_options_child');
function tmpmela_child_styles() {
    wp_enqueue_style( 'starbella-child-style', get_template_directory_uri(). '/style.css' );	
}
add_action( 'wp_enqueue_scripts', 'tmpmela_child_styles' );
/********************************************************
**************** One Click Import Data ******************
********************************************************/
if ( ! function_exists( 'tmpmela_sampledata_import_files' ) ) :
function tmpmela_sampledata_import_files() {
    return array(
		 array(
            'import_file_name'             => 'starbella_jewellery',
            'local_import_file'            => trailingslashit( get_stylesheet_directory() ) . 'demo-content/demo8/starbella_jewellery.wordpress.xml',
            'local_import_customizer_file' => trailingslashit( get_stylesheet_directory() ) . 'demo-content/demo8/starbella_jewellery_customizer_export.dat',
			'local_import_widget_file'     => trailingslashit( get_stylesheet_directory() ) . 'demo-content/demo8/starbella_jewellery_widgets_settings.wie',
            'import_notice'                => esc_html__( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'starbella' ),
        ),
		);
}
add_filter( 'pt-ocdi/import_files', 'tmpmela_sampledata_import_files' );
endif;

if ( ! function_exists( 'tmpmela_sampledata_after_import' ) ) :
function tmpmela_sampledata_after_import($selected_import) {
        //Set Menu
        $header_menu = get_term_by('name', 'MainMenu', 'nav_menu');
        $top_menu = get_term_by('name', 'Header Top Links', 'nav_menu');
		$footer_menu = get_term_by('name', 'MainMenu', 'nav_menu');
		set_theme_mod( 'nav_menu_locations' , array( 
             'primary'   => $header_menu->term_id,
             'header-menu'   => $top_menu->term_id ,
             'footer-menu'   => $footer_menu->term_id
		 ) 
        );

	   //Import Revolution Slider
       if ( class_exists( 'RevSlider' ) ) {
           $slider_array = array(
              get_stylesheet_directory()."/demo-content/demo8/tmpmela_homeslider_jewellery.zip",
           );
 
           $slider = new RevSlider();
        
           foreach($slider_array as $filepath){
             $slider->importSliderFromPost(true,true,$filepath);  
           }
           echo esc_html__( 'Slider processed', 'starbella' );
      }
	 
		  //Set Front page and blog page
       $page = get_page_by_title( 'Home');
       if ( isset( $page->ID ) ) {
        update_option( 'page_on_front', $page->ID );
        update_option( 'show_on_front', 'page' );
}
	   $post = get_page_by_title( 'Blog');
       if ( isset( $page->ID ) ) {
        update_option( 'page_for_posts', $post->ID );
        update_option( 'show_on_posts', 'post' );
       }
}
add_action( 'pt-ocdi/after_import', 'tmpmela_sampledata_after_import' );
endif;

add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

function change_existing_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'MAD': $currency_symbol = ' Dhs'; break;
     }
     return $currency_symbol;
}
?>