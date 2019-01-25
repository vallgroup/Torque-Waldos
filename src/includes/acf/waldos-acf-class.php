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
      							'key' => 'field_5c49c0b89882e',
      							'label' => 'Background Color',
      							'name' => 'background_color',
      							'type' => 'radio',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'choices' => array(
      								'white' => 'White',
      								'blue' => 'Blue',
      								'green' => 'Green',
      								'yellow' => 'Yellow',
      							),
      							'allow_null' => 0,
      							'other_choice' => 0,
      							'default_value' => 'blue',
      							'layout' => 'vertical',
      							'return_format' => 'value',
      							'save_other_choice' => 0,
      						),
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
      							'key' => 'field_5c49c24694257',
      							'label' => 'Subtitle',
      							'name' => 'subtitle',
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
      							'key' => 'field_5c49c04a9882c',
      							'label' => 'Title Color',
      							'name' => 'title_color',
      							'type' => 'radio',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'choices' => array(
      								'white' => 'White',
      								'gray' => 'Gray',
      								'blue' => 'Blue',
      								'green' => 'Green',
      								'yellow' => 'Yellow',
      							),
      							'allow_null' => 0,
      							'other_choice' => 0,
      							'default_value' => 'white',
      							'layout' => 'vertical',
      							'return_format' => 'value',
      							'save_other_choice' => 0,
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
      							'key' => 'field_5c49c0789882d',
      							'label' => 'Content Color',
      							'name' => 'content_color',
      							'type' => 'radio',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'choices' => array(
      								'white' => 'White',
      								'gray' => 'Gray',
      								'blue' => 'Blue',
      								'green' => 'Green',
      								'yellow' => 'Yellow',
      							),
      							'allow_null' => 0,
      							'other_choice' => 0,
      							'default_value' => 'white',
      							'layout' => 'vertical',
      							'return_format' => 'value',
      							'save_other_choice' => 0,
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
      						array(
      							'key' => 'field_5c499f6501bd3',
      							'label' => 'Align',
      							'name' => 'align',
      							'type' => 'radio',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'choices' => array(
      								'left' => 'Left',
      								'right' => 'Right',
      							),
      							'allow_null' => 0,
      							'other_choice' => 0,
      							'default_value' => 'left',
      							'layout' => 'horizontal',
      							'return_format' => 'value',
      							'save_other_choice' => 0,
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
      				'layout_5c4b5309a5f69' => array(
      					'key' => 'layout_5c4b5309a5f69',
      					'name' => 'downloads_section',
      					'label' => 'Downloads',
      					'display' => 'block',
      					'sub_fields' => array(
      						array(
      							'key' => 'field_5c4b5314a5f6a',
      							'label' => 'Downloads',
      							'name' => 'downloads',
      							'type' => 'repeater',
      							'instructions' => '',
      							'required' => 0,
      							'conditional_logic' => 0,
      							'wrapper' => array(
      								'width' => '',
      								'class' => '',
      								'id' => '',
      							),
      							'collapsed' => '',
      							'min' => 0,
      							'max' => 0,
      							'layout' => 'table',
      							'button_label' => '',
      							'sub_fields' => array(
      								array(
      									'key' => 'field_5c4b5368a5f6b',
      									'label' => 'File',
      									'name' => 'file',
      									'type' => 'file',
      									'instructions' => '',
      									'required' => 0,
      									'conditional_logic' => 0,
      									'wrapper' => array(
      										'width' => '',
      										'class' => '',
      										'id' => '',
      									),
      									'return_format' => 'url',
      									'library' => 'all',
      									'min_size' => '',
      									'max_size' => '',
      									'mime_types' => '',
      								),
      								array(
      									'key' => 'field_5c4b53c8a5f6c',
      									'label' => 'Button Text',
      									'name' => 'button_text',
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
      							),
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
