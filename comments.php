<?php // Do not delete these lines
  if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if (!empty($post->post_password)) { // if there's a password
    if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
      ?>

      <p class="nocomments">This post is password protected. Enter the password to view comments.</p>

      <?php
      return;
    }
  }

  /* This variable is for alternating comment background */
  $oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<?php if ('open' == $post->comment_status) : ?>

  <div class="box commentform">

  <h3>Leave a message</h3>

  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

  <?php if ( $user_ID ) : ?>

  <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

  <?php else : ?>

  <label for="author" class="required">Name</label>
  <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" />

  <label for="email" class="required">Email</label>
  <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" />

  <label for="url">Website</label>
  <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" />

  <?php endif; ?>

  <textarea name="comment" id="comment" tabindex="4" rows="20" cols="80"></textarea>

  <input name="submit" type="submit" id="submit" tabindex="5" value="Submit" />
  <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

  <?php do_action('comment_form', $post->ID); ?>

  </form>

</div>

<?php endif; ?>


<?php if ($comments) : ?>

  <?php foreach ($comments as $comment) : ?>

    <div class="box comment" id="comment-<?php comment_ID() ?>">

      <h5><a href="#comment-<?php comment_ID() ?>"><?php comment_date('m-d-Y') ?></a> <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?></h5>

      <h3><?php comment_author_link() ?> says:</h3>
      <?php if ($comment->comment_approved == '0') : ?>
      <p><em>Your comment is awaiting moderation.</em></p>
      <?php endif; ?>

      <?php comment_text() ?>

    </div>

  <?php endforeach; /* end for each comment */ ?>

<?php endif; ?>



