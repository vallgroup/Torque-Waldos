<?php

require_once( get_template_directory() . '/includes/acf/torque-acf-search-class.php' );

class Waldos_ACF {

  public function __construct() {
    add_action('admin_init', array( $this, 'acf_admin_init'), 99);
    add_action('acf/init', array( $this, 'acf_init' ) );

    // hide acf in admin - client doesnt need to see this
    // add_filter('acf/settings/show_admin', '__return_false');

    // add acf fields to wp search
    if ( class_exists( 'Torque_ACF_Search' ) ) {
      add_filter( Torque_ACF_Search::$ACF_SEARCHABLE_FIELDS_FILTER_HANDLE, array( $this, 'add_fields_to_search' ) );
    }
  }

  public function acf_admin_init() {
    // hide options page
    // remove_menu_page('acf-options');
  }

  public function add_fields_to_search( $fields ) {
    // $fields[] = 'custom_field_name';
    return $fields;
  }

  public function acf_init() {
    // add content sections here

    if( function_exists('acf_add_local_field_group') ):

      acf_add_local_field_group(array(
      	'key' => 'group_5c49915de572f',
      	'title' => 'Layout',
      	'fields' => array(
      		array(
      			'key' => 'field_5c499171b7ab4',
      			'label' => 'Sections',
      			'name' => 'sections',
      			'type' => 'flexible_content',
      			'instructions' => '',
      			'required' => 0,
      			'conditional_logic' => 0,
      			'wrapper' => array(
      				'width' => '',
      				'class' => '',
      				'id' => '',
      			),
      			'layouts' => array(
      				'5c4991a0b531b' => array(
      					'key' => '5c4991a0b531b',
      					'name' => 'text_and_image',
      					'label' => 'Text and Image',
      					'display' => 'block',
      					'sub_fields' => array(
      						array(
      							'key' => 'field_5c499216b7ab5',
      							'label' => 'Title',
      							'name' => 'title',
      							'type' => 'text',
      							'instructions' => 'Add <em></em> tags around text to emphasise it. eg the next word will be <em>emphasised</em>',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'default_value' => '',
      							'placeholder' => '',
      							'prepend' => '',
      							'append' => '',
      							'maxlength' => '',
      						),
      						array(
      							'key' => 'field_5c49928db7ab6',
      							'label' => 'Content',
      							'name' => 'content',
      							'type' => 'textarea',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'default_value' => '',
      							'placeholder' => '',
      							'maxlength' => '',
      							'rows' => '',
      							'new_lines' => '',
      						),
      						array(
      							'key' => 'field_5c4992a7b7ab7',
      							'label' => 'CTA',
      							'name' => 'cta',
      							'type' => 'link',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'return_format' => 'array',
      						),
      						array(
      							'key' => 'field_5c4992f2b7ab8',
      							'label' => 'Image',
      							'name' => 'image',
      							'type' => 'image',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'return_format' => 'url',
      							'preview_size' => 'thumbnail',
      							'library' => 'all',
      							'min_width' => '',
      							'min_height' => '',
      							'min_size' => '',
      							'max_width' => '',
      							'max_height' => '',
      							'max_size' => '',
      							'mime_types' => '',
      						),
      					),
      					'min' => '',
      					'max' => '',
      				),
      				'layout_5c499357b7ab9' => array(
      					'key' => 'layout_5c499357b7ab9',
      					'name' => 'quote',
      					'label' => 'Quote',
      					'display' => 'block',
      					'sub_fields' => array(
      						array(
      							'key' => 'field_5c499360b7aba',
      							'label' => 'Quote',
      							'name' => 'quote',
      							'type' => 'text',
      							'instructions' => 'Add <em></em> tags around text to emphasise it. eg the next word will be <em>emphasised</em>',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'default_value' => '',
      							'placeholder' => '',
      							'prepend' => '',
      							'append' => '',
      							'maxlength' => '',
      						),
      						array(
      							'key' => 'field_5c49937ab7abb',
      							'label' => 'Quote Author',
      							'name' => 'quote_author',
      							'type' => 'text',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'default_value' => '',
      							'placeholder' => '',
      							'prepend' => '',
      							'append' => '',
      							'maxlength' => '',
      						),
      						array(
      							'key' => 'field_5c49939eb7abc',
      							'label' => 'Background Image',
      							'name' => 'background_image',
      							'type' => 'image',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'return_format' => 'url',
      							'preview_size' => 'thumbnail',
      							'library' => 'all',
      							'min_width' => '',
      							'min_height' => '',
      							'min_size' => '',
      							'max_width' => '',
      							'max_height' => '',
      							'max_size' => '',
      							'mime_types' => '',
      						),
      					),
      					'min' => '',
      					'max' => '',
      				),
      				'layout_5c4993c8b7abd' => array(
      					'key' => 'layout_5c4993c8b7abd',
      					'name' => 'image',
      					'label' => 'Image',
      					'display' => 'block',
      					'sub_fields' => array(
      						array(
      							'key' => 'field_5c4993d2b7abe',
      							'label' => 'Image',
      							'name' => 'image',
      							'type' => 'image',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'return_format' => 'url',
      							'preview_size' => 'medium',
      							'library' => 'all',
      							'min_width' => '',
      							'min_height' => '',
      							'min_size' => '',
      							'max_width' => '',
      							'max_height' => '',
      							'max_size' => '',
      							'mime_types' => '',
      						),
      					),
      					'min' => '',
      					'max' => '',
      				),
      			),
      			'button_label' => 'Add Section',
      			'min' => '',
      			'max' => '',
      		),
      	),
      	'location' => array(
      		array(
      			array(
      				'param' => 'post_type',
      				'operator' => '==',
      				'value' => 'page',
      			),
      		),
      	),
      	'menu_order' => 0,
      	'position' => 'normal',
      	'style' => 'default',
      	'label_placement' => 'top',
      	'instruction_placement' => 'label',
      	'hide_on_screen' => '',
      	'active' => 1,
      	'description' => '',
      ));

      endif;
  }
}

?>
