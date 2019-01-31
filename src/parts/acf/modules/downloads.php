<?php

$downloads = 'downloads';

if ( have_rows( $downloads ) ):

  ?>

  <div class="downloads-section" style="<?php if ($bg_image) {?> background-image: url('<?php echo $bg_image; ?>'); <?php } ?>">

    <h2>DOWNLOADS</h2>

    <div class="downloads-wrapper" >

  <?php

  while ( have_rows( $downloads ) ) : the_row();


    $file_url = get_sub_field('file');
    $button_text = get_sub_field('button_text');
    $image = get_sub_field('image');

    ?>

    <div class="download" >
      <div class="image-wrapper">
        <img src="<?php echo $image; ?>" />
      </div>

      <a href="<?php echo $file_url; ?>" target="_blank" rel="noreferrer noopener">
        <button><?php echo $button_text; ?></button>
      </a>
    </div>

    <?php

  endwhile;

  ?>

    </div>

  </div>

  <?php

endif;

?>
