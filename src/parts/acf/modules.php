<?php

$modules = 'sections';

if ( have_rows( $modules ) ):

  while ( have_rows( $modules ) ) : the_row();

    switch ( get_row_layout() ) {

      case 'text_and_image' :

        $title = get_sub_field( 'title' );
        $content = get_sub_field( 'content' );
        $cta = get_sub_field( 'cta' );
        $image = get_sub_field( 'image' );

        include locate_template('/parts/acf/modules/text_and_image.php');

        break;

      case 'quote' :

        $quote = get_sub_field( 'quote' );
        $quote_author = get_sub_field( 'quote_author' );
        $background_image = get_sub_field( 'background_image' );

        include locate_template('/parts/acf/modules/quote.php');

        break;

      case 'image' :

        $image = get_sub_field('image');

        include locate_template('/parts/acf/modules/image.php');

        break;

    }

  endwhile;
endif;

?>
