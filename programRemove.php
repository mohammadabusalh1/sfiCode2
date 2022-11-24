   <?php 
      include 'conn/connc.php';
      $id = (int)$_GET['id'];
      $sql = "DELETE FROM `programs` WHERE id = '$id'";
      $res = mysqli_query($con,$sql);
      echo '<script> window.location.replace("programs.php?#table")</script>';
 ?>