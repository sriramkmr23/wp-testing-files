<?php if( get_sub_field( 'include-text-cta-button' ) == 'Yes' ): ?>

<!-- Start Text CTA Button -->
<section id="text-cta-button" class="" >

  <div class="container">
    <div class="row">
      <?php if( !empty( get_sub_field( 'text-cta-button-heading' ) ) ): ?>
        <h1 class="text-center"><?php echo get_sub_field('text-cta-button-heading'); ?></h1>
      <?php endif; ?>

      <?php if( !empty( get_sub_field( 'text-cta-button-text' ) ) ): ?>
        <div class="py-1 content"><?php echo get_sub_field('text-cta-button-text'); ?></div>
      <?php endif; ?>

      <?php if( !empty( get_sub_field( 'text-cta-button' ) ) ): ?>
        <div class="text-center">
          <a href="<?php echo get_sub_field( 'text-cta-button' )[ 'url' ]; ?>"
            target="<?php echo get_sub_field( 'text-cta-button' )[ 'target' ]; ?>"
            class="btn btn-primary ml-2"><?php echo get_sub_field( 'text-cta-button' )[ 'title' ]; ?>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- End Text CTA Button -->

<?php endif; ?>