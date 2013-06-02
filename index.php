<?php get_header(); ?>

  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <div class="box bg1" id="post-<?php the_ID(); ?>">
        <?php if ( in_category('6') ) { ?>
          <h2><a href="<?php echo get_post_meta($post->ID, "external_link", true); ?>" rel="bookmark" title="<?php echo str_ireplace("<br />", ": ", $post->post_title); ?>"><?php the_title(); ?></a></h2>
          <?php } else { ?>
          <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php echo str_ireplace("<br />", ": ", $post->post_title); ?>"><?php the_title(); ?></a></h2>
        <?php } ?>
        <div class="entry">
          <?php if( !empty($post->post_excerpt) ) { the_excerpt(); } else { the_content(); } ?>
        </div>
      </div>

    <?php endwhile; ?>

  <?php else : ?>

    <div class="box">
      <h2>Not Found</h2>
      <p>Sorry, but you are looking for something that isn't here.</p>
      <?php include (TEMPLATEPATH . "/searchform.php"); ?>
    </div>

  <?php endif; ?>

<?php get_footer(); ?>
