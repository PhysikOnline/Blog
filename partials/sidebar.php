<?php
$category = get_query_var('view-category');

if ($category == 'po')
{
  $title = 'PhysikOnline';
  $is_po_active = 'active';
  $is_fs_active = '';
}
elseif ($category == 'fs')
{
  $title = 'Fachschaft Physik';
  $is_po_active = '';
  $is_fs_active = 'active';
}
?>
<div id="slide-out" class=" collection side-nav fixed with-header">
  <a href="/wordpress" class="collection-header"><h5><?php echo $title; ?></h5></a>
  <a href="/wordpress/category/fs-physik/" class="collection-item waves-effect <?php echo $is_fs_active; ?>"><i class="material-icons left">weekend</i>Fachschaft Physik</a>
  <a href="/wordpress/category/physikonline/" class="collection-item waves-effect <?php echo $is_po_active; ?>"><i class="material-icons left">code</i>PhysikOnline</a>
  <a href="https://riedberg.tv" class="collection-item waves-effect"><i class="material-icons left">live_tv</i>RiedbergTV</a>
  <a href="https://physikonline.uni-frankfurt.de/portal/project/url-shorter" class="collection-item waves-effect"><i class="material-icons left">insert_link</i>URL-Shortener</a>
  <a href="https://podcast-wiki.physik.uni-frankfurt.de" class="collection-item waves-effect"><i class="material-icons left">voice_chat</i>Podcast-Wiki</a>
</div>
