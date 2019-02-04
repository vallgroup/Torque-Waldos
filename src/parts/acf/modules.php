<?php

$modules = 'sections';

if ( have_rows( $modules ) ):

  while ( have_rows( $modules ) ) : the_row();

    switch ( get_row_layout() ) {

      case 'text_and_image' :

        $anchor = get_sub_field('anchor');
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

        $anchor = get_sub_field('anchor');
        $quote = get_sub_field( 'quote' );
        $quote_author = get_sub_field( 'quote_author' );
        $background_image = get_sub_field( 'background_image' );
        $description = get_sub_field( 'description' );

        include locate_template('/parts/acf/modules/quote.php');

        break;

      case 'gallery' :

        $anchor = get_sub_field('anchor');
        $number_images = get_sub_field('number_images');
        $image_1 = get_sub_field('image_1');
        $image_2 = get_sub_field('image_2');
        $image_3 = get_sub_field('image_3');
        $image_2_start = get_sub_field('image_2_start');
        $image_3_start = get_sub_field('image_3_start');

        include locate_template('/parts/acf/modules/gallery.php');

        break;

      case 'downloads_section':

        $anchor = get_sub_field('anchor');
        $bg_image = get_sub_field( 'background_image' );

        include locate_template('/parts/acf/modules/downloads.php');

        break;

    }

  endwhile;
endif;

?>
