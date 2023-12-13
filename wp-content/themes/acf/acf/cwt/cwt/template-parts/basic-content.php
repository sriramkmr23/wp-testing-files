<?php if( get_sub_field( 'include-basic-items' ) == 'Yes' ) :?>
    <!-- Start Basic Spotlights -->
    <section class="basic-spotlights">
        <div class="container">

            <div class="row">

                <?php if(have_rows('basic-content-items')):?>

                    <?php while(have_rows('basic-content-items')): the_row(); ?>

                        <div class="col-md-4 text-left basic-spotlights-item">

                            <div class="basic-spotlights-item-content">
                                <?php if(!empty(get_sub_field('heading'))): ?>
                                    <h2 class="mb-3"><?php echo get_sub_field('heading'); ?></h2>
                                <?php endif; ?>

                                <?php if(!empty(get_sub_field('text'))): ?>
                                    <div class="text-left content"><?php echo get_sub_field('text'); ?></div>
                                <?php endif; ?>

                                <br />

                                <?php if( get_sub_field( 'button' ) ):

                                    $link = get_sub_field( 'button' );

                                    if( $link ):
                                        $link_target = $link['target'] ? $link['target'] : '_self';

                                    ?>
                                        <a href="<?php echo get_sub_field( 'button' )[ 'url' ]; ?>"
                                            target="<?php echo $link_target; ?>"
                                            class="btn btn-primary">
                                                <?php echo get_sub_field( 'button' )[ 'title' ]; ?>
                                        </a>
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