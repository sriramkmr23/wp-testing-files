<?php if( get_sub_field( 'Include-product-solution' ) == 'Yes' ) :?>
    <!-- Start Basic Spotlights -->
    <section class="product-solution">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
            <?php if(!empty(get_sub_field('heading'))): ?>
                <h2><?php echo get_sub_field('heading'); ?></h2>
            <?php endif; ?>
            <?php if(!empty(get_sub_field('text'))): ?>
                <p><?php echo get_sub_field('text'); ?></p>
            <?php endif; ?></div>
                <?php if(have_rows('product-box')):?>

                    <?php while(have_rows('product-box')): the_row(); ?>

                        <div class="col-sm-3 productbox">
                            <div class="product-image">
                            <img src="<?php echo get_sub_field( 'image' )[ 'url' ]; ?>"
                                class="box-image"
                                alt="<?php echo get_sub_field( 'image' )[ 'alt' ]; ?>">

                            </div>
                            <div class="product-content-box">
                                <?php if(!empty(get_sub_field('heading'))): ?>
                                    <h3><?php echo get_sub_field('heading'); ?></h3>
                                <?php endif; ?>

                                <?php if(!empty(get_sub_field('text'))): ?>
                                    <div class="text-left content"><?php echo get_sub_field('text'); ?></div>
                                <?php endif; ?>


                                <?php if( get_sub_field( 'button' ) ):

                                    $link = get_sub_field( 'button' );

                                    if( $link ):
                                        $link_target = $link['target'] ? $link['target'] : '_self';

                                    ?>
                                        <div class="btn"><a href="<?php echo get_sub_field( 'button' )[ 'url' ]; ?>"
                                            target="<?php echo $link_target; ?>"
                                            class="btn btn-primary">
                                                <?php echo get_sub_field( 'button' )[ 'title' ]; ?>
                                        </a></div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>

        </div>
    </section>
    <!-- end Basic Spotlights -->

<?php endif; ?>