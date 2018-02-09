<?php
  $database = require 'core/bootstrap.php';
 ?>

<?php

  $app['database']->delete($_GET['id']);

  // echo $_GET['id'];

  header('Location: /lemode/panel.php');
 ?>
