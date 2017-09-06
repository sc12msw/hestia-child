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

//Short codes
function quote_shortcode($atts, $content = null){
  $a = shortcode_atts( array(
    'size' => '30',
  ), $atts );

  return '<blockquote class="flexibleA-subComponent__quote"><p style="font-size:'. esc_attr($a['size']) .'px;">' . $content . '</p></blockquote>';
}
add_shortcode('flexible-quote','quote_shortcode');
//Short codes
function caption_shortcode($atts, $content = null){
  $a = shortcode_atts( array(
    'size' => '15',
  ), $atts );

  return '<span class="flexibleA-subComponent__caption" style="font-size:'. esc_attr($a['size']) .'px;">' . $content . '</span>';
}
add_shortcode('flexible-caption','caption_shortcode');

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
              array (
                'key' => 'field_59aeab27f8a67',
                'label' => 'Background Image',
                'name' => 'background_image',
                'type' => 'image',
                'instructions' => '(Optional) Will make background image for editor to scroll over make sure the image is 1920x1080',
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
                'label' => 'Heading Position',
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
          '59aeba7b3db02' => array (
            'key' => '59aeba7b3db02',
            'name' => 'full_page_image',
            'label' => 'Full Page Image',
            'display' => 'block',
            'sub_fields' => array (
              array (
                'key' => 'field_59aeba823db03',
                'label' => 'Background Image',
                'name' => 'background_image',
                'type' => 'image',
                'instructions' => 'Image for the full page image (min 1920x1080)',
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
              array (
                'key' => 'field_59aebabb3db04',
                'label' => 'Caption',
                'name' => 'caption',
                'type' => 'text',
                'instructions' => '(Optional) caption for the image',
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
            ),
            'min' => '',
            'max' => '',
          ),
          '59afcdf995db1' => array (
            'key' => '59afcdf995db1',
            'name' => 'similar_articles',
            'label' => 'Similar Articles',
            'display' => 'block',
            'sub_fields' => array (
              array (
                'key' => 'field_59afce0195db2',
                'label' => 'Heading',
                'name' => 'heading',
                'type' => 'text',
                'instructions' => 'Main Heading for component.',
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
                'key' => 'field_59afcebe95dbc',
                'label' => 'Color',
                'name' => 'color',
                'type' => 'radio',
                'instructions' => 'The color for the background of the link text',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'choices' => array (
                  'default' => 'Default',
                  'red' => 'Red',
                  'grey' => 'Grey',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => '',
                'layout' => 'horizontal',
                'return_format' => 'value',
              ),
              array (
                'key' => 'field_59afce5895db6',
                'label' => 'Image 1',
                'name' => 'image_1',
                'type' => 'image',
                'instructions' => 'The image for the article link',
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
              array (
                'key' => 'field_59afce1e95db3',
                'label' => 'Link 1',
                'name' => 'link_1',
                'type' => 'page_link',
                'instructions' => 'The page that this article will link to.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'post_type' => array (
                ),
                'taxonomy' => array (
                ),
                'allow_null' => 0,
                'allow_archives' => 1,
                'multiple' => 0,
              ),
              array (
                'key' => 'field_59afce7c95db9',
                'label' => 'Link Text 1',
                'name' => 'link_text_1',
                'type' => 'textarea',
                'instructions' => 'The text for the link',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => 'br',
              ),
              array (
                'key' => 'field_59afce6a95db7',
                'label' => 'Image 2',
                'name' => 'image_2',
                'type' => 'image',
                'instructions' => 'The image for the article link',
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
              array (
                'key' => 'field_59afce4a95db4',
                'label' => 'Link 2',
                'name' => 'link_2',
                'type' => 'page_link',
                'instructions' => 'The page that this article will link to.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'post_type' => array (
                ),
                'taxonomy' => array (
                ),
                'allow_null' => 0,
                'allow_archives' => 1,
                'multiple' => 0,
              ),
              array (
                'key' => 'field_59afcea295dba',
                'label' => 'Link Text 2',
                'name' => 'link_text_2',
                'type' => 'textarea',
                'instructions' => 'The text for the link',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => 'br',
              ),
              array (
                'key' => 'field_59afce6e95db8',
                'label' => 'Image 3',
                'name' => 'image_3',
                'type' => 'image',
                'instructions' => 'The image for the article link',
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
              array (
                'key' => 'field_59afce5095db5',
                'label' => 'Link 3',
                'name' => 'link_3',
                'type' => 'page_link',
                'instructions' => 'The page that this article will link to.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'post_type' => array (
                ),
                'taxonomy' => array (
                ),
                'allow_null' => 0,
                'allow_archives' => 1,
                'multiple' => 0,
              ),
              array (
                'key' => 'field_59afceaa95dbb',
                'label' => 'Link Text 3',
                'name' => 'link_text_3',
                'type' => 'textarea',
                'instructions' => 'The text for the link',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => 'br',
              ),
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
