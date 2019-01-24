<?php

$modules = 'sections';

if ( have_rows( $modules ) ):

  while ( have_rows( $modules ) ) : the_row();

    switch ( get_row_layout() ) {

      case 'text_and_image' :

        $bg_color = get_sub_field( 'background_color' );
        $title = get_sub_field( 'title' );
        $subtitle = get_sub_field( 'subtitle' );
        $title_color = get_sub_field( 'title_color' ) ;
        $content = get_sub_field( 'content' );
        $content_color = get_sub_field( 'content_color' );
        $cta = get_sub_field( 'cta' );
        $image = get_sub_field( 'image' );
        $align = get_sub_field( 'align' );

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
