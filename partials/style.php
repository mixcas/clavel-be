<?php
$colors = array(
  '#BFFF00',
  '#FFBF00',
  '#FF7CE9',
  '#5EE5B8',
  '#FFFF00',
  '#CC80FF',
  '#FF80AA',
  '#FF9966',
  '#3B94ED',
  '#CC6699'
);

$color_index = array_rand($colors)
?>

<style>
#main-content {
  background: <?php echo $colors[$color_index]; ?>b3;
}
.navbar {
  color: <?php echo $colors[$color_index]; ?>b3;
}
</style>
