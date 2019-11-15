<?php
/**
 * Plugin Name: Search Tweaker
 */

 function change_search_order($query) {
   if ($_GET['s'] != '' &&
     $_GET['order'] &&
     in_array($_GET['order'], $valid_orders )) {
     $query->set( 'orderby', array( 'post_date' => $_GET['order'] ) );
   }
   return $query;
 }

add_action( 'pre_get_posts', 'change_search_order' );
