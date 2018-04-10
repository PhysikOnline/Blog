<?php
$page = get_query_var('view-page');
$category = get_query_var('view-category');

if ($page == 'blog')
{
    $is_blog_active = 'active';
}
else
{
    $is_blog_active = '';
}

if ($category == 'po') {
  $about_link = '#';
  $contact_link = '#';
} else {
  $about_link = get_bloginfo('wpurl') . '/about-fs/';
  $contact_link = get_bloginfo('wpurl') . '/contact-fs/'; 
}


?>
<nav>
  <div class="nav-wrapper">
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul>
        <li><a href="#!" class="<?php echo $is_blog_active; ?>"><i class="material-icons left hide-on-small-only">message</i>Blog</a></li>
      <li><a href=<?php echo $about_link;?>><i class="material-icons left hide-on-small-only">people</i>About</a></li>
      <li><a href=<?php echo $contact_link;?>><i class="material-icons left hide-on-small-only">contact_mail</i>Contact</a></li>
    </ul>
  </div>
</nav>