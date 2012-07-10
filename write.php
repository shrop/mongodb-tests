<?php

$user = array(
  'first_name' => 'MongoDB',
  'last_name' => 'Fan',
  'tags' => array('developer','user')
);

// Configuration
  $dbhost = 'localhost';
  $dbname = 'test';

  // Connect to test database
  $m = new Mongo("mongodb://$dbhost");
  $db = $m->$dbname;

  // Get the users collection
  $c_users = $db->users;

  // Insert this new document into the users collection
  $c_users->save($user);

?>
