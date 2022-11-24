    <?php 
      include 'conn/connc.php';
      $id = (int)$_GET['id'];
      $sql = "DELETE FROM `project` WHERE id = '$id'";
      $res = mysqli_query($con,$sql);
      $sql1 = "DELETE FROM `goals` WHERE ProjectsId = '$id'";
      $res1 = mysqli_query($con,$sql1);
      echo '<script> window.location.replace("projects.php#table")</script>';
 ?>