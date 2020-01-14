<?php
get_header();
?>
<main id="main-content">
  <section id="posts">

<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
?>
    <article <?php post_class(''); ?> id="post-<?php the_ID(); ?>">
      <header>
        <div class="container">
          <div class="grid">
            <h1 class="col-xs-12">
              <a class="font-playfair" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </h1>
          </div>
        </div>
      </header>
      <div class="container post-content">
<?php
    the_content();
?>
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
