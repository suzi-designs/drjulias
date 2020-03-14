<?php get_header(); ?>

<div class="fl-content-full container">
	<div class="row">
		<div class="fl-content col-md-12">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					$paragraph = get_field('paragraph');
					$highlight = get_field('highlight');
					$exosome_testimonial = get_field('exosome_testimonial');
					
/* 					get_template_part( 'content', 'page' ); */ ?>
					
				<artical class="info">
				<div class="info-container">
					<h3><?php the_title(); ?></h3>
					<p><?php echo $paragraph ?></p>
					<h4><?php echo $highlight ?></h4>
				</div>			
				<?php endwhile; ?>
				
			<?php endif; ?>
			
		</div>
	</div>
</div>

<?php get_footer(); ?>
