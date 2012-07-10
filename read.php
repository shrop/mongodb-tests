<?php

// Configuration
  $dbhost = 'localhost';
  $dbname = 'test';

  // Connect to test database
  $m = new Mongo("mongodb://$dbhost");
  $db = $m->$dbname;

  // Get the users collection
  $c_users = $db->users;

  // Find the user with first_name 'MongoDB' and last_name 'Fan'
  $user = array(
    'first_name' => 'MongoDB',
    'last_name' => 'Fan'
  );

  $user = $c_users->findOne($user);
  var_dump($user);

  ?>
