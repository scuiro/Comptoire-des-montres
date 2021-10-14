<?php
add_action( 'wp_head', 'tmpmela_customstyle' );
function tmpmela_customstyle() { ?>
<?php
$font_family1 = get_option('tmpmela_bodyfont');
$font_family1 = str_replace(' ', '+', $font_family1);
$font_family2 = get_option('tmpmela_navfont');
$font_family2 = str_replace(' ', '+', $font_family2);
$font_family3 = get_option('tmpmela_h1font');
$font_family3 = str_replace(' ', '+', $font_family3);
$font_family4 = get_option('tmpmela_h2font');
$font_family4 = str_replace(' ', '+', $font_family4);
$font_family5 = get_option('tmpmela_h3font');
$font_family5 = str_replace(' ', '+', $font_family5);
$font_family6 = get_option('tmpmela_h4font');
$font_family6 = str_replace(' ', '+', $font_family6);
$font_family7 = get_option('tmpmela_h5font');
$font_family7 = str_replace(' ', '+', $font_family7);
$font_family8 = get_option('tmpmela_h6font');
$font_family8 = str_replace(' ', '+', $font_family8);
$font_family9 = get_option('tmpmela_footerfont');
$font_family9 = str_replace(' ', '+', $font_family9);
// REMOVES DUPLICATE GOOGLE FONT CALL
$fonts_array = array($font_family1,$font_family2,$font_family3,$font_family4,$font_family5,$font_family6,$font_family7,$font_family8,$font_family9);
// REMOVES DUPLICATE GOOGLE FONT CALL
$fonts_array= array_unique($fonts_array);
foreach ($fonts_array as $key => $val) {
	if($val!='' && $val!='please-select' && $val!='Other+Fonts' && $val!='Open+Sans'){ ?>
		<link href='https://fonts.googleapis.com/css?family=<?php echo esc_attr($val); ?>' rel='stylesheet' type='text/css' />
	<?php }
}
// end REMOVES DUPLICATE GOOGLE FONT CALL
?>
<style type="text/css">
	<?php if( (get_option('tmpmela_h1font') == "Other+Fonts") || get_option('tmpmela_h1font') == "please-select"){  
	if	(get_option('tmpmela_h1font_other') != ""){ ?>
	h1 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h1font_other'))); ?>', Arial, Helvetica, sans-serif;		
	}	
	<?php } } elseif(get_option('tmpmela_h1font') != "" && get_option('tmpmela_h1font') != "please-select"){ ?>
	h1 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h1font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	<?php if (get_option('tmpmela_h1color') != ""){ ?>
	h1 {	
		color:#<?php echo esc_attr(get_option('tmpmela_h1color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('tmpmela_h2font') == "Other+Fonts") || get_option('tmpmela_h2font') == "please-select"){  
	if	(get_option('tmpmela_h2font_other') != ""){ ?>
	h2 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h2font_other'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tmpmela_h2font') != "" && get_option('tmpmela_h2font') != "please-select"){ ?>
	h2 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h2font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	<?php if(get_option('tmpmela_h2color') != ""){ ?>
	h2 {	
		color:#<?php echo esc_attr(get_option('tmpmela_h2color')); ?>;	
	}	
	<?php } ?>
	<?php 
	if( (get_option('tmpmela_h3font') == "Other+Fonts") || get_option('tmpmela_h3font') == "please-select"){  
	if	(get_option('tmpmela_h3font_other') != ""){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h3font_other'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tmpmela_h3font') != "" && get_option('tmpmela_h3font') != "please-select"){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h3font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	<?php if (get_option('tmpmela_h3color') != ""){ ?>
	h3 { color:#<?php echo esc_attr(get_option('tmpmela_h3color')); ?>;}
	<?php } ?>
	<?php if( (get_option('tmpmela_h4font') == "Other+Fonts") || get_option('tmpmela_h4font') == "please-select"){  
	if	(get_option('tmpmela_h4font_other') != ""){ ?>
	h4 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h4font_other'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tmpmela_h4font') != "" && get_option('tmpmela_h4font') != "please-select"){ ?>
	h4 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h4font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>	
	<?php if(get_option('tmpmela_h4color') != ""){ ?>
	h4 {	
		color:#<?php echo esc_attr(get_option('tmpmela_h4color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('tmpmela_h5font') == "Other+Fonts") || get_option('tmpmela_h5font') == "please-select"){  
	if	(get_option('tmpmela_h5font_other') != ""){ ?>
	h5 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h5font_other'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tmpmela_h5font') != "" && get_option('tmpmela_h5font') != "please-select"){ ?>
	h5 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h5font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	<?php if(get_option('tmpmela_h5color') != ""){ ?>
	h5 {	
		color:#<?php echo esc_attr(get_option('tmpmela_h5color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('tmpmela_h6font') == "Other+Fonts") || get_option('tmpmela_h6font') == "please-select"){  
	if	(get_option('tmpmela_h6font_other') != ""){ ?>
	h6 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h6font_other'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tmpmela_h6font') != "" && get_option('tmpmela_h6font') != "please-select"){ ?>
	h6 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h6font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php }  ?>	
	<?php 
	if(get_option('tmpmela_h6color') != ""){ ?>
	h6 {	
		color:#<?php echo esc_attr(get_option('tmpmela_h6color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('tmpmela_h3font') == "Other+Fonts") || get_option('tmpmela_h3font') == "please-select"){  
	if	(get_option('tmpmela_h3font_other') != ""){ ?>
	.home-service h3.widget-title {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h3font_other'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tmpmela_h3font') != "" && get_option('tmpmela_h3font') != "please-select"){ ?>
	.home-service h3.widget-title {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h3font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	a {
		color:#<?php echo esc_attr(get_option('tmpmela_link_color')); ?>;
	}
	a:hover, li.product a:hover .product-name, .entry-meta a:hover, .tabs a.current, a.active, .entry-thumbnail .comments-link a:hover, .cat-outer-block .cat_description a:hover, .post-detail a:hover, .current-cat a , .woocommerce ul.products li.product a:hover .product-name, .woocommerce-page ul.products li.product a:hover .product-name{
		color:#<?php echo esc_attr(get_option('tmpmela_hoverlink_color')); ?>;
	}
	.footer a, .site-footer a, .site-footer{
		color:#<?php echo esc_attr(get_option('tmpmela_footerlink_color')); ?>; 
	}
	.footer a:hover, .footer .footer-links li a:hover, .site-footer a:hover{
		color:#<?php echo esc_attr(get_option('tmpmela_footerhoverlink_color')); ?>;		 
	}
	.site-footer, .home.blog .site-footer
	{
		background-color:#<?php echo esc_attr(get_option('tmpmela_footer_bkg_color')) ; ?>;
		<?php if(get_option('tmpmela_footer_background_upload')!=''){ ?>
		background-image: url("<?php echo esc_url(get_option('tmpmela_footer_background_upload')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_footer_back_position'))); ?>;
		background-repeat:<?php echo esc_attr(get_option('tmpmela_footer_back_repeat')); ?>;
		background-attachment:<?php echo esc_attr(get_option('tmpmela_footer_back_attachment')); ?>;
		<?php } ?>
	}
	<?php 
	if( (get_option('tmpmela_h3font') == "Other+Fonts") || get_option('tmpmela_h3font') == "please-select"){  
	if	(get_option('tmpmela_h3font_other') != ""){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h3font_other'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tmpmela_h3font') != "" && get_option('tmpmela_h3font') != "please-select"){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h3font'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } ?>	
	<?php 
	if( (get_option('tmpmela_footerfont') == "Other+Fonts") || get_option('tmpmela_footerfont') == "Please-Select"){  
	if	(get_option('tmpmela_footerfont_other') != ""){ ?>
	.site-footer {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_footerfont_other'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tmpmela_footerfont') != "" && get_option('tmpmela_footerfont') != "please-select"){ ?>
	.site-footer {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_footerfont'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } ?>	
	.site-footer {
		background-color:<?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_footer_bkg_color'))); ?>; 
	}
	body,.outer-container {
		background-color:#<?php echo esc_attr(get_option('tmpmela_bkg_color')) ; ?> ;
		<?php if(get_option('tmpmela_background_upload')!=''){ ?>		
		background-image: url("<?php echo esc_attr(get_option('tmpmela_background_upload')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_back_position'))); ?>;
		background-repeat:<?php echo get_option('tmpmela_back_repeat'); ?>;
		background-attachment:<?php echo esc_attr(get_option('tmpmela_back_attachment')); ?>;
		<?php } ?>			
		color:#<?php echo esc_attr(get_option('tmpmela_bodyfont_color')); ?>;
	}
	.mega-menu ul li a{color:#<?php echo esc_attr(get_option('tmpmela_menu_text_color')); ?>; }
	.mega-menu ul li a:hover,.mega-menu .current_page_item > a{color:#<?php echo esc_attr(get_option('tmpmela_menu_texthover_color')); ?>; }
    .primary-sidebar a, .singleproduct-sidebar a {
        color: #<?php echo esc_attr(get_option('tmpmela_sidebar_text_color')); ?>;
    }
    .primary-sidebar a:hover, .singleproduct-sidebar a:hover {
        color: #<?php echo esc_attr(get_option('tmpmela_sidebar_text_hover_color')); ?>;
    }
	.site-header, .home.blog .site-header {
		background-color:<?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_header_bkg_color')),esc_attr(get_option('tmpmela_header_bkg_opacity'))); ?>;
		<?php if(get_option('tmpmela_header_background_upload')!=''){ ?>
		background-image: url("<?php echo esc_attr(get_option('tmpmela_header_background_upload')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_header_back_position'))); ?>;
		background-repeat:<?php echo esc_attr(get_option('tmpmela_header_back_repeat')); ?>;
		background-attachment:<?php echo esc_attr(get_option('tmpmela_header_back_attachment')); ?>;
		<?php } ?>
	}
	<?php 
	if( (get_option('tmpmela_bodyfont') == "Other+Fonts") || get_option('tmpmela_bodyfont') == "please-select"){  
	if	(get_option('tmpmela_bodyfont_other') != ""){ ?>
	body {	
		font-family: '<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_bodyfont_other'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tmpmela_bodyfont') != "" && get_option('tmpmela_bodyfont') != "please-select"){ ?>
	body {	
		font-family: '<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_bodyfont'))); ?>', Arial, Helvetica, sans-serif;	
	}
.widget button, .widget input[type="button"], .widget input[type="reset"], .widget input[type="submit"], a.button, button, .contributor-posts-link, input[type="button"], input[type="reset"], input[type="submit"], .button_content_inner a, .woocommerce #content input.button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce-page #content input.button, .woocommerce-page #respond input#submit, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce .wishlist_table td.product-add-to-cart a,.woocommerce .wc-proceed-to-checkout .checkout-button:hover,
.woocommerce-page input.button:hover,.woocommerce #content input.button.disabled,.woocommerce #content input.button:disabled,.woocommerce #respond input#submit.disabled,.woocommerce #respond input#submit:disabled,.woocommerce a.button.disabled,.woocommerce a.button:disabled,.woocommerce button.button.disabled,.woocommerce button.button:disabled,.woocommerce input.button.disabled,.woocommerce input.button:disabled,.woocommerce-page #content input.button.disabled,.woocommerce-page #content input.button:disabled,.woocommerce-page #respond input#submit.disabled,.woocommerce-page #respond input#submit:disabled,.woocommerce-page a.button.disabled,.woocommerce-page a.button:disabled,.woocommerce-page button.button.disabled,.woocommerce-page button.button:disabled,.woocommerce-page input.button.disabled,.woocommerce-page input.button:disabled, .loadgridlist-wrapper .woocount{
	background: #<?php echo get_option('tmpmela_button_bkg_color');?>;
	color:#<?php echo esc_attr(get_option('tmpmela_button_text_color')); ?>;
	font-family:<?php echo esc_attr(get_option('tmpmela_button_font_family')); ?>;
<?php  if(get_option('tmpmela_button_font_family') != "" && get_option('tmpmela_button_font_family') != "please-select"){ ?>
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_button_font_family'))); ?>', Arial, Helvetica, sans-serif;
	<?php } ?>
}
    .button_content_inner a:focus, .button_content_inner a:hover, .calloutarea_button a.button:focus, .calloutarea_button a.button:hover, .contributor-posts-link:hover, .loadgridlist-wrapper .woocount:hover:hover, .widget input[type="button"]:focus, .widget input[type="button"]:hover, .widget input[type="reset"]:focus, .widget input[type="reset"]:hover, .widget input[type="submit"]:focus, .widget input[type="submit"]:hover, .woocommerce #content input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce .wishlist_table td.product-add-to-cart a:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce-page #content input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce-page input.button:hover, a.button:focus, a.button:hover, button:focus, button:hover, input[type="button"]:focus, input[type="button"]:hover, input[type="reset"]:focus, input[type="reset"]:hover, input[type="submit"]:focus, input[type="submit"]:hover {
        background: #<?php echo get_option('tmpmela_buttonhover_bkg_color');?>;
    }
.widget input[type="button"]:hover,.widget input[type="button"]:focus,.widget input[type="reset"]:hover,.widget input[type="reset"]:focus,.widget input[type="submit"]:focus,a.button:hover,a.button:focus,button:hover,button:focus,.contributor-posts-link:hover,input[type="button"]:hover,input[type="button"]:focus,input[type="reset"]:hover,input[type="reset"]:focus,input[type="submit"]:focus,.calloutarea_button a.button:hover,.calloutarea_button a.button:focus,.button_content_inner a:hover,.button_content_inner a:focus,.woocommerce #content input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce-page #content input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce #content table.cart .checkout-button:hover,#primary .entry-summary .single_add_to_cart_button:hover,.woocommerce .wc-proceed-to-checkout .checkout-button, .loadgridlist-wrapper .woocount:hover{
	background: #<?php echo get_option('tmpmela_buttonhover_bkg_color');?>;
	color:#<?php echo esc_attr(get_option('tmpmela_button_hover_text_color')); ?>;
	}	
	<?php }  ?>		
</style>
<?php } ?>