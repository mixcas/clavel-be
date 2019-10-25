<?php
/*
Template Name: Archives
*/
get_header();
?>
<main id="main-content">
  <div class="category-title-container container">
    <h1 class="category-title">
<?php
echo single_cat_title();
?>

    </h1>
  </div>
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
