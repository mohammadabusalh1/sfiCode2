<!DOCTYPE html>
<?php 
    include 'conn/connc.php';
    session_start();
    if ($_SESSION['login'] == 0) {
      echo '<script> window.location.replace("login.php")</script>';
    }
    
      $id = (int) $_GET['id'];
      $sql = "SELECT * FROM `users` WHERE id = '$id'";
      $res = mysqli_query($con,$sql);
      while ($n = mysqli_fetch_assoc($res)) {
        $username = $n['username'];
        $password = $n['password'];
        $permission = $n['permission'];  
        } 
 ?>
<head>
	<!-- head-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> المستخدمين </title>
	<meta name="author" content="Mohammad Abu Salh">

	<!-- links -->
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	 <!-- jQuery library -->
     <script src="js/jquery.min.js">
     </script>
     <!-- Latest compiled JavaScript -->
     <script src="js/bootstrap.min.js">
     </script>

	<!-- css -->
	<style type="text/css">
		.navbar{
			background-color: #D6F4FF;
      position: fixed;
      width: 100%;
		}

    .card-head{
      background-color: #E7F6F2;
    }
    .card-footer:last-child{
      background-color: #E7F6F2;
    }

    .card-header:first-child{
      background-color: #E7F6F2;
    }

    #footer {
      text-align: center;
      background-color: #D6F4FF;
      padding-top: 2vw;
      padding-bottom: 2vw;
      border-top: #A5C9CA;
      border-top-width: 2px;
      border-top-style: outset;
    }

    .imgFot{
    width: 220px;
    height: 50px;
  }

  @media only screen and (max-width: 440px) {
    .imgFot {
      width: 190px;
    height: 47px;
    }
    
  }

	</style>

</head>
<body dir="rtl">

<!-- header -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="controlPanal.php">
        <img src="img/sfi-logo.png" style=" width: 200px; height: 40px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav" style="margin-right: -2vw; width: 100%;">
        <ul class="navbar-nav" style=" width: 100%;">
          <li class="nav-item">
             <a class="nav-link" aria-current="page" href="controlPanal.php"> الرئيسية</a>
          </li>
          <li class="nav-item">
           <b> <a class="nav-link" href="users.php">المستخدمين</a> </b>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="projects.php">المشاريع</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="princpl.php">المشاركين</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="activtyNames.php">الانشطة</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="programs.php">البرامج</a>
          </li>
          <li class="nav-item" style="margin-right: 1%; margin-top: 0.2vw; text-align: left; width: 100%;">
            <form method="post" action="">
              <button type="submit" class="btn btn-danger" name="bt_logout">تسجيل الخروج</button>
            </form>
          </li>
        </ul>

        <?php

        if (isset($_POST['bt_logout'])) {
          $_SESSION['login'] = 0;
          echo '<script> window.location.replace("login.php")</script>';
        }

        ?>
      </div>
    </div>
  </nav>
<!-- ========= end of eader =========== -->

<br>
<br>
<br>
<br>
<br>
<!-- grid -->

<div class="container text-center" >
  <form method="post">

    <div class="mb-3 row">
    <label for="inputUsername" class="col-sm-12 col-md-3 col-lg-2 col-form-label">إسم المستخدم</label>
    <div class="col-sm-12 col-md-4 col-lg-3">
      <input type="text" class="form-control" name="username" <?php echo "value = ".$username." " ; ?>>
    </div>
  </div>

    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-12 col-md-3 col-lg-2 col-form-label">كلمة المرور</label>
    <div class="col-sm-12 col-md-4 col-lg-3">
      <input type="text" class="form-control" name="password" <?php echo "value = ".$password." " ; ?>>
    </div>
  </div>

    <div class="mb-3 row">
    <label for="inputPerm" class="col-sm-12 col-md-3 col-lg-2 col-form-label">الصلاحيات</label>
    <div class="col-sm-12 col-md-4 col-lg-3">
      <select class="form-select" aria-label="Default select example" name="perm">
        <option value="admin" <?php if($permission == "admin") echo 'selected = selected'; ?>> مشرف</option>
        <option value="user" <?php if($permission == "user") echo 'selected = selected'; ?> >مستخدم</option>
      </select>
    </div>
  </div>


    <div class="mb-3 row" style="text-align: left ;">
      <div class="col-3"></div>
      <div class="col-sm-2">
        <button type="submit" class="btn btn-success" name="bt_login">تعديل </button>
      </div>
  </div>

  <?php 

  if(isset($_POST['bt_login'])){
    $perm = $_POST['perm'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password) && !empty($perm) && $perm != "إختر الصلاحيات") {
      $sql = "UPDATE `users` SET `username`='$username',`password`=' $password',`permission`='$perm' WHERE id = '$id'";
      $res = mysqli_query($con,$sql);
      

      if(!$res){
       echo '<p style="margin-right: -16vw; margin-top: -0.5vw" >لم تتم الاضافة<p>';
      }else{
        echo '<script> window.location.replace("users.php#table")</script>';
      }
    }else{
        echo '<p style="margin-right: -16vw; margin-top: -0.5vw">الرجاء ملئ الحقول<p>';
      }
  }

   ?>

  </form>
  <br>
  <br>

</div>

<br>
<br>

<!-- footer ------------>
<footer>
    <div id="footer">
      <img src="img/sfi-logo.png" class="imgFot">
      <br>
      <p class="card-text" style="padding-top: 0.4vw; color: #7F8487; ">فلسطين، بيت لحم، شارع القدس الخليل - نزلة غزال - بالقرب من فرشات حرباوي.</p>
      <a href="https://ysfi.ps/Arr/index.php/ar/" class="btn btn-primary" target="blank">الموقع الرسمي</a>
    </div>

  </footer>

	
</body>
</html>