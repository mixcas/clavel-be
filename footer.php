  <footer id="footer">
<?php
get_template_part('partials/nav');
?>
    <div class="footer-about">
      <div class="grid container">
        <div class="col-xs-9">
<?php
get_template_part('partials/about');
?>
        </div>
      </div>
    </div>
<?php
$facebook = get_theme_mod('facebook');
$twitter = get_theme_mod('twitter');
$instagram = get_theme_mod('instagram');
?>
    <div class="footer-links">
      <div class="grid container">
<?php
if (!empty($facebook)) {
?>
        <div class="col-xs-3">
          <a href="<?php echo $facebook; ?>">Facebook</a>
        </div>
<?php
}
?>
<?php
if (!empty($twitter)) {
?>
        <div class="col-xs-3">
          <a href="<?php echo $twitter; ?>">Twitter</a>
        </div>
<?php
}
?>
<?php
if (!empty($instagram)) {
?>
        <div class="col-xs-3">
          <a href="<?php echo $instagram; ?>">Instagram</a>
        </div>
<?php
}
?>
      </div>
    </div>
<?php

?>
  </footer>

</section>

<?php
// get_template_part('partials/scripts');
// get_template_part('partials/schema-org');
?>

</body>
</html>
