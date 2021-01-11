<?php
/**
 * Outputs Genesis Custom Block called "Custom Notice"
 */

?>

<div class="gcb-block-notice">
	<p><?php block_field( 'notice-text' ); ?></p>
	<a href="<?php block_field( 'button-url' ); ?>"><?php block_field( 'button-text' ); ?></a>
</div>
