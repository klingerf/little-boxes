<?php
function remove_gallery_css()
{
  return "<div class='gallery'>";
}
add_filter('gallery_style', 'remove_gallery_css');

function fix_gallery_output($output)
{
  $output = preg_replace("%<br style=.*clear: both.* />%", "", $output);
  return $output;
}
add_filter('the_content', 'fix_gallery_output',11, 1);
?>
