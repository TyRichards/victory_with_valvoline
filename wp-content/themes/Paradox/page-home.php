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
                    The engine has evolved exponentially since 1866, when <a href="http://valvoline.com" target="_blank">Valvoline</a> first introduced motor oil. And ever since the Model-T began mass production in the 1920s, only one motor oil company has consistently delivered innovative products – <a href="http://valvoline.com" target="_blank">Valvoline</a>. Today the company continues to reinvent their products to keep engines running smoothly. Their line now includes <a href="http://valvoline.com" target="_blank">Valvoline NextGen™</a> — introduced in 2011 and made with 50% recycled oil to reduce environmental impact—along with conventional, synthetics and synthetic blends because not all engines on the road today need the same fuel, the same oil, the same fluids.
                </p>
                <p>
                    But their innovation doesn’t stop at just lubricants. <a href="http://valvoline.com" target="_blank">Valvoline</a> has taken their product line to the next level by introducing <a href="http://valvoline.com" target="_blank">Valvoline Premium Blue</a> Diesel Exhaust Fluid in an effort to run the cleanest engines in history.
                </p>
                <p>
                    <b><a href="http://valvoline.com" target="_blank">Valvoline</a> – reliable then, trusted today, evolving for tomorrow.</b>
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
                    <a href="http://valvoline.com" target="_blank">Valvoline</a>: One of the most trusted brands in motor oil now brings you the best in Diesel Exhaust Fluid with <a href="http://valvoline.com" target="_blank">Valvoline Premium Blue</a> DEF. It’s no surprise the name synonymous with winning on the track would team with a proven, high performance company such as Victory Blue to distribute its DEF product. For better fuel efficiency, increased power, less engine wear and reduced maintenance, trust <a href="http://valvoline.com" target="_blank">Valvoline Premium Blue</a> DEF, now brought to you by Victory Blue.
                </p>
                <p>
                    <b>On the track or on the road, <a href="http://valvoline.com" target="_blank">Valvoline</a> wins.</b>
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
                    Diesel drives our nation, connecting products to manufacturers and consumers every day over millions of miles. That’s why drivers learn to trust brands such as <a href="http://valvoline.com" target="_blank">Valvoline</a> and Victory Blue for Diesel Exhaust Fluid to keep them running smoothly while complying with the strict emission standards set by the EPA — eliminating 90% of exhaust pollutants. <a href="http://valvoline.com" target="_blank">Valvoline Premium Blue</a> is considered to be the highest quality, ultra pure Diesel Exhaust Fluid and is compatible with all on and off highway SCR systems. 
                </p>
                <p>
                    Our product enables on-highway diesel engines to meet the EPA's near-zero NOx emissions levels required for 2010 and later. As always, <a href="http://valvoline.com" target="_blank">Valvoline Premium Blue</a> DEF meets or exceeds all International Organization for Standardization requirements and meets ISO 22241 specification. <a href="http://valvoline.com" target="_blank">Valvoline Premium Blue</a> DEF is certified by the American Petrolium Institute (API) and AdBlue®. 
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
                <h2>Valvoline Premium Blue DEF</h2>
                <p>
                    One of America's most recognized leaders in motor oil is also one of the most reliable names in DEF. <a href="http://valvoline.com" target="_blank">Valvoline Premium Blue</a> DEF is now brought to you by Victory Blue. As the exclusive manufacturer, packager and distributor of <a href="http://valvoline.com" target="_blank">Valvoline’s</a> brand of DEF, Victory Blue partners with <a href="http://valvoline.com" target="_blank">Valvoline</a> to supply quality product across the nation through established channels. Both wholesale and retail customers can now enjoy reliable access to a trusted, premium product at competitive prices, keeping their Selective Catalytic Reduction systems running clean.
                </p>
                <p>
                    <b><a href="http://valvoline.com" target="_blank">Valvoline</a> and Victory Blue – a partnership you can depend on.</b>
                </p>
                <a href="http://www.govictoryblue.com/distributors/" class="btn btn-secondary">Get Valvoline Premium Blue DEF</a> 
                 <a href="http://www.govictoryblue.com/consumers/" class="btn btn-secondary">Become a Distributor</a> 
                <br />
                <br />
                <a href="http://valvoline.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/valvoline-logo.png" alt="Valvoline Official Website"></a>
                <p>
                    <a href="#top">Back to top</a>
                </p>                
            </div>            
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?> 