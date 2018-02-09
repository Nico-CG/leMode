<?php
  $database = require 'core/bootstrap.php';
 ?>

<?php

  // Upload image

  $target1 = "uploads/" . basename($_FILES["img#1"]["name"]);
  $target2 = "uploads/" . basename($_FILES["img#2"]["name"]);
  $target3 = "uploads/" . basename($_FILES["img#3"]["name"]);
  $image1= $_FILES["img#1"]["name"];
  $image2= $_FILES["img#2"]["name"];
  $image3= $_FILES["img#3"]["name"];


  // $uploadOk = 1;
  // $imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
  // // Check if image file is a actual image or fake image
  // $check = getimagesize($_FILES["img#1"]["tmp_name"]);
  // if($check !== false) {
  //     echo "File is an image - " . $check["mime"] . ".";
  //     $uploadOk = 1;
  // } else {
  //     echo "File is not an image.";
  //     $uploadOk = 0;
  // }
  // // Check if file already exists
  // if (file_exists($target)) {
  //     echo "Sorry, file already exists.";
  //     $uploadOk = 0;
  // }
  // // Check file size
  // if ($_FILES["img#1"]["size"] > 500000) {
  //     echo "Sorry, your file is too large.";
  //     $uploadOk = 0;
  // }
  // // Check if $uploadOk is set to 0 by an error
  // if ($uploadOk == 0) {
  //     echo "Sorry, your file was not uploaded.";
  // // if everything is ok, try to upload file
  // } else {
      if (move_uploaded_file($_FILES["img#1"]["tmp_name"], $target1)) {
          echo "The file ". basename( $_FILES["img#1"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file 1.";
      }
      if (move_uploaded_file($_FILES["img#2"]["tmp_name"], $target2)) {
          echo "The file ". basename( $_FILES["img#2"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file 2.";
      }
      if (move_uploaded_file($_FILES["img#3"]["tmp_name"], $target3)) {
          echo "The file ". basename( $_FILES["img#3"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file 3.";
      }
  // }

  echo $target;

  $app['database']->insert('general', [

    'percent' => $_POST['percent'],

    'img1' => $image1,

    'img2' => $image2,

    'img3' => $image3
  ]);


  header('Location: /lemode');
 ?>
