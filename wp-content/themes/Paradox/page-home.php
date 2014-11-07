<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section class="masthead" id="top">
    <!-- <div class="background">&nbsp;</div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                    <?php // echo esc_attr(get_bloginfo('name', 'display')); ?>
                    <img style="max-width:294px; margin-top: -33px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-lg.png">
                </a>    
            </div>
            <div class="col-md-7 col-md-offset-1 text-center">
                <h1><?php echo get_field('headline') ?></h1>
                <p><?php echo get_field('subheading') ?></p>                                    
                <a href="#history" class="btn btn-lg btn-secondary"><i class="fa fa-arrow-circle-down fa-left"></i>Learn More</a>                
            </div>
        </div>
    </div>
</section>

<section class="block bg-light" id="history">           
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-left">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/car.png" alt="<?php bloginfo('description'); ?>">
            </div>            
            <div class="col-md-5">
                <h2>140 Years Under The Hood</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu felis, viverra ut mauris sit amet, hendrerit auctor nunc. Aenean enim nisi, egestas vel enim et, sollicitudin ornare ipsum. 
                </p>
                <p>
                    Donec vel enim at augue elementum convallis sed vel odio. Donec sodales metus urna, et aliquam libero feugiat et. Pellentesque tristique eget lacus congue suscipit. Aenean venenatis semper massa vel iaculis. Nunc risus mi, viverra sed orci nec.
                </p>
                <a href="#victory" class="btn btn-lg btn-secondary"><i class="fa fa-arrow-circle-down fa-left"></i>See More</a> 
            </div>
        </div>
    </div>
</section>

<section class="block bg-dark" id="victory">           
    <div class="container-fluid">
        <div class="row">            
            <div class="col-md-6 text-left">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/drag-racer.png" alt="<?php bloginfo('description'); ?>">
            </div>
            <div class="col-md-5">
                <h2>A Rich History of Capturing the Checkered Flag</h2>
                <p>
                    The best in motor oil now brings you the best in Diesel Exhaust Fluid. Arcu felis, viverra ut mauris sit amet, hendrerit auctor nunc. Aenean enim nisi, egestas vel enim et, sollicitudin ornare ipsum. 
                </p>
                <a href="#def" class="btn btn-lg btn-secondary"><i class="fa fa-arrow-circle-down fa-left"></i>See More</a> 
            </div>            
        </div>
    </div>
</section>

<section class="block bg-light" id="def">           
    <div class="container-fluid">     
        <div class="row">
            <div class="col-md-6 text-left">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/truck.png" alt="<?php bloginfo('description'); ?>">
            </div>
            <div class="col-md-5">
                <h2>The Backbone of America</h2>
                <p>
                    Diesel drives our nation... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu felis, viverra ut mauris sit amet, hendrerit auctor nunc. Aenean enim nisi, egestas vel enim et, sollicitudin ornare ipsum. Donec vel enim at augue elementum convallis sed vel odio. 
                </p>
                <a href="#future" class="btn btn-lg btn-secondary"><i class="fa fa-arrow-circle-down fa-left"></i>See More</a> 
            </div>
<!--             <div class="col-md-6 text-right">
                <img class="img-responsive" src="<?php // echo get_template_directory_uri(); ?>/assets/images/car.png" alt="<?php // bloginfo('description'); ?>">
            </div> -->
        </div>
    </div>
</section>

<section class="block bg-dark" id="future">           
    <div class="container-fluid">
        <div class="row">            
            <div class="col-md-5 text-right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/premium-blue.png" alt="<?php bloginfo('description'); ?>">
            </div>
            <div class="col-md-5">
                <h2>The Future of Valvoline</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu felis, viverra ut mauris sit amet, hendrerit auctor nunc. Aenean enim nisi, egestas vel enim et, sollicitudin ornare ipsum. 
                </p>
                <p>
                    Donec vel enim at augue elementum convallis sed vel odio. Donec sodales metus urna, et aliquam libero feugiat et. Pellentesque tristique eget lacus congue suscipit. Aenean venenatis semper massa vel iaculis. Nunc risus mi, viverra sed orci nec.
                </p>
                <a href="http://www.govictoryblue.com/order-online2/distributor-pricing/" class="btn btn-lg btn-secondary">Get Valvoline Premium Blue DEF</a> 
                <p>
                    <a href="#top">Back to top</a>
                </p>                
            </div>            
        </div>
    </div>
</section>

<?php get_footer(); ?> 