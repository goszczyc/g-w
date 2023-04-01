<?php
/*************** MENU ***************/
add_action( 'init', 'register_menu' );
function register_menu() {
  register_nav_menus(array(
    'nav-top' => 'Menu górne',
    'burger-menu' => 'Menu w burgerze',
    'nav-bottom' => 'Stopka - menu główne',
    'specialities-bottom' => 'Stopka - menu specjalizacje',
  ));
}
?>
