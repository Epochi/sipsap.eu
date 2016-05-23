<?php
/**
 * Template Name: Transparent Background
 *
 */
?><!DOCTYPE html>
	<?php get_header(); ?>

    <section id="<?php echo basename(get_permalink()) ?>" class="transparent content">
    		<div class="container">
    			<div class="row">
    				        			<div class="col-md-10 col-md-offset-1">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
 				<?php if ( is_single()) {
				    	    the_content();
				} else {
						the_excerpt();
				} ?>
				
				
				
				
			<?php endwhile;
		endif;
		?>
							</div>
						</div>
			</div>	
			<div class='page-padding-100px'>
	</section>
<?php get_footer(); ?>
