<?php 

/*
Template Name: Single Exosomes
*/

?>

<?php get_header(); ?>

<div class="fl-content-full container">
	<div class="row">
		<div class="fl-content col-md-12">
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
					$size = "full";		
					 ?>
				
				<artical class="exosomes-artical">
					<div class="info-column">
					
						<h3><?php echo $headline?></h3>
						<p><?php echo $paragraph ?></p>
						<h4><?php echo $highlight ?></h4>
						<h3><?php echo $question ?></h3>
						<p><?php echo $answer ?></p>
						
					<?php the_content(); ?>
					
						<div class="exosome-images">
						<?php if($image) {
							echo wp_get_attachment_image( $image, $size);
						} ?>	

				</div>			
				<?php endwhile; ?>
				
			<?php endif; ?>
			
		</div>
	</div>
</div>

<?php get_footer(); ?>
