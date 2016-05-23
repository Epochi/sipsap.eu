<?php
/**
 * Template Name: Home Default 
 *
 */
?><!DOCTYPE html>
	<?php get_header(); ?>

    <section id="index" class="index content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
	    <div class="container-fluid">
        	<div class="row">
 				<div class="col-md-12 hidden-xs" style="padding-left: 0; padding-right: 0; margin-top: -1px; margin-bottom: -1px;">
                	<div class="slides js-slides">
						<?php 
						$dir = "wp-content/uploads/slideshow/*.jpg";
						$img = glob($dir);
						echo "<div class='slide js-slide'><img src='$img[0]' class='img-responsible'/></div>";
						for ($i=1; $i<count($img); $i++)
                            {	
                            $num = $img[$i];
                            echo "<div class='slide js-slide collapse'><img src='$num' class='img-responsible'/></div>";
	                                            ;}
	                           ?>
                <a class="slideshow-readmore" href="/about-sip-sap/">
                    <div>
                        <div>Read</div>
                        <div>about Birch Tree Sap</div>
                    </div>
                </a>
                <div class="slideshow-text-wrap">
                    <div class="slideshow-text-2 tahoma">
                        <span style="display: inline-block;">
                        <?php the_field('home_slideshow_text') ?>
                        </span>
                    </div>
                </div>
                <div class="js-prev button-left">
                    <!--  <img class="slide-left"
                                                                      src="wp-content/themes/eko/img/icon-left.png"
                                                                      alt=""/>--></div>
                <div class="js-next button-right">
                    <!-- <img class="slide-left"
                                                                       src="wp-content/themes/eko/img/icon-right.png" 
                                                                       alt=""/>--></div>
                
                </div>
                </div>
                <div class="col-md-12 visible-xs" style="background: #fff;">
                    <div class="birch-tree-sap-title-xs">Birch <b class="color">Tree</b> Sap</div>
                    <a href="/about-sip-sap/"><img class="logistics-read-more-xs img-responsive"
                                                 src="<?php echo get_template_directory_uri(); ?>/img/read_more.png"/></a>
                
                </div>
                <div class="col-md-12" style="background-color: white;">
                    <div class="clean-title">
                        <?php the_field( 'home_sakiniai') ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="divider"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div id="birchwater" class="row xs-background-position sm-background-position" style="background-color: white;">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                    <?php the_field("home_list") ?>
                </div>
            </div>
            <div class="row divider-secondary">
            </div>
        </div>
<div class="container-fluid" style="background:#fff; margin-bottom: -1px;">
        <div  class="row">
        <div class="col-md-12">
              <?php the_field('home_product_title') ?>
        </div>
    </div>
</div>
  <div class="container-fluid" style="background:#fff;">
    <div class="row">
        <div class="col-md-12">
            <img class="img-responsive img-all" src="../wp-content/uploads/our_product/visi.jpg">
        </div>
    </div>    
         <?php the_field('home_product') ?>
    </div>
    
<div class="container-fluid" style="background:#fff;margin-top:-1px">
    <div class="row" style="text-align:center;padding:5vh 0 200px;">
        <a href="/labels/" class="greenHover">
            <div class="col-md-4">
                     <h2>Go To Product Labels</h2>
            </div>
        </a>
         <a href="/logistics-packaging/" class="greenHover">
            <div class="col-md-4">
                     <h2>Go To Logistics &amp Packaging</h2>
            </div>
        </a>
        <a href="/certificates-and-specifications/" class="greenHover">
            <div class="col-md-4">
                <h2>Go To Product Certificates and Specifications</h2>
            </div>
        </a>
    </div>
</div>

    <div class="divider"></div>
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-12 white-bk">
                     <?php the_field('home_video_title') ?>
                </div>
            </div>
    </div>

<div class="container-fluid">
        <div class="row">
    

    <div class="video-image" style="position: relative;">
       
        <img style="width: 100%; height: auto;" src=" <?php the_field('home_video_static') ?>"/>
        <div class="padding-border-video js-video-button" style="position: absolute; left:0; right:0; top:0; bottom: 0; z-index: 1;">
            <div>
                <img class="play-margin-top"
                     src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt=""/>
            </div>

            </div>
        </div>
        </div>
    </div>
    <div class="youtube-container">
<script type="text/html" class="js-video-template">
        <iframe class="youtube" width="100%" height="345"
            src="<?php the_field('home_video_link') ?>">
    </iframe>
</script>
    </div>
<div class="clearfix"></div>
<div class="height-100px" style="background: white;"></div>

			
 <?php the_content(); ?>

				
			
				
				
				
				
				
				
				
			<?php endwhile;
		endif;
		?>
</section>
                <?php get_footer(); ?>

