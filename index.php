<?php
get_header();
?>
<main id="main-content">
<?php
if (is_front_page()) {
?>
  <div class="logo-container container grid">
    <h1 class="site-title col-xs-12">CLAVEL</h1>
    <img class="logo col-xs-9 col-xs-align-self--right" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
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

        <article <?php post_class('col-xs-12'); ?> id="post-<?php the_ID(); ?>">
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
