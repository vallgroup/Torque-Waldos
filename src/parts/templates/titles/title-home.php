<?php

$tagline = html_entity_decode(get_bloginfo( 'description' ));

$image_url = get_the_post_thumbnail_url();

if ($image_url) {

?>

<div class="hero" style="background-image: url('<?php echo $image_url; ?>');">

  <?php if ($tagline) { ?>
    <h1>
      <?php echo $tagline; ?>
    </h1>
  <?php } ?>

</div>


<?php } ?>
