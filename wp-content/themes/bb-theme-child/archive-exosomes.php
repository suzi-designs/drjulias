<?php 

/*
Template file for displaying archive exosomes
*/

?>


<?php get_header(); ?>

<div class="fl-content-full container">
	<div class="row">
		<div class="fl-content col-md-12">
			<div class="header-container">
				<h3><?php the_title(); ?></h3>
				<div class="intro-container">
					<h4 class="intro">What if we could build new cells, and recycle diseased cells, with a single treatment? 
One simple office procedure that generates months of positive, permanent effects.   </h4>
				</div>
			</div>

	
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					$paragraph = get_field('paragraph');
					$highlight = get_field('highlight');
					$exosome_testimonial = get_field('exosome_testimonial');
					?>
				<artical class="info">
					
						<p><?php echo $paragraph ?></p>
						<h4><?php echo $highlight ?></h4>
					</div>			
				<?php endwhile; ?>
				
			<?php endif; ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
