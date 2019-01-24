<?php

require_once( get_template_directory() . '/includes/customizer/customizer-tabs/tabs/torque-customizer-tab-site-identity-class.php' );

$tab_settings = Torque_Customizer_Tab_Site_Identity::get_settings();

$logo_src = get_theme_mod( $tab_settings['logo_white_setting'] );

$tagline = get_bloginfo( 'description' );

$image_url = get_the_post_thumbnail_url();

if ($image_url) {

?>

<div class="hero" style="background-image: url('<?php echo $image_url; ?>');">

  <?php if ($logo_src) { ?>
    <img class="logo-white" src="<?php echo $logo_src; ?>" />
  <?php } ?>

  <?php if ($tagline) { ?>
    <h3 class="tagline" >
      <?php echo $tagline; ?>
    </h3>
  <?php } ?>

</div>


<?php } ?>
