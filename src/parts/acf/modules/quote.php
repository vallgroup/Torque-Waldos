<div
  <?php if ($anchor) { ?> id="<?php echo $anchor; ?>" <?php } ?>
  class="row quote-wrapper"
  style="background-image: url('<?php echo $background_image; ?>');">

  <h1 class="quote" >
    <span class="quote-mark"><em>"</em></span> <?php echo $quote; ?> <span class="quote-mark"><em>"</em></span>
  </h1>
  <h4 class="quote-author">
    - <?php echo $quote_author; ?>
  </h4>

  <?php if ($description) { ?>
    <h4><?php echo $description ?></h4>
  <?php } ?>
  
</div>
