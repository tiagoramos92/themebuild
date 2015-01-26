<?php
/*
Template Name: Special Layout
*/

get_header();

if(have_posts()) :
	while(have_posts()) : the_post(); ?>
	
	<article class="post page">
		<h2> <?php the_title(); ?></h2>

		<div class="info-box">
			<h4>Disclaimer Title</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod mollitia aliquid sed aspernatur molestiae a voluptate quae, accusantium perferendis minima vitae excepturi cum animi doloribus, eum pariatur sit illo accusamus?</p>
		</div>


		<?php the_content(); ?>
	</article>

	<?php endwhile;

	else :
		echo '<p>No content found</p>';
	endif;


get_footer();
?>	