<?php
	$bgImage = get_sub_field( 'full-width-image+text-background-image' );
	?>

<div id="home" class="parallex-img" style="background-image: url('<?php echo get_sub_field( 'full-width-image+text-background-image' )[ 'url' ]; ?>')">
<div class="background-overlay"></div>
	<div class="container">
		<div class="row">
		  <div class="overlay-text header_text text-center">
				<?php if(!empty(get_sub_field('full-width-image+text-heading'))): ?>
					<h2><?php echo get_sub_field('full-width-image+text-heading'); ?></h2>
				<?php endif; ?>
				
				<?php if(!empty(get_sub_field('full-width-image+text-text'))): ?>
					<p><?php echo get_sub_field('full-width-image+text-text'); ?></p>
				<?php endif; ?>

				<?php if( get_sub_field( 'full-width-image+text-button' ) ):
					$link = get_sub_field( 'full-width-image+text-button' );
					if( $link ):$link_target = $link['target'] ? $link['target'] : '_self';
					?>
						<div class="btn">
							<a href="<?php echo get_sub_field( 'full-width-image+text-button' )[ 'url' ]; ?>"
							target="<?php echo $link_target; ?>"
							class="btn btn-primary">
							<?php echo get_sub_field( 'full-width-image+text-button' )[ 'title' ]; ?>
							</a>
						</div>
					<?php endif; ?>
				<?php endif; ?>
		  </div>
		</div>  
	</div>
</div>





