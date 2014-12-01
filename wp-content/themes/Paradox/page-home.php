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
                    <img style="max-width:379px; margin-top: -33px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-lg.png">
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
                    The engine has evolved exponentially since 1866, when Valvoline first introduced its motor oil. And ever since the Model-T began mass production in the 1920s, only one motor oil has consistently been recommended by name – Valvoline. Today the company continues to reinvent their products to keep engines running smoothly. Their line now includes NextGen—introduced in 2011 and made with 50% recycled oil—along with conventional, synthetics and synthetic blends because not every engine on the road today needs the same fuel, the same oil, the same fluids.
                </p>
                <p>
                    But their innovation doesn't stop at just oil products. Valvoline has taken their product line to the next level by introducing Premium Blue Diesel Exhaust Fluid in an effort to run the cleanest engines in history.
                </p>
                <p>
                    <b>Valvoline – reliable then, trusted today, evolving for tomorrow.</b>
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
                    Valvoline: The biggest brand in motor oil now brings you the best in Diesel Exhaust Fluid with Valvoline Premium Blue DEF. It’s no surprise the name synonymous with winning on the track would team with a proven, high performance company such as Victory Blue to distribute its DEF product. For better fuel efficiency, increased power, less engine wear and reduced maintenance, trust Valvoline Premium Blue DEF, now brought to you by Victory Blue.
                </p>
                <p>
                    <b>On the track or on the road, Valvoline wins.</b>
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
                    Diesel drives our nation, connecting products to manufacturers and consumers every day over millions of miles. That’s why drivers learn to trust brands such as Valvoline and Victory Blue for Diesel Exhaust Fluid to keep them running smoothly while complying with the strict emission standards set by the EPA — eliminating 90% of exhaust pollutants. As always, Valvoline's Premium Blue DEF product meets or exceeds all International Organization for Standardization requirements.
                </p>
                <p>
                    Drive cleaner. Drive with Victory.
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
                    America's biggest name in motor oil is also the most trusted name in Diesel Exhaust Fluid. Valvoline Premium Blue DEF is now brought to you by Victory Blue. As the exclusive manufacturer, packager and distributor of Valvoline’s brand of DEF, Victory Blue partners with Valvoline to supply its product across the nation through established channels. Both wholesale and retail customers can now enjoy reliable access to a trusted, premium product at competitive prices, keeping their Selective Catalytic Reduction systems running clean.
                </p>
                <p>
                    <b>Valvoline and Victory Blue – a partnership you can depend on.</b>
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