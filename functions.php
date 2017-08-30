<?php
function parent_styles() {

  $parent_style = 'parent-style'; // This is 'illdy style' for the Illdy theme.

  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

}
function child_styles() {

  $parent_style = 'parent-style'; // This is 'illdy style' for the Illdy theme.

  wp_enqueue_style( 'child-style',
  get_stylesheet_directory_uri() . '/style.css',
  array( $parent_style ),
  wp_get_theme()->get('Version')
);
}
add_action( 'wp_enqueue_scripts', 'parent_styles');
add_action( 'wp_enqueue_scripts', 'child_styles',1000);



//Load JS
function theme_js(){
  if (is_page_template('page-FlexibleArticle.php') ){
    wp_enqueue_script('scrollNav', get_stylesheet_directory_uri() . '/js/jquery.scrollNav.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script('scrollNavScript', get_stylesheet_directory_uri() . '/js/pageNavScroll.js', array( 'jquery' ), '1.0.0', true );
  }
}

add_action( 'wp_enqueue_scripts', 'theme_js' );

//ACF for page builder
if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array (
    'key' => 'group_59a6a5095a4e7',
    'title' => 'Flexible Article Content Fields',
    'fields' => array (
      array (
        'key' => 'field_59a6a51f4ab4c',
        'label' => 'Flexible Article Content',
        'name' => 'flexible_article_content',
        'type' => 'flexible_content',
        'instructions' => 'This will create a flexible article scrolling page.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layouts' => array (
          '59a6a52a0e6e1' => array (
            'key' => '59a6a52a0e6e1',
            'name' => 'editor',
            'label' => 'Editor',
            'display' => 'row',
            'sub_fields' => array (
              array (
                'key' => 'field_59a6a5584ab4d',
                'label' => 'Editor',
                'name' => 'editor',
                'type' => 'wysiwyg',
                'instructions' => 'Adds a simple Wordpress Editor',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
              ),
            ),
            'min' => '',
            'max' => '',
          ),
          '59a6a58f4ab4f' => array (
            'key' => '59a6a58f4ab4f',
            'name' => 'start_section',
            'label' => 'Start Section',
            'display' => 'block',
            'sub_fields' => array (
              array (
                'key' => 'field_59a6dcbf9ebeb',
                'label' => 'Heading',
                'name' => 'heading',
                'type' => 'text',
                'instructions' => 'Add heading for the section',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
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
              array (
                'key' => 'field_59a6dd579ebed',
                'label' => 'Heading position',
                'name' => 'heading_position',
                'type' => 'radio',
                'instructions' => 'Select the placement for the heading',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'choices' => array (
                  'center' => 'Center',
                  'left' => 'Left',
                  'right' => 'Right',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => '',
                'layout' => 'vertical',
                'return_format' => 'value',
              ),
              array (
                'key' => 'field_59a6dd349ebec',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'instructions' => 'Image for background of heading. Should be 1920x1080 for desktop.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
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
          '59a6a5b24ab51' => array (
            'key' => '59a6a5b24ab51',
            'name' => 'end_section',
            'label' => 'End Section',
            'display' => 'block',
            'sub_fields' => array (
            ),
            'min' => '',
            'max' => '',
          ),
        ),
        'button_label' => 'Add Row',
        'min' => '',
        'max' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-FlexibleArticle.php',
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

?>
