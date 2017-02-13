<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */


/*footer*/
function Storefront_credit() {
  ?>
  <div class="site-info">
    meme
  </div>
  <?php
}

function storefront_site_branding() {
  ?>

  <div class="row">
    <div class="title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?> ">
          <h1>Sunnies</h1>
      </a>
    </div>

  </div>

  <?php
}
add_filter( 'woocommerce_get_breadcrumb', '__return_false' );


/*header and navigation*/
function storefront_primary_navigation() {


  $args = array(
      'number'     => '0',
      'orderby'    => 'title',
      'order'      => 'ASC',
      'hide_empty' => '0',
      'include'    => ''
  );
  $product_categories = get_terms( 'product_cat', $args );
  $count = count($product_categories);


  if ( $count > 0 ){
      foreach ( $product_categories as $product_category ) {
          echo '<h4><a href="' . get_term_link( $product_category ) . '">    <img src="'. $product_category->image .'" alt="">' . $product_category->name . '</a></h4>';
          if ($product_category->name == 'circle'){
            echo '<svg class="category_img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 137.62 44.45"><defs><style>.cls-1{fill:none;stroke-miterlimit:10;stroke-width:3px;}</style></defs><title>Asset 2</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M73.12,15.88c-1.46,2.62,10,26,28,27s35-8,35-21-13-20-14-20S83.12-2.12,73.12,15.88Z"/><path class="cls-1" d="M64.5,15.88c1.46,2.62-10,26-28,27s-35-8-35-21,13-20,14-20S54.5-2.12,64.5,15.88Z"/><line class="cls-1" x1="64.62" y1="15.38" x2="73.62" y2="15.38"/></g></g></svg>';
          }

          $args = array(
              'posts_per_page' => -1,
              'tax_query' => array(
                  'relation' => 'AND',
                  array(
                      'taxonomy' => 'product_cat',
                      'field' => 'slug',
                      // 'terms' => 'white-wines'
                      'terms' => $product_category->slug
                  )
              ),
              'post_type' => 'product',
              'orderby' => 'title,'
          );


      }
  }


}
function storefront_skip_links() {
  echo '';
}
function storefront_secondary_navigation() {
  echo '';
}
function storefront_social_icons() {
  echo '';
}
function storefront_product_search() {
  echo '';
}
function storefront_primary_navigation_wrapper() {
  echo '';
}
function storefront_primary_navigation_wrapper_close() {
  echo '';
}
