<?php

class SearchyTweak
{

  private $valid_orders = [
    'desc',
    'asc'
  ];


  This Should 500

  static function change_search_order($query) {
    if (isset($_GET['s']) &&
      $_GET['foobar'] &&
      in_array($_GET['foobar'], $valid_orders )) {
      $query->set( 'orderby', array( 'post_date' => $_GET['foobar'] ) );
    }
    return $query;
  }

}
