<?php
// Variables
$number_of_products = block_value( 'number-of-products' );
$selected_product = block_value( 'product' );
$selected_product_id = $selected_product->ID;
$selected_product_categories = get_the_terms( $selected_product_id, 'product_cat' );
$selected_product_first_category_slug = $selected_product_categories[0]->slug;
$grid_cols = 3;
$product_tile_class = '';

if ( $number_of_products < 3 ) {
    $grid_cols = $number_of_products;
};

if ( 1 === $number_of_products ) {
    $product_tile_class = ' gcb-related-products__single-product';
};

// The Query
$the_query = new WP_Query( 
    array( 
        'post_type' => 'product',
        'posts_per_page' => $number_of_products,
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => $selected_product_first_category_slug,
            ),
        ),
    ) 
);

// The Loop
if ($the_query->have_posts()) {
    ?>
    <h2><?php block_field( 'title' ); ?></h2>
    <div class="gcb-related-products" style="grid-template-columns: repeat(<?php echo esc_attr( $grid_cols ); ?>, 1fr);">
    <?php while ($the_query->have_posts()) {
        $the_query->the_post();
        
        ?>

        <div class="gcb-related-products__tile<?php echo esc_attr( $product_tile_class ); ?>">
            <img src="<?php echo esc_attr( get_the_post_thumbnail_url() ); ?>" alt="">
            <div>
                <h4><?php the_title(); ?></h4>
                <p>
                <?php echo get_woocommerce_currency_symbol();
                 $product = wc_get_product(get_the_ID());
                 echo $product->get_price(); //will give raw price
                ?>
                </p>
                <a class="button" href="<?php the_permalink(); ?>">View Product</a>
            </div>
        </div>
        <?php
    }
    echo '</div>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>