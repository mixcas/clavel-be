<nav class="navbar text-uppercase" role="navigation" aria-label="main navigation">

  <div class="container grid">
  <!-- <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1> -->
<?php
if (!is_front_page()) {
?>
      <div class="navbar-item col-xs-3">
        <a href="<?php echo get_home_url(); ?>">Inicio</a>
      </div>
<?php
}
?>
      <div class="navbar-item col-xs-3">
      <a href="<?php get_category_link_by_slug('noticias'); ?>">Noticias</a>
      </div>
      <div class="navbar-item col-xs-3">
        <a href="<?php get_category_link_by_slug('archivo'); ?>">Archivo</a>
      </div>
      <div class="navbar-item col-xs-3 col-xs-align-self--right">
        <a href="">Nosotras</a>
      </div>
  </div>
</nav>
