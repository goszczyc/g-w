<?php
require_once(__DIR__ . '/inc/general/scripts-and-styles.php');

require_once(__DIR__ . '/inc/general/menu.php');

require_once(__DIR__ . '/inc/custom-posts/template.php');

require_once(__DIR__ . '/inc/acf/options.php');

require_once(__DIR__ . '/inc/general/img-size.php');

require_once(__DIR__ . '/inc/general/variables-export.php');

add_theme_support('title-tag');

add_theme_support('post-thumbnails');

/*************** ALLOW SVG ***************/
function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function wpdocs_custom_excerpt_length($length)
{
  return 16;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

function pagination_bar($custom_query, $numbers_class)
{

  $total_pages = $custom_query->max_num_pages;
  $big = 999999999; // need an unlikely integer

  if ($total_pages > 1) {
    $current_page = max(1, get_query_var('paged'));
    echo get_previous_posts_link(translate('Previous', 'gut'));
    echo '<div class="' . $numbers_class . '">';
    echo paginate_links(array(
      'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      'format' => '?paged=%#%',
      'current' => $current_page,
      'total' => $total_pages,
      'prev_next' => false,
      'end_size' => 1,
      'mid_size' => 1
    ));
    echo '</div>';
    echo get_next_posts_link(translate('Next', 'gut'), $custom_query->max_num_pages);
  }
}

function my_theme_posts_next_link_attributes()
{
  return 'class="btn btn--primary pagination-nav__next"';
}
function my_theme_posts_prev_link_attributes()
{
  return 'class="btn btn--primary pagination-nav__prev"';
}

add_filter('previous_posts_link_attributes', 'my_theme_posts_prev_link_attributes');
add_filter('next_posts_link_attributes', 'my_theme_posts_next_link_attributes');

function language_selector()
{
  $languages = apply_filters('wpml_active_languages', NULL, 'orderby=id&order=desc');

  if (!empty($languages)) {
    foreach ($languages as $l) {
      $code = $l['language_code'];
      $class = 'header__lang-menu-element';

      if (!$l['active']) {
        echo '<span class="header__lang-menu-separator"></span><a class="' . $class . '" href="' . $l['url'] . '">' . $code . '</a>';
      }
    }
  }
}

function language_current()
{
  $languages = apply_filters('wpml_active_languages', NULL, 'orderby=id&order=desc');
  if (!empty($languages)) {
    foreach ($languages as $l) {
      $code = $l['language_code'] == 'en' ? 'uk' : $l['language_code'];
      $class = 'header__lang-menu-element header__lang-menu-element--current';
      if ($l['active']) {
        echo '<p class="' . $class . '" href="' . $l['url'] . '">' . $code . '</p>';
      }
    }
  }
}
add_filter( 'redirect_canonical', 'custom_disable_redirect_canonical' );
function custom_disable_redirect_canonical( $redirect_url ) {
    if ( is_paged() && is_singular() ) $redirect_url = false; 
    return $redirect_url; 
}