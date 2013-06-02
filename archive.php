<?php get_header(); ?>

<div id="category-list">

  <?php if (have_posts()) : ?>

    <?php /* If this is not a category archive */ if (!is_category()) { ?>

      <div class="box category bg1">

      <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

      <?php /* If this is a tag archive */ if (is_tag()) { ?>
        <h2>Tag: <?php single_tag_title(); ?></h2>

      <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2><?php the_time('F jS, Y'); ?></h2>

      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2><?php the_time('F, Y'); ?></h2>

      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2>Year: <?php the_time('Y'); ?></h2>

      <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h2>Author Archive</h2>

      <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2>Blog Archives</h2>

      <?php } ?>

      </div>

    <?php } ?>

    <?php while (have_posts()) : the_post(); ?>

      <div class="box bg1" id="post-<?php the_ID(); ?>">

        <?php if ( in_category('6') ) { // External link ?>

          <h2><a href="<?php echo get_post_meta($post->ID, "external_link", true); ?>" rel="bookmark" title="<?php echo str_ireplace("<br />", ": ", $post->post_title); ?>"><?php the_title(); ?></a></h2>

        <?php } else { // Internal link ?>

          <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php echo str_ireplace("<br />", ": ", $post->post_title); ?>"><?php the_title(); ?></a></h2>

        <?php } ?>

        <div class="entry">

          <?php if( !empty($post->post_excerpt) ) { the_excerpt(); } else { the_content(); } ?>

        </div>

      </div>

    <?php endwhile; ?>

  <?php else : ?>

    <?php include (TEMPLATEPATH . '/not_found.php'); ?>

  <?php endif; ?>

</div>

<?php get_footer(); ?>
