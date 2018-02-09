<?php
  $database = require 'core/bootstrap.php';
 ?>

<?php

  $app['database']->insert('menu_items', [

    'name' => $_POST['name'],

    'link' => $_POST['link']
  ]);

  header('Location: /lemode/panel.php');
 ?>
