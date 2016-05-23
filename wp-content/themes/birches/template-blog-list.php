<?php
/**
 * Template Name: Blog List 
 *
 */
?><!DOCTYPE html>
	<?php get_header(); ?>

    <section id="<?php echo basename(get_permalink()) ?>" class="transparent content">
    				<div class="container">
    			<div class="row">
        			<div class="col-md-12">
            		<h1>Blog</h1>
					</div>
				</div>
			</div>	
			<div class="container">
    			<div class="row gutter-40">
  
    	
<?php
$debut = 0; //The first article to be displayed
?>
<?php while(have_posts()) : the_post(); ?>

<?php
$myposts = get_posts('numberposts=-1&offset=$debut');
foreach($myposts as $post) :
	setup_postdata($post);
?>
<?php setup_postdata($post); ?>
<div class="col-lg-4 col-lg-offset-2 col-md-6 col-md-offset-0">
	<div class="post-container2">
	<?php if ( has_post_thumbnail() ) : ?>
	<div class='blog-image'><?php the_post_thumbnail();?></div>
		<?php endif;?> 
	<div class='post-container'>
	<div class="data"><?php the_time('M d, Y') ?></div>
	<div class="blog-name"><?php the_title(); ?></div>
	<div class="blog-text"><?php the_excerpt(); ?></div>
     <a href="<?php the_permalink(); ?>" class="view-more">View More</a>
	</div>
	</div>
</div>


<?php endforeach; ?>
<?php endwhile; ?>
							<div class='page-padding-100px'>
				</div>
			</div>		
	</section>
<?php get_footer(); ?>

