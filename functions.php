<?php

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles()
{

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('main-style', get_template_directory_uri() . '/scss/main.css');

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
  wp_enqueue_script('timeline-js', get_stylesheet_directory_uri() . '/js/timeline.js', false, '', true);
}

function wporg_custom_post_type()
{
  register_post_type(
    'experiences',
    array(
      'labels' => array(
        'name' => __('Experiências', 'textdomain'),
        'singular_name' => __('Experiência', 'textdomain'),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'menu_order', 'page-attributes'),
    )
  );

  register_post_type(
    'portfolio',
    array(
      'labels' => array(
        'name' => __('Portfolio', 'textdomain'),
        'singular_name' => __('Portfolio', 'textdomain'),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'excerpt')
    )
  );

  register_post_type(
    'contatos',
    array(
      'labels' => array(
        'name' => __('Contatos', 'textdomain'),
        'singular_name' => __('Contato', 'textdomain'),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'custom-fields', 'thumbnail')
    )
  );

  register_post_type(
    'technologies',
    array(
      'labels' => array(
        'name' => __('Tecnologias', 'textdomain'),
        'singular_name' => __('Tecnologia', 'textdomain'),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'custom-fields', 'thumbnail')
    )
  );

  register_post_type(
    'services',
    array(
      'labels' => array(
        'name' => __('Serviços', 'textdomain'),
        'singular_name' => __('Serviço', 'textdomain'),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'excerpt')
    )
  );

  register_post_type(
    'fight-flags',
    array(
      'labels' => array(
        'name' => __('Bandeiras de Luta', 'textdomain'),
        'singular_name' => __('Bandeira de Luta', 'textdomain'),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'custom-fields', 'thumbnail')
    )
  );

  register_post_type(
    'stacks-logos',
    array(
      'labels' => array(
        'name' => __('Simbolos das Tecnologias', 'textdomain'),
        'singular_name' => __('Logo da Tecnologia', 'textdomain'),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'custom-fields', 'thumbnail')
    )
  );
}
add_action('init', 'wporg_custom_post_type');


function formatDateToMMYY($date) {
  if(str_contains($date, "/")) {
    return explode("/",$date)[1] . "/" . explode("/",$date)[2];
  }
  return $date;
}

function calculateYearsDiff() {
  $date1 = strtotime("2011-03-01 22:45:00");
  $date2 = strtotime(date('Y-m-d H:i:s'));

  // Calculate the difference in seconds
  $diff = abs($date2 - $date1);

  // Calculate years
  $devYears = floor($diff / (365 * 60 * 60 * 24));
  
  return $devYears;
}