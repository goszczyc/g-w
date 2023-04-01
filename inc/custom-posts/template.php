<?php
function register_specialities_post_type(){

  $labels = array(
    'name'                  => _x( 'Specjalizacje', 'Post type general name', 'textdomain' ),
    'singular_name'         => _x( 'Specjalizacja', 'Post type singular name', 'textdomain' ),
    'menu_name'             => _x( 'Specjalizacje', 'Admin Menu text', 'textdomain' ),
    'name_admin_bar'        => _x( 'Specjalizację', 'Add New on Toolbar', 'textdomain' ),
    'add_new_item'          => __( 'Dodaj nową Specjalizację', 'textdomain' ),
    'new_item'              => __( 'Nowa Specjalizacja', 'textdomain' ),
    'edit_item'             => __( 'Edytuj Specjalizację', 'textdomain' ),
    'view_item'             => __( 'Zobacz Specjalizację', 'textdomain' ),
    'all_items'             => __( 'Wszystkie Specjalizacjy', 'textdomain' ),
    'search_items'          => __( 'Szukaj Specjalizacjy', 'textdomain' ),
    'parent_item_colon'     => __( 'Rodzic Specjalizacjy:', 'textdomain' ),
    'not_found'             => __( 'Specjalizacjy nie znalezione.', 'textdomain' ),
    'not_found_in_trash'    => __( 'Nie ma żadnych Specjalizacj w koszu.', 'textdomain' ),
    'featured_image'        => _x( 'Okładka Specjalizacj', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'set_featured_image'    => _x( 'Ustaw okładkę Specjalizacj', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'remove_featured_image' => _x( 'Usuń okładkę Specjalizacj', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'archives'              => _x( 'Archiwum Specjalizacj', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    'insert_into_item'      => _x( 'Wprowadź do Specjalizacj', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
    'uploaded_to_this_item' => _x( 'Uaktualnij Specjalizację', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
    'filter_items_list'     => _x( 'Filtruj listę Specjalizacj', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
    'items_list_navigation' => _x( 'Menu Listy Specjalizacj', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
    'items_list'            => _x( 'Lista Specjalizacj', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'specjalizacje' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'show_in_menu'        => TRUE,
    'show_in_nav_menus'   => TRUE,
    'show_in_rest' => true,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail','excerpt'),
    'menu_icon'          => 'dashicons-clipboard',
  );

  register_post_type( 'specialities', $args );
}

add_action('init', 'register_specialities_post_type');

?>