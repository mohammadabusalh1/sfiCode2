<?php 
      include 'conn/connc.php';
      $id = (int)$_GET['id'];
      $sql = "DELETE FROM `users` WHERE id = '$id'";
      $res = mysqli_query($con,$sql);
      echo '<script> window.location.replace("users.php#table")</script>';
 ?>