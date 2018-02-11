<?php
$page = get_query_var('view-page');
if ($page == 'blog')
{
    $is_blog_active = 'active';
}
else
{
    $is_blog_active = '';

}
?>
<nav>
  <div class="nav-wrapper">
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul>
      <li><a href="#!"><i class="material-icons left hide-on-small-only">web</i>Elearning</a></li>
      <li><a href="#!" class="<?php echo $is_blog_active; ?>"><i class="material-icons left hide-on-small-only">message</i>Blog</a></li>
      <li><a href="#!"><i class="material-icons left hide-on-small-only">people</i>About</a></li>
      <li><a href="#!"><i class="material-icons left hide-on-small-only">contact_mail</i>Contact</a></li>
    </ul>
  </div>
</nav>