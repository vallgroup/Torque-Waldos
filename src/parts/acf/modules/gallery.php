<?php

$anchor = $anchor ? 'id="'.$anchor.'"' : '';

?>


<?php if ($number_images === '1' && $image_1) { ?>

  <div <?php echo $anchor; ?> class="row images-wrapper">
    <img class="gallery-col-12" src="<?php echo $image_1; ?>"/>
  </div>

<?php } ?>

<?php if ($number_images === '2' && $image_1 && $image_2) {

$image_2_start_int = intval($image_2_start);

$col_2 = 12 - $image_2_start_int;
$col_1 =  $image_2_start_int;

?>

  <div <?php echo $anchor; ?> class="row images-wrapper">
    <img class="gallery-col-<?php echo $col_1; ?>" src="<?php echo $image_1; ?>"/>
    <img class="gallery-col-<?php echo $col_2; ?>" src="<?php echo $image_2; ?>"/>
  </div>

<?php } ?>

<?php if ($number_images === '3' && $image_1 && $image_2 && $image_3) {

$image_2_start_int = intval($image_2_start);
$image_3_start_int = intval($image_3_start);

$col_3 = 12 - $image_3_start_int;
$col_2 = $image_3_start_int - $image_2_start_int;
$col_1 =  $image_2_start_int;

?>

  <div <?php echo $anchor; ?> class="row images-wrapper">
    <img class="gallery-col-<?php echo $col_1; ?>" src="<?php echo $image_1; ?>"/>
    <img class="gallery-col-<?php echo $col_2; ?>" src="<?php echo $image_2; ?>"/>
    <img class="gallery-col-<?php echo $col_3; ?>" src="<?php echo $image_3; ?>"/>
  </div>

<?php } ?>
