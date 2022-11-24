  <?php 
      include 'conn/connc.php';
      $id = (int)$_GET['id'];
      $sql = "DELETE FROM `participants` WHERE id = '$id'";
      $res = mysqli_query($con,$sql);
      echo '<script> window.location.replace("princpl.php?#table")</script>';
 ?>