<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="box post" id="post-<?php the_ID(); ?>">

			<h5><?php the_time('m-d-Y') ?></h5>

			<h1><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h1>

			<div class="pic"><?php echo get_the_attachment_link($post->ID, true, array(690, 690)); ?></div>

		</div>
		
		<div id="comments">

			<?php comments_template(); ?>
			
		</div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

<?php get_footer(); ?>
