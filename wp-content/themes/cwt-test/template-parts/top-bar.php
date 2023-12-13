<?php if( get_field( 'include-top-bar','option') == 'Yes' ): ?>
 <!-- Start embed content -->
 <div class="top-bar">
   <div class="container">  
      <div class="row">
         <div class="col-md-5 mt-3">
				<?php if( have_rows( 'social-media', 'option' ) ): ?>
					<div class="socials-media">
						<ul class="list-inline social-media">

							<?php while( have_rows( 'social-media', 'option' ) ): the_row(); ?>

								<!-- Facebook -->
								<?php if(get_sub_field('facebook-link')) : ?>
									<li class="list-inline-item"><a href="<?php echo get_sub_field('facebook-link', 'option'); ?>" class="flexbox--center" target="_blank"><span class="fab fa-facebook-f fb-icon flexbox flexbox--center"></span></a></li>
								<?php endif; ?>

								<!-- Twitter -->
								<?php if(get_sub_field('twitter-link')) : ?>
									<li class="list-inline-item"><a href="<?php echo get_sub_field('twitter-link', 'option'); ?>" class="text-hidden" target="_blank"><span class="fab fa-twitter flexbox flexbox--center"></span></a></li>
								<?php endif; ?>
                <!-- youtube -->
								<?php if(get_sub_field('youtube-link')) : ?>
									<li class="list-inline-item"><a href="<?php echo get_sub_field('youtube-link', 'option'); ?>" class="text-hidden flexbox flexbox--center" target="_blank"><span class="fab fa-youtube fb-icon flexbox flexbox--center"></span></a></li>
								<?php endif; ?>

                <!-- Instagram -->
								<?php if(get_sub_field('instagram-link')) : ?>
									<li class="list-inline-item"><a href="<?php echo get_sub_field('instagram-link', 'option'); ?>" class="text-hidden flexbox flexbox--center" target="_blank"><span class="fab fa-instagram fb-icon flexbox flexbox--center"></span></a></li>
								<?php endif; ?>

                <!-- Linkedin -->
								<?php if(get_sub_field('linkedin-link')) : ?>
									<li class="list-inline-item"><a href="<?php echo get_sub_field('linkedin-link', 'option'); ?>" class="text-hidden flexbox flexbox--center" target="_blank"><span class="fab fa-linkedin fb-icon flexbox flexbox--center"></span></a></li>
								<?php endif; ?>






							<?php endwhile; ?>

						</ul>
					</div>

				<?php endif; ?>
			</div>




      </div>
   </div>
</div>
 <!-- end embed content -->
<?php endif; ?>