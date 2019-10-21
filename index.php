<?php
get_header();
?>
<main id="main-content">
	<section id="posts">
		<div class="container">
			<div class="columns">

<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
?>

				<article <?php post_class('column is-full'); ?> id="post-<?php the_ID(); ?>">

					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

					<?php the_content(); ?>

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
