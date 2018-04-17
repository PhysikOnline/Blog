<?php
$page = get_query_var('view-page');
$category = get_query_var('view-category');

if ($page == 'blog')
{
    $is_blog_active = 'active';
    $is_about_us_active = '';
    $is_contact_active = '';
}
elseif ($page == 'about_us') {
  $is_blog_active = '';
    $is_about_us_active = 'active';
    $is_contact_active = '';
}
elseif ($page == 'contact') {
  $is_blog_active = '';
  $is_about_us_active = '';
  $is_contact_active = 'active';
}
else
{
    $is_blog_active = '';
    $is_about_us_active = '';
    $is_contact_active = '';
}

if ($category == 'po') {
  $blog_link = get_bloginfo('wpurl') . '/category/physikonline/';
  $about_link = get_bloginfo('wpurl') . '/about-po/';
  $contact_link = get_bloginfo('wpurl') . '/contact-po/'; 
} else {
  $blog_link = get_bloginfo('wpurl') . '/category/fs-physik/';
  $about_link = get_bloginfo('wpurl') . '/about-fs/';
  $contact_link = get_bloginfo('wpurl') . '/contact-fs/'; 
}


?>
<nav>
  <div class="nav-wrapper">
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul>
      <li><a href="https://elearning.physik.uni-frankfurt.de/">
      <i class="material-icons left hide-on-small-only">web</i>eLearning</a>
      </li>
      <li><a href="<?php echo $blog_link;?>" class="<?php echo $is_blog_active; ?>">
      <i class="material-icons left hide-on-small-only">message</i>Blog</a>
      </li>
      <li><a href=<?php echo $about_link;?> class="<?php echo $is_about_us_active; ?>">
      <i class="material-icons left hide-on-small-only">people</i>About</a>
      </li>
      <li><a href=<?php echo $contact_link;?> class="<?php echo $is_contact_active; ?>">
      <i class="material-icons left hide-on-small-only">contact_mail</i>Contact</a>
      </li>
    </ul>
  </div>
</nav>