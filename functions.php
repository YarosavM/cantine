<?php
/****************************************************************
 * DO NOT DELETE
 ****************************************************************/
if ( get_stylesheet_directory() == get_template_directory() ) {
	define('ALETHEME_PATH', get_template_directory() . '/aletheme');
	define('ALETHEME_URL', get_template_directory_uri() . '/aletheme');
}  else {
	define('ALETHEME_PATH', get_theme_root() . '/fuerza/aletheme');
	define('ALETHEME_URL', get_theme_root_uri() . '/fuerza/aletheme');
}

require_once ALETHEME_PATH . '/init.php';

load_theme_textdomain( 'aletheme', get_template_directory() . '/lang' );
$locale = get_locale();
$locale_file = get_template_directory() . "/lang/$locale.php";
if ( is_readable($locale_file) )
	require_once($locale_file);

/****************************************************************
 * You can add your functions here.
 * 
 * BE CAREFULL! Functions will dissapear after update.
 * If you want to add custom functions you should do manual
 * updates only.
 ****************************************************************/

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );




/*STEP 1 - REMOVE ADD TO CART BUTTON ON PRODUCT ARCHIVE (SHOP) */
function remove_loop_button(){
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action('init','remove_loop_button');

/*STEP 2 -ADD NEW BUTTON THAT LINKS TO PRODUCT PAGE FOR EACH PRODUCT */
add_action('woocommerce_after_shop_loop_item','replace_add_to_cart');
function replace_add_to_cart() {

	global $product;
	$link = $product->get_permalink();

	if ( $product->get_sale_price() ) {
		if ( $price_html = $product->get_sale_price() ) : 

			echo '<a href="' . esc_url( $link ) . '" class="cell small-4 medium-4 large-4 prod-item-spec">'?>
			<button class="button black-button" type="submit" name="">
				$<?php echo $price_html ?>
			</button>
		</a>

	<?php endif;
}

else {
	if ( $price_html = $product->get_regular_price() ) : 

		echo '<a href="' . esc_url( $link ) . '" class="cell small-4 medium-4 large-4 prod-item-spec">'?>
		<button class="button black-button" type="submit" name="">
			$<?php echo $price_html ?>
		</button>
	</a>

<?php endif;
}

}


add_action('woocommerce_single_product_summary', 'm5_color_options', 11);
function m5_color_options() { ?>

	<div class="option-section" id="color-section">
		<div class="option-label">Color:</div>
		<ul class="no-bullet color-list option-list">

			<li class="color-red size-option-element" id="colorRed">
				<a href="#red"></a>
			</li>
			<li class="color-blue size-option-element" id="colorBlue">
				<a href="#blue"></a>
			</li>
			<li class="color-white active-option-order active-option size-option-element" id="colorWhite">
				<a href="#white"></a>
			</li>

		</ul>
	</div>

	<?php
}

add_action('woocommerce_single_product_summary', 'm5_size_options', 12);
function m5_size_options(){ ?>

	<div class="option-section" id="size-section">
		<div class="option-label">Size:</div>
		<ul class="no-bullet size-list option-list">
			<li id="size39" class="size-option-element">
				<a href="#39">39</a>
			</li>
			<li id="size40" class="size-option-element">
				<a href="#40">40</a>
			</li>
			<li id="size43" class="size-option-element">
				<a href="#43">43</a>
			</li>
			<li id="size44" class="size-option-element">
				<a href="#44">44</a>
			</li>
			<li class="active-option-order active-option size-option-element" id="size45">
				<a href="#45">45</a>
			</li>
		</ul>
	</div>

	<?php
}

/**
 * Remove product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['description'] ); 		// Remove the description tab

    return $tabs;
}

/**
 * Add Delivery tab
 */
add_filter( 'woocommerce_product_tabs', 'woo_cust_tab' );
function woo_cust_tab( $tabs ) {
	
	$tabs['delivery_tab'] = array(
		'title' 	=> __( 'Delivery', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_delivery_tab_content'
	);

	$tabs['return_tab'] = array(
		'title' 	=> __( 'Return & Garanties', 'woocommerce' ),
		'priority' 	=> 51,
		'callback' 	=> 'woo_return_tab_content'
	);

	return $tabs;
}
function woo_delivery_tab_content() {

	echo '<h2>Delivery</h2>';
	echo '<p>For all delivery contest visit <a href="">this page</a></p>';
}
function woo_return_tab_content() {

	echo '<h2>Return</h2>';
	echo '<p>For all return and garaties policy visit <a href="">this page</a></p>';
}

function woocommerce_template_product_description() { ?>

	<div class="option-section">
		<?php wc_get_template( 'single-product/tabs/description.php' ); ?>
	</div>
<?php }
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 35 );

// Change exerpt (short description) place after price zone, before custom options-blocks
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 7);




// Archieve product WOOF Filter Zone
function archieve_filter_widget_init() {
    register_sidebar(array(
        'name' =>   __( 'Filter sidebar', 'test theme' ),
        'id' =>     'filter_sidebar',
        'description' => __( 'This will appear on archive products page as filter sidebar', 'test theme' )
    ) );
} 
add_action( 'widgets_init', 'archieve_filter_widget_init' );