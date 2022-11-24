  <?php 
      include 'conn/connc.php';
      $id = (int)$_GET['id'];
      $sql = "DELETE FROM `activitynames` WHERE id = '$id'";
      $res = mysqli_query($con,$sql);
      echo '<script> window.location.replace("activtyNames.php?id='.$id.'#table")</script>';
 ?>