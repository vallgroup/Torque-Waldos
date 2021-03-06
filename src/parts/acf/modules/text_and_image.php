<div
  <?php if ($anchor) { ?> id="<?php echo $anchor; ?>" <?php } ?>
  class="row text-and-image-section <?php echo $align; ?>">

  <img class="image" src="<?php echo $image; ?>" />

  <div class="overlay" ></div>

  <div class="content-section bg-<?php echo $bg_color; ?>" >
    <?php if ($title) { ?>
      <h3 class="<?php echo $title_color; ?>"><?php echo $title; ?></h3>
    <?php } ?>

    <?php if ($subtitle) { ?>
      <div class="subtitle <?php echo $title_color; ?>"><?php echo $subtitle; ?></div>
    <?php } ?>

    <?php if ($content) { ?>
      <div class="content <?php echo $content_color; ?>"><?php echo $content; ?></div>
    <?php } ?>

    <?php if ($cta) { ?>
      <a href="<?php echo $cta['url']; ?>" target="<?php echo $cta['target']; ?>">
        <button><?php echo $cta['title']; ?></button>
      </a>
    <?php } ?>
  </div>

</div>
