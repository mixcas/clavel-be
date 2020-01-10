<?php
get_header();
?>
<main id="main-content">
<?php
if (is_front_page()) {
?>
  <div class="site-title-container container">
    <h1 class="site-title">CLAVEL</h1>
    <div class="title-logo-container">
      <img class="title-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clavel-title.svg">
    </div>
    <div class="logo-container">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clavel-logo.svg">
    </div>
  </div>
<?php
}
?>
  <section id="posts" class="posts-list">
    <div class="container">
      <div class="grid">

<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
?>

        <article <?php post_class('col-xs-9'); ?> id="post-<?php the_ID(); ?>">
          <h1>
            <a class="font-playfair" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </h1>
          <div class="date">
            <a href="<?php the_permalink() ?>"><?php the_date(); ?></a>
          </div>
        </article>

<?php
  }
} else {
?>
        <article class=""><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

      </div>
    </div>
  </section>

</main>

<?php
  get_footer();
?>
