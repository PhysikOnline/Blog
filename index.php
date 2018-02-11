<?php 
get_header();
?>

<!-- START:menus -->
<div id="slide-out" class=" collection side-nav fixed with-header">
  <a href="/wordpress" class="collection-header"><h5>PhysikOnline</h5></a>
  <a href="/wordpress/category/fs-physik/" class="collection-item waves-effect"><i class="material-icons left">weekend</i>Fachschaft Physik</a>
  <a href="/wordpress/category/physikonline/" class="collection-item waves-effect"><i class="material-icons left">code</i>PhysikOnline</a>
  <a href="https://riedberg.tv" class="collection-item waves-effect"><i class="material-icons left">live_tv</i>RiedbergTV</a>
</div>

<nav>
  <div class="nav-wrapper">
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul>
      <li><a href="#!"><i class="material-icons left hide-on-small-only">web</i>Elearning</a></li>
      <li><a href="#!" class="active"><i class="material-icons left hide-on-small-only">message</i>Blog</a></li>
      <li><a href="#!"><i class="material-icons left hide-on-small-only">people</i>About</a></li>
      <li><a href="#!"><i class="material-icons left hide-on-small-only">contact_mail</i>Contact</a></li>
    </ul>
  </div>
</nav>
<!-- END:menus-->

 <!--MAIN-->       
<main>
<div class="row">
        <div class="col s12 m6">
           <h1>Projectvorstellungen</h1>
        </div>
    </div>
</main>




<!-- FOOTER --> 
 <footer class="page-footer">
    <div class="footer-copyright">  
        <div class="footainer">
            © 2017 PhysikOnline 
            <ul>
            <li><a href="<?php echo home_url(); ?>/wp-admin">Bearbeiten</a>
            </ul>
        </div>
    </div>
</footer>        

<?php get_footer(); ?>
