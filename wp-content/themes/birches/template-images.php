<?php
/**
 * Template Name: Gallery Page
 *
 */
?><!DOCTYPE html>
	<?php get_header(); ?>

    <section id="<?php echo basename(get_permalink()) ?>" class="gallery content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="container-fluid">
    			<div class="row">
        			<div class="col-md-12">
            		<?php the_field('gallery_title') ?>
					
					</div>
				</div>
			</div>	
		<div class="container-fluid white-bk">		
			<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<?php the_field('gallery_images') ?>
    				</div>
    			</div>
			</div>	
		</div>
    	<?php if( get_field('gallery_title_2') ): ?>
    	
    	<div class="container-fluid">
    			<div class="row">
        			<div class="col-md-12">
            		<?php the_field('gallery_title_2') ?>
					
					</div>
				</div>
			</div>	
		<div class="container-fluid white-bk">		
			<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<?php the_field('gallery_images_2') ?>
    				</div>
    			</div>
			</div>	
		</div>		
    	
    	<?php endif;?>	
 				<?php the_content(); ?>
				
				
				
				
			<?php endwhile;
		endif;
		?>
	</section>
<?php get_footer(); ?>

