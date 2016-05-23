<?php
/**
 * Template Name: Logistics Page
 *
 */
?><!DOCTYPE html>
	<?php get_header(); ?>

    <section id="<?php echo basename(get_permalink()) ?>" class="logistics content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				    <div class="container-fluid">
				        <div class="row">
				            <div class="col-md-12">
				                  <?php the_field('logistics_title') ?>
				            </div>
				        </div>
				    </div>

				    <div class="container-fluid white-bk" style="padding-top: 30px;">
				    	<div class="container">				    	
					        <div class="row">
					            <div class="col-md-12">
					                  <?php the_field('logistics_info') ?>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-md-12">
					         <div class="logistics-block"><a href="#logistics-tables">
	                				<img class="hidden-xs bottles"src="<?php the_field('logistics_img') ?>" alt=""/> </a>
	            			</div>
					            </div>
					        </div>				        
				        	
						    <div class="row">
							            	<div class="logistics-text logistics-table-wrap" id="logistics-table">
							                  <?php the_field('logistics_table') ?>

							            </div>
							        </div>
							 						    <div class="row">
							            <div class="col-md-12">
							            	<div style="padding-bottom:20px"> <?php the_field('logistics_ps') ?></div>
							                 
							            </div>
							        </div>
				    
				    
				    	</div>
				     </div>
					
					<?php the_field('logistics_content') ?>

 				<?php the_content(); ?>
				
				
				
				
			<?php endwhile;
		endif;
		?>
	</section>
<?php get_footer(); ?>

