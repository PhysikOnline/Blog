<?php
$category = get_query_var('view-category');

if ($category == 'po') {
    $title = 'PhysikOnline';
    $is_po_active = 'active';
    $is_fs_active = '';
    $theme_color = '';
} elseif ($category == 'fs') {
    $title = 'Fachschaft Physik';
    $is_po_active = '';
    $is_fs_active = 'active';
    $theme_color = 'yellow darken-4';
} else {
    $title = 'PhysikOnline';
    $is_po_active = 'active';
    $is_fs_active = '';
}

?>
<div id="slide-out" class="<?php echo $theme_color;?> collection side-nav fixed with-header">
  <a href="/wordpress" class="collection-header"><h5><?php echo $title; ?></h5></a>
  <ul class="collapsible" data-collapsible="accordion">
  <!-- FS -->
        <li>
          <div class="collapsible-header <?php echo $is_fs_active; ?>">
            <i class="material-icons">weekend</i>Fachschaft Physik
          </div>
          <div class="collapsible-body">
            <span>
              <ul class="sub-collapsible collapsible" data-collapsible="accordion">
                <li>
                  <div class="collapsible-header collection-item sublist-padding"><i class="material-icons">info</i>Informationen 
                  <a href="#" class="secondary-content" style="padding-left: 44.5px;"><i class="material-icons">keyboard_arrow_down</i></a>
                  </div>
                  <div class="collapsible-body">
                    <ul>
                      <li><a href="<?php bloginfo('wpurl') ?>/erstsemester/"><i class="material-icons">face</i>Erstsemester</a></li>
                      <li><a href="<?php bloginfo('wpwurl') ?>/schuler/"><i class="material-icons">child_care</i>Schüler</a></li>
                      <li><a href="<?php bloginfo('wpwurl') ?>/studiengang/"><i class="material-icons">book</i>Studiengang</a></li>
                      <li><a href="<?php bloginfo('wpwurl') ?>/linksammlung/"><i class="material-icons">link</i>Linksammlung</a></li>
                      <li><a href="<?php bloginfo('wpwurl') ?>/faq/"><i class="material-icons">help</i>FAQ</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header collection-item sublist-padding">
                    <i class="material-icons">event</i>Veranstaltungen
                    <a href="#" class="secondary-content"><i class="material-icons">keyboard_arrow_down</i></a>
                  </div>
                  <div class="collapsible-body">
                    <ul>
                      <li><a href="<?php bloginfo('wpwurl') ?>/phifa"><i class="material-icons">directions_run</i>Phifa</a></li>
                      <li><a href="<?php bloginfo('wpwurl') ?>/eev"><i class="material-icons">child_friendly</i>Erstsemestereinführung</a></li>
                      <li><a href="<?php bloginfo('wpwurl') ?>/hsk"><i class="material-icons">local_movies</i>Hörsaalkino (HSK)</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a href= "<?php bloginfo('wpwurl') ?>/about-fs/" ><i class="material-icons">people</i>About</a>
                </li>
                <li>
                  <a href="<?php bloginfo('wpwurl') ?>/contact-fs/"><i class="material-icons">contact_mail</i>Kontakt</a>
                </li>
                <li>
                  <a href="#"><i class="material-icons">contact_mail</i>Downloads</a>
                </li>
                <li>
                  <a href="<?php bloginfo('wpwurl') ?>/category/fs-physik/" >
                    <i class="material-icons left">whatshot</i>Blog
                  </a>
                </li>
              </ul>
            </span>
          </div>
        </li>
  <!-- /FS -->
  <!-- PO -->
        <li>
          <div class="collapsible-header">
            <i class="material-icons">code</i>PhysikOnline
          </div>
          <div class="collapsible-body">
            <span>
            <ul class="collapsible" data-collapsible="accordion">
              <li>
                <a href="<?php bloginfo('wpwurl') ?>/category/physikonline/" >
                  <i class="material-icons left">whatshot</i>Blog
                </a>
              </li>
            </ul>
            </span>
          </div>
        </li>
<!-- /PO -->

  

  <a href="https://riedberg.tv" class="collection-item waves-effect">
    <i class="material-icons left">live_tv</i>RiedbergTV</a>
  <a href="https://physikonline.uni-frankfurt.de/portal/project/url-shorter" class="collection-item waves-effect">
    <i class="material-icons left">insert_link</i>URL-Shortener</a>
  <a href="https://podcast-wiki.physik.uni-frankfurt.de" class="collection-item waves-effect"><i class="material-icons left">voice_chat</i>Podcast-Wiki</a>
  <a href="#" class="collection-item waves-effect"><i class="material-icons left">voice_chat</i>Impressum</a>
  </ul>
</div>
