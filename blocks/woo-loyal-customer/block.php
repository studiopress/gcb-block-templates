<?php
// Minimum number of previous purchases to see the coupon.
$min_previous_purchases = block_value( 'previous-purchases' );

// Current Customer Previous Purchases
$customer_orders = get_posts([
	'numberposts' => 10, // One order is enough.
	'meta_key'    => '_customer_user',
	'meta_value'  => get_current_user_id(),
	'post_type'   => 'shop_order', // WC orders post type.
	'post_status' => 'wc-completed', // Only orders with "completed" status.
	'fields'      => 'ids', // Return Ids "completed".
]);

// Number of Current Customer Purchases.
$num_customer_orders = count( $customer_orders );

if ( $num_customer_orders >= $min_previous_purchases ) { ?>
    <div class="gcb-loyal-customer">
        <div>
            <h2><?php block_field( 'title' ); ?></h2>
            <p><?php block_field( 'text' ); ?></p>
            <div>
                <button>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                        </svg>
                    </div>    
                    <?php block_field( 'coupon-code' ); ?>
                </button id="coupon_button">
                <label for="coupon_button">Click the coupon to copy the code.</label>
            </div>
        </div>
    </div>
    <?php };
