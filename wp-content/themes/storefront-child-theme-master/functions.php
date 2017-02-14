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

$cart_page_url = get_permalink( woocommerce_get_page_id( 'cart' ) );

  ?>
<div class="topHeader">
  <div class="row">
    <div class="title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?> ">
          <h1>Sunnies</h1>
      </a>

  </div>

    <a href="<?php echo $cart_page_url; ?>"><li>cart</li></a>

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








/*Classic and round are missing and wrong*/
?>


<div class="style-nav">
<div class="col-full">
  <div class="row">
  <?php
  if ( $count > 0 ){
      foreach ( $product_categories as $product_category ) {

          if ($product_category->name == 'oval'){
            echo '<a href="' . get_term_link( $product_category ) . '"><div class="productSvg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 131.5 42.5" class="category_img" ><title>Asset 9</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><ellipse class="cls-1" cx="29.75" cy="20.75" rx="28.25" ry="19.25"/><ellipse class="cls-1" cx="101.75" cy="21.75" rx="28.25" ry="19.25"/><line class="cls-1" x1="57.5" y1="17.5" x2="74.5" y2="17.5"/></g></g></svg></div></a>
';
          }
         if ($product_category->name == 'round'){
            echo '<a href="' . get_term_link( $product_category ) . '"><div class="productSvg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 137.62 44.45" class="category_img" ><title>Asset 2</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M73.12,15.88c-1.46,2.62,10,26,28,27s35-8,35-21-13-20-14-20S83.12-2.12,73.12,15.88Z"/><path class="cls-1" d="M64.5,15.88c1.46,2.62-10,26-28,27s-35-8-35-21,13-20,14-20S54.5-2.12,64.5,15.88Z"/><line class="cls-1" x1="64.62" y1="15.38" x2="73.62" y2="15.38"/></g></g></svg></div></a>
';
          }
         if ($product_category->name == 'classic'){
            echo '<a href="' . get_term_link( $product_category ) . '"><div class="productSvg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 131.5 42.5" class="category_img" ><title>Asset 9</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><ellipse class="cls-1" cx="29.75" cy="20.75" rx="28.25" ry="19.25"/><ellipse class="cls-1" cx="101.75" cy="21.75" rx="28.25" ry="19.25"/><line class="cls-1" x1="57.5" y1="17.5" x2="74.5" y2="17.5"/></g></g></svg></div></a>
';
          }
         if ($product_category->name == 'rectangular'){

           echo '<a href="' . get_term_link( $product_category ) . '"><div class="productSvg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 141.6 37.74" class="category_img" ><title>Asset 8</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M149.06,39.08"/><path class="cls-2" d="M140.06,34.08v-28s1-4-7-4h-52s-4-1-4,4v26s-1,4,5,4h54S140.06,37.08,140.06,34.08Z"/><path class="cls-2" d="M64.56,33.58v-28s1-4-7-4h-52s-4-1-4,4v26s-1,4,5,4h54S64.56,36.58,64.56,33.58Z"/><line class="cls-2" x1="77" y1="9.25" x2="64.56" y2="9.25"/></g></g></svg></div></a>
';

          }
         if ($product_category->name == 'aviator'){
            echo '<a href="' . get_term_link( $product_category ) . '"><div class="productSvg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126.07 54.57" class="category_img" ><title>Asset 3</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M23.73,2s-15,2-20,12-1,18,6,27,10,11,17,12,25-15,28-25S57.73-2,23.73,2Z"/><path class="cls-1" d="M102.33,2s15,2,20,12,1,18-6,27-10,11-17,12-25-15-28-25S68.33-2,102.33,2Z"/><line class="cls-1" x1="25.23" y1="1.52" x2="98.23" y2="1.52"/></g></g></svg></div></a>
';
          }
         if ($product_category->name == 'browline'){
             echo '<a href="' . get_term_link( $product_category ) . '"><div class="productSvg"><svg xmlns="http://www.w3.org/2000/svg" class="category_img" viewBox="0 0 147 44.55"><defs><style>.cls-1{fill:#fff;}.cls-1,.cls-2{stroke:#fff;stroke-miterlimit:10;}.cls-2{fill:none;}</style></defs><title>Asset 5</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M10.5,18.3h-4s-2-8-4-8H.5v-8h7s30-5,47,2,41,0,41,0,23-7,44-2h7v8s-4-2-6,8h-4s0-14-8-14-39-3-43,13h-4s-8-5-16,0h-4s-2-18-43-13C18.5,4.3,12.5,5.3,10.5,18.3Z"/><path class="cls-2" d="M9,27.8c.26,3.15,10,16,15,16s24,1,27-1,13-11,13-13,2-17-3-20-11-7-27-7-23,3-24,10S8,15.8,9,27.8Z"/><path class="cls-2" d="M138.69,27.8c-.26,3.15-10,16-15,16s-24,1-27-1-13-11-13-13-2-17,3-20,11-7,27-7,23,3,24,10S139.69,15.8,138.69,27.8Z"/></g></g></svg></div></a>
';
          }
         if ($product_category->name == 'oversized'){
            echo '<a href="' . get_term_link( $product_category ) . '"><div class="productSvg"><svg xmlns="http://www.w3.org/2000/svg" class="category_img" viewBox="0 0 127.68 54.28"class="category_img" ><title>Asset 7</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M55.5,16.5s-6-13-28-13-26,11-26,18,1,28,23,31,31-19,31-20S59.5,25.5,55.5,16.5Z"/><path class="cls-1" d="M72.37,14.5s6-13,27.9-13,25.91,11,25.91,18-1,28-22.92,31-30.89-19-30.89-20S68.39,23.5,72.37,14.5Z"/><line class="cls-1" x1="56" y1="18" x2="71" y2="18"/></g></g></svg></div></a>
';
          }
         if ($product_category->name == 'geometric'){
           echo '<a href="' . get_term_link( $product_category ) . '"><div class="productSvg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 137.62 44.45"class="category_img" ><title>Asset 2</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M73.12,15.88c-1.46,2.62,10,26,28,27s35-8,35-21-13-20-14-20S83.12-2.12,73.12,15.88Z"/><path class="cls-1" d="M64.5,15.88c1.46,2.62-10,26-28,27s-35-8-35-21,13-20,14-20S54.5-2.12,64.5,15.88Z"/><line class="cls-1" x1="64.62" y1="15.38" x2="73.62" y2="15.38"/></g></g></svg></div></a>
';
          }
          if ($product_category->name == 'square'){
            echo '<a href="' . get_term_link( $product_category ) . '"><div class="productSvg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145.5 47.5"class="category_img" ><title>Asset 6</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M17.5,2s-10,1-16,9V34s3,9,16,12h33s12-1,15-12V11s-5-9-18-9Z"/><path class="cls-1" d="M96,1.5s-10,1-16,9v23s3,9,16,12h33s12-1,15-12v-23s-5-9-18-9Z"/><line class="cls-2" x1="66" y1="17.5" x2="80" y2="17.5"/></g></g></svg></div></a>
  ';
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
   ?>
  </div>
</div>

</div>
<?php



}


function storefront_header_cart() {
  echo '';
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
