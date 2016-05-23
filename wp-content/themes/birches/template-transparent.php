<?php
/**
 * Template Name: Transparent Background
 *
 */
?><!DOCTYPE html>
	<?php get_header(); ?>

    <section id="<?php echo basename(get_permalink()) ?>" class="transparent content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="container">
    			<div class="row">
        			<div class="col-md-10 col-md-offset-1">
            		<?php the_field('transparent_title') ?>
					
					<?php the_field('transparent_content') ?>
					<div class='page-padding-100px'>
					</div>
				</div>
			</div>
		</div>	
 				<?php the_content(); ?>
				
				
				
				
			<?php endwhile;
		endif;
		?>
	</section>
<?php get_footer(); ?>

