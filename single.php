<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="box post" id="post-<?php the_ID(); ?>">

			<h5><?php the_time('m-d-Y') ?></h5>
			
			<h1><?php echo str_ireplace("<br />", " &bull; ", $post->post_title); ?></h1>
		
			<?php the_content(); ?>

		</div>
		
		<div id="comments">

			<?php comments_template(); ?>
			
		</div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

<?php get_footer(); ?>
