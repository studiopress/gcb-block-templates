<?php
/**
 * Outputs Genesis Custom Block called "Lead Magnet CTA".
 */

// Variables.
$background_alpha    = block_value( 'background-darken' ) / 100;
$text_color          = block_value( 'text-color' );
$background_color    = block_value( 'background-color' );
$background_image_id = block_value( 'background-image' );
$magnet_art          = block_value( 'magnet-art' );
$headline            = block_value( 'headline' );
$cta_text            = block_value( 'cta-text' );
$button_url          = block_value( 'button-url' );
$button_text         = block_value( 'button-text' );

?>
<style type="text/css">
	.gcb-dim::before {
		opacity: <?php echo esc_attr( $background_alpha ); ?>;
	}
</style>

<section class="gcb-block-lead-magnet gcb-dim" style="color: <?php echo esc_html( $text_color ); ?>; background-color: <?php echo esc_html( $background_color ); ?>; background-image: url('<?php echo esc_url( wp_get_attachment_image_url( $background_image_id, '' ) ); ?>');">
	<div class="gcb-block-lead-magnet--container gcb-stack-on-mobile">
		<figure>
			<?php echo wp_get_attachment_image( $magnet_art, '' ); ?>
		</figure>

		<div class="gcb-block-lead-magnet--content">
			<h2><?php echo esc_html( $headline ); ?></h2>
			<p><?php echo esc_html( $cta_text ); ?></p>
			<a class="button" href="<?php echo esc_url( $button_url ); ?>"><?php echo esc_html( $button_text ); ?></a>
		</div>
	</div><!-- end .gcb-block-lead-magnet--container -->
</section><!-- end .gcb-block-lead-magnet -->
