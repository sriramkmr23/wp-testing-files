<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
</head>
<body>

<?php if( get_field( 'include-hero-slider' ) == 'Yes' ) :?>
<div class="slidr">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
            <?php if( get_field('slider-image') ): ?>
                <img src="<?php the_field('slider-image'); ?>" />
            <?php endif; ?>
                <div class="carousel-caption">
                <h3>    
                <?php if( !empty( the_field( 'sliderheading' ) ) ): ?>
                   <?php echo the_field('sliderheading'); ?>
                <?php endif; ?>
                </h3>
                <?php if( !empty( the_field( 'slidertext' ) ) ): ?>
                   <p><?php echo the_field('slidertext'); ?></p>
                <?php endif; ?>
                </div>
      </div>

        <?php if(have_rows('add-another-slider')):?>

            <?php while(have_rows('add-another-slider')): the_row(); ?>

                <div class="item">
                    <img src="<?php echo get_sub_field( 'another-image' )[ 'url' ]; ?>"
                            class="figure-img img-fluid"
                            alt="<?php echo get_sub_field( 'another-image' )[ 'alt' ]; ?>">
                            <div class="carousel-caption">
                            <?php if( !empty( get_sub_field( 'slider-heading' ) ) ): ?>
                                <h3><?php echo get_sub_field('slider-heading'); ?></h3>
                            <?php endif; ?>
                            
                            <?php if( !empty( get_sub_field( 'slider-text' ) ) ): ?>
                                <p><?php echo get_sub_field('slider-text'); ?></p>
                            <?php endif; ?>
                            </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<?php endif; ?>
<script>
 //handle Bootstrap carousel slide event
 $(".carousel").attr("data-interval", "5006660");
</script>
</body>
</html>







