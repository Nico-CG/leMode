<?php
  $database = require 'core/bootstrap.php';

  $menuItems = $app['database']->selectAll('menu_items');

  $general = $app['database']->selectAll('general');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header id="panel">
      <h1>Panel de control</h1>
    </header>
    <section class="panel">
      <form action="change-article.php" method="post" enctype="multipart/form-data">
        <fieldset>
          <legend>General</legend>
          <label for="percent">Percent</label>
          <input type="number" name="percent" id="percent" value="70">
          <br>
          <label for="img#1">Img #1</label>
          <input type="file" name="img#1" id="img#1" required>
          <br>
          <label for="img#2">Img #2</label>
          <input type="file" name="img#2" id="img#2" required>
          <br>
          <label for="img#3">Img #3</label>
          <input type="file" name="img#3" id="img#3" required>
          <br>
          <input type="submit" name="" value="Save">
        </fieldset>
      </form>
      <form name="menu" action="add-item.php" onsubmit="return validateForm()" method="post">
        <fieldset>
          <legend>Menu</legend>
          <table>
            <tr>
              <th>Name</th>
              <th>Link</th>
              <th>Action</th>
            </tr>
            <?php  foreach ($menuItems as $item) : ?>
              <tr>
                <td> <?= $item->name ?> </td>
                <td> <?= $item->link ?> </td>
                <td><a href="borrar.php?id=<?=$item->id?>">Delete</a> </td>
              </tr>
            <?php endforeach;  ?>
          </table>
          <p>New Menu Item</p>
          <label for="name">Name</label>
          <input type="text" name="name" id="name" value="" required><br>
          <br>
          <label for="link">Link</label>
          <input type="text" name="link" id="link" value="" required><br>
          <span id="nameErrMsg" class="error"></span>
          <br>
          <input type="submit" name="" value="Add Item">
        </fieldset>
      </form>
      <a href="/lemode">Home</a>
    </section>

    <script src="js/panel.js"></script>
  </body>
</html>
