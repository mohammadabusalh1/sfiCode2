    <?php 
      include 'conn/connc.php';
      $id = (int)$_GET['id'];
      $sql = "DELETE FROM `goals` WHERE id = '$id'";
      $res = mysqli_query($con,$sql);
      echo '<script> window.location.replace("projectsEdit.php?id='.$id.'#table")</script>';
 ?>