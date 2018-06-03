<?php
global $wp;
$url = home_url( $wp->request );

function when_given($link) {
  if (isset($link)) {
    return $link;
  } else {
    return '';
  }
}

if ($url == home_url() . '/fs-home') {
  $fs_home = 'active';
} elseif ($url == home_url() . '/about-fs') {
  $fs_about = 'active';
} elseif ($url == home_url() . '/contact-fs') {
  $fs_contact = 'active';
} elseif ($url == home_url() . '/erstsemester') {
  $erstsemester = 'grey lighten-3';
} elseif ($url == home_url() . '/schuler') {
  $schuler = 'grey lighten-3';
} elseif ($url == home_url() . '/category/fs-physik') {
  $fs_blog = 'grey lighten-3';
} elseif ($url == home_url() . '/studiengang') {
  $studiengang = 'grey lighten-3';
} elseif ($url == home_url() . '/linksammlung') {
  $linksammlung = 'grey lighten-3';
} elseif ($url == home_url() . '/faq') {
  $faq = 'grey lighten-3';
} elseif ($url == home_url() . '/phifa') {
  $phifa = 'grey lighten-3';
} elseif ($url == home_url() . '/eev') {
  $eev = 'grey lighten-3';
} elseif ($url == home_url() . '/hsk') {
  $hsk = 'grey lighten-3';
} elseif ($url == home_url() . '/po-home') {
  $po_home = 'active';
} elseif ($url == home_url() . '/projekte') {
  $projekte = 'active';
} elseif ($url == home_url() . '/category/physikonline') {
  $po_blog = 'active';
}

$category = get_query_var('view-category');

if ($category == 'po') {
    $title = 'PhysikOnline';
    $is_po_active = 'active';
    $is_fs_active = '';
    $theme_color = '';
    $is_index_active = '';
    $home_url = home_url() . '/po-home';
} elseif ($category == 'fs') {
    $title = 'Fachschaft Physik';
    $is_po_active = '';
    $is_fs_active = 'active';
    $theme_color = 'yellow darken-4';
    $is_index_active = '';
    $home_url = home_url() . '/fs-home';
} elseif ($category == 'index') {
    $title = 'Physik-Blog';
    $is_po_active = '';
    $is_fs_active = '';
    $is_index_active = 'active';
} else {
    $title = 'Physik-Blog';
    $is_po_active = '';
    $is_fs_active = '';
    $is_index_active = '';
    $home_url = home_url();
}


?>
<div id="slide-out" class="<?php echo $theme_color; ?> collection side-nav fixed with-header">
  <a href="<?php echo $home_url ?>" class="collection-header">
  
  <!-- <h5>
  <?php
// if ($category == 'fs') {
//     echo '<img style="vertical-align: middle; margin-right: 20px;" src="' . get_template_directory_uri() . '/assets/images/prof.gif">';
// }
// echo $title;
// ?></h5> -->

<div class="row">
<div class="col s3">
<?php
if ($category == 'fs') {
  echo '<img style="vertical-align: middle;" src="' . get_template_directory_uri() . '/assets/images/prof.gif">';
} else {
  echo '<img style="vertical-align: middle;" src="' . get_template_directory_uri() . '/assets/images/Logo_po_klein.png">';
}?>
</div>
<div class="col offset-s1 s8" style="padding-top: 1rem;">
<h5> <?php echo $title;?> </h5>
</div>
</div>

</a>
  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <a href="<?php echo home_url(); ?>" class="collapsible-header white-text <?php echo $is_index_active; ?>">
          <i class="material-icons white-text" style="margin-right: 1.4rem;">dashboard</i>Start
      </a>
    </li>
<!-- FS -->
    <li>
      <div class="collapsible-header <?php echo $is_fs_active; ?>">
        <i class="material-icons">weekend</i>Fachschaft Physik
      </div>
      <div class="collapsible-body">
        <span>
          <ul class="sub-collapsible collapsible" data-collapsible="accordion">
            <li>
              <div class="collapsible-header collection-item sublist-padding">
              <i class="material-icons">info</i>Informationen
              <a href="#" class="secondary-content" style="padding-left: 44.5px;"><i class="material-icons">keyboard_arrow_down</i></a>
              </div>
              <div class="collapsible-body" style="margin-left: 20px;">
                <ul>
                  <li class="<?php echo when_given($erstsemester); ?>"><a href="<?php echo home_url(); ?>/erstsemester/"><i class="material-icons">face</i>Erstsemester</a></li>
                  <li class="<?php echo when_given($schuler); ?>"><a href="<?php echo home_url(); ?>/schuler/"><i class="material-icons">child_care</i>Schüler</a></li>
                  <li class="<?php echo when_given($studiengang); ?>"><a href="<?php echo home_url(); ?>/studiengang/"><i class="material-icons">book</i>Studiengang</a></li>
                  <li class="<?php echo when_given($linksammlung); ?>"><a href="<?php echo home_url(); ?>/linksammlung/"><i class="material-icons">link</i>Linksammlung</a></li>
                  <li class="<?php echo when_given($faq); ?>"><a href="<?php echo home_url(); ?>/faq/"><i class="material-icons">help</i>FAQ</a></li>
                </ul>
              </div>
            </li>
            <li>
              <div class="collapsible-header collection-item sublist-padding">
                <i class="material-icons">event</i>Veranstaltungen
                <a href="#" class="secondary-content"><i class="material-icons">keyboard_arrow_down</i></a>
              </div>
              <div class="collapsible-body" style="margin-left: 20px;">
                <ul>
                  <li class="<?php echo when_given($phifa); ?>"><a href="<?php echo home_url(); ?>/phifa"><i class="material-icons">directions_run</i>Phifa</a></li>
                  <li class="<?php echo when_given($eev); ?>"><a href="<?php echo home_url(); ?>/eev"><i class="material-icons">child_friendly</i>Erstsemestereinführung</a></li>
                  <li class="<?php echo when_given($hsk); ?>"><a href="<?php echo home_url(); ?>/hsk"><i class="material-icons">local_movies</i>Hörsaalkino (HSK)</a></li>
                </ul>
              </div>
            </li>
            <li class="<?php echo when_given($fs_home); ?>">
              <a href= "<?php echo home_url(); ?>/fs-home/" ><i class="material-icons">home</i>Übersicht</a>
            </li>
            <li class="<?php echo when_given($fs_about); ?>">
              <a href= "<?php echo home_url(); ?>/about-fs/" ><i class="material-icons">people</i>About</a>
            </li>
            <li class="<?php echo when_given($fs_contact); ?>">
              <a href="<?php echo home_url(); ?>/contact-fs/"><i class="material-icons">contact_mail</i>Kontakt</a>
            </li>
            <li>
              <a class="grey lighten-5 grey-text text-lighten-1"><i class="material-icons grey-text">get_app</i>Downloads</a>
            </li>
            <li class="<?php echo when_given($fs_blog); ?>">
              <a href="<?php echo home_url(); ?>/category/fs-physik/" >
                <i class="material-icons left">class</i>Blog
              </a>
            </li>
          </ul>
        </span>
      </div>
    </li>
<!-- /FS -->
<!-- PO -->
    <li>
      <div id="po-subheader" class="collapsible-header <?php echo $is_po_active; ?>">
        <i class="material-icons">code</i>PhysikOnline
      </div>
      <div class="collapsible-body">
        <span>
        <ul class="collapsible" data-collapsible="accordion">
            <li class="<?php echo when_given($po_home); ?>">
              <a href= "<?php echo home_url(); ?>/po-home/" ><i class="material-icons">home</i>Übersicht</a>
            </li>
            <li class="<?php echo when_given($projekte); ?>">
              <a href="<?php echo home_url(); ?>/projekte"><i class="material-icons">explore</i>Projekte</a>
            </li>
          <li class="<?php echo when_given($po_blog); ?>">
            <a href="<?php echo home_url(); ?>/category/physikonline" >
              <i class="material-icons left">class</i>Blog
            </a>
          </li>
          <li>
            <a href="https://riedberg.tv">
              <i class="material-icons left">live_tv</i>RiedbergTV</a>
          </li>
          <li>
            <a href="https://physikonline.uni-frankfurt.de/portal/project/url-shorter" >
              <i class="material-icons left">insert_link</i>URL-Shortener</a>
          </li>
          <li>
            <a href="https://podcast-wiki.physik.uni-frankfurt.de"><i class="material-icons left">voice_chat</i>Podcast-Wiki</a>
          </li>
        </ul>
        </span>
      </div>
    </li>
  </ul>
</div>
