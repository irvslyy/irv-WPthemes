<?php get_header(); ?>

<?php 

if (have_posts()) {
	while (have_posts()) {
		the_post();?>
			<div class="container">
			<div class="row mt-5">
				<div class="col-md-6">
					<h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
            <p><a class="btn btn-secondary" href="<?php the_permalink(); ?>" role="button">View details &raquo;</a></p>
				</div>
			</div>
		</div>
	<?php } ?>
	
<?php }else{ ?>

<?php } ?>



<?php get_footer(); ?>