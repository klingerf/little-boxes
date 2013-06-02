<?php wp_footer(); ?>
<div id="footer">
  <div class="box category bg1">
    <h2>Categories</h2>
    <p><?php wp_list_categories('title_li=&exclude=3,6,110&style=none'); ?></p>
  </div>
  <div class="box">
    <div><a href="http://wordpress.org"><img src="<?php bloginfo('template_directory'); ?>/images/wp.png" alt="WordPress" /></a></div>
    <p>Powered by <a href="http://wordpress.org/">WordPress</a>. <br />Protected by <a href="http://akismet.com/">Akismet</a>.</p>
    <div><a href="http://www.mediatemple.net/"><img src="<?php bloginfo('template_directory'); ?>/images/mt.png" alt="Media Temple" /></a></div>
    <p>Hosted by <a href="http://www.mediatemple.net/">Media Temple</a>.</p>
  </div>
  <div class="box">
    <div><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/us/">
    <img alt="Creative Commons License" src="<?php bloginfo('template_directory'); ?>/images/cc.png" /></a></div>
    <p align="left">This work is licensed under a:
    <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/us/">Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License</a></p>
    <p>&nbsp;</p>
    <p align="left"><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png" alt="Feed (RSS)" class="rss" /></a>Contact the man: <a href="mailto:klingerf@gmail.com">klingerf@gmail.com</a></p>
    <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
  </div>
</div><!-- End #footer -->
</div> <!-- End #container -->

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-344032-1";
urchinTracker();
</script>

</body>
</html>
