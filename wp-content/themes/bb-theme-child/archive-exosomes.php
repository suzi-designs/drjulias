<?php 

/*
	The template is for displaying Exosomes Archive
*/

?>


<?php get_header(); ?>

<div class="fl-content-full container">
	<div class="row">
		<div class="fl-content col-md-12 margin0">
			<div class="header-container">
				<h3>Exosomes Information </h3>
				<div class="intro-container">
					<h4 class="intro">What if we could build new cells, and recycle diseased cells, with a single treatment? 
One simple office procedure that generates months of positive, permanent effects.   </h4>
				</div>
			</div>

			<artical class="exosomes-artical">
			<?php query_posts('posts_per_page=15&post_type=exosomes'); ?>
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					$headline = get_field('headline');
					$paragraph = get_field('paragraph');
					$highlight = get_field('highlight');
					$exosome_testimonial = get_field('exosome_testimonial');
					$question = get_field('question');
					$answer = get_field('answer');
					$image = get_field('image');	
					$size = "medium";				
					?>
					 <div class="info-column">
						<h3><?php echo $headline ?></h3>
						<p><?php echo $paragraph ?></p>
						<h4><?php echo $highlight ?></h4>
					<?php the_content(); ?>
					
						<div class="exosome-images">
							<?php if($image) {
								echo wp_get_attachment_image($image, $size);
							} ?>	
						</div>

					</div>	
				<?php endwhile; ?>
				
			<?php endif; ?>
			<h3 class="exosome-headline">Frequently Asked Questions </h3>
			
				
				<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					$question = get_field('question');
					$answer = get_field('answer');		
				 ?>
					 <div class="faq-column">
					 	<h3><?php echo $question ?></h3>
						<p><?php echo $answer ?></p>
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
				
			<?php endif; ?>
			
			<h3 class="exosome-headline">Contact us to schedule your discovery call today. </h3>
		</artical>

		
	
			
		</div>
	</div>
</div>

<?php get_footer(); ?>
