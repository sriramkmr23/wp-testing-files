<?php if( get_sub_field( 'include-brand-section' ) == 'Yes' ): ?>
 <!-- Start embed content -->
 <section id="embed-content">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  text-center">
            <?php if( !empty( get_sub_field( 'brand-heading' ) ) ): ?>
              <h1><?php echo get_sub_field('brand-heading'); ?></h1>
            <?php endif; ?>
            <?php if( !empty( get_sub_field( 'brand-text' ) ) ): ?>
              <div class="py-1 content"><?php echo get_sub_field('brand-text'); ?></div>
            <?php endif; ?>
         </div>
      </div>
   </div>
 </section>
 <!-- end embed content -->
<?php endif; ?>