<?php 

/*
	Template name: Archive Exosomes
*/

?>


<?php get_header(); ?>

<div class="fl-content-full container">
	<div class="row">
		<div class="fl-content col-md-12 margin0">
			<div class="header-container">
				<h3>Exosomes Information </h3>
				<div class="intro-container">
					<h4 class="intro">Frequently Asked Questions   </h4>
				</div>
			</div>

			<artical class="exosomes-artical">
<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					$question = get_field('question');
					$answer = get_field('answer');
					 ?>
					<h3> </h3>
					<div class="faq-column">
					
						<h3><?php echo $question?></h3>
						<p><?php echo $answer ?></p>
						<h4><?php echo $highlight ?></h4>
					<?php the_content(); ?>
				</div>	
					
				<?php endwhile; ?>
				
			<?php endif; ?>		
			
			
		</div>
	</div>
</div>

<?php get_footer(); ?>
		


