<?php get_header(); ?>

<div id="category-list">

  <?php if (have_posts()) : ?>

    <div class="box category bg1">

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

    <?php /* If this is a category archive */ if (is_category()) { ?>
      <h2>Category: <?php single_cat_title(); ?></h2>
      <p><?php wp_list_categories('title_li=&exclude=3,6&style=none'); ?></p>

    <?php /* If this is a tag archive */ } elseif (is_tag()) { ?>
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

    <?php while (have_posts()) : the_post(); ?>
      <div class="box post" id="post-<?php the_ID(); ?>">
        <h5><?php the_time('m-d-Y') ?></h5>
        <h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo str_ireplace("<br />", " &bull; ", $post->post_title); ?></a></h1>

        <?php the_content() ?>

        <p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

      </div>

    <?php endwhile; ?>

  <?php else : ?>

    <div class="box">
      <h2>Not Found</h2>
      <p>D'oh &mdash; you seem to be looking for something that can't be found.</p>
    </div>

  <?php endif; ?>

</div>

<?php get_footer(); ?>
