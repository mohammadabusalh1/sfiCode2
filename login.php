<!DOCTYPE html>
<?php
include 'conn/connc.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
  echo '<script> window.location.replace("controlPanal.php")</script>';
} else {
  session_start();
  $_SESSION['login'] = 0;
}
?>

<head>
  <!-- head-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تسجيل الدخول</title>
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
    .container-fluid {
      background-color: white;
      padding: 0;
    }

    body {
      background-color: #EFF5F5;
    }

    .hands {
      width: 530px;
      height: 530px;
      background-position: 50% 50%;
      border-radius: 50%;
      object-fit: cover;
      background-position: 50% 50%;
      position: relative;
      margin-top: -25vw;
      margin-left: 28vw;
      box-shadow: 5px 5px 25px;
    }

    .log {
      background-color: white;
      border-radius: 30px;
      width: 540px;
      height: 550px;
      position: relative;
      direction: rtl;
      padding: 0 10%;
      margin-left: 2vw;
      margin-top: 15vw;
      z-index: 1;
      box-shadow: 5px 5px 25px;
    }

    footer {
      background-color: rgba(6, 40, 61, 1);
      text-align: center;
      padding: 2vw 0;
    }

    @media only screen and (max-width: 992px) {
      .dis {
        display: none;
      }

      .log {
        margin-left: 0vw;
        margin: 15%;
        width: auto;
        height: auto;
      }
    }

    .cir {
      width: 580px;
      height: 590px;
      background-color: #2f34df;
      border-radius: 50%;
      box-shadow: 5px 5px 25px;
      margin-left: -2.5vw;
    }

    .btn {
      background-color: #06283D;
      color: white;
    }
  </style>

</head>

<body>

<form method="post">
    <div class="container-flud">
      <br><br>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-2">
          <div class="log">
            <br><br>
            <div style="width: 100%; text-align: center;">
              <h2><b>تسجيل الدخول</b></h2>
            </div>
            <br>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">اسم المستخدم</label>
              <input type="text" class="form-control" name="username" id="username" 
              placeholder="إسم المستخدم الخاص بك">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"> كلمة المرور</label>
              <input type="password" class="form-control" name="password" id="inputPassword" 
              style="background-color: #EEEEEE;" placeholder="كلمة المرور الخاصة بك">
            </div>

            <br>
            <ul class="list-group" style="margin-right: -3vw;">
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="type" value="admin" id="firstRadio" checked>
                <label class="form-check-label" for="firstRadio">مدير</label>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="type" value="user" id="secondRadio">
                <label class="form-check-label" for="secondRadio">موظف</label>
              </li>
            </ul>

            <br><br>
            <div style="width: 100%;">
              <button type="submit" style="width: 100%;" name="login" class="btn">تسجيل الدخول</button>
            </div>
            <br><br>
          </div>
        </div>
        <div class="col-lg-4 dis">
          <div class="cir"></div>
          <img src="img\hands.jpg" alt="..." class="hands">
        </div>
      </div>
    </div>
  </form>
  <script>
    let input = document.getElementById("password");
    let inputuser = document.getElementById("username");
    let button = document.getElementById("login");

    button.disabled = true; //setting button state to disabled

    input.addEventListener("input", stateHandle);
    inputuser.addEventListener("input", stateHandle);

    function stateHandle() {
      if (document.getElementById("password").value === "" ||
        document.getElementById("username").value === "") {
        button.disabled = true; //button remains disabled
      } else {
        button.disabled = false; //button is enabled
      }
    }
  </script>

  <?php
  $click = isset($_POST['login']);
  if ($click) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $perm = $_POST['type'];

  if ($perm == "user") {
    $sql = " SELECT * FROM `users` WHERE username = '$username' AND password = '$password' AND permission = 'user' ";
    $res = mysqli_query($con, $sql);

    while ($n = mysqli_fetch_assoc($res)) {
      $_SESSION['login'] = 1;
      echo '<script> window.location.replace("IMMain.php")</script>';
    }

    echo '<div class=" row" style="text-align: left ;">
  <div class="col-md-8 col-sm-12">
  <div class="alert alert-danger d-flex align-items-center" role="alert" style="height:1vw ;">
    المستخدم غير موجود
  </div>
  </div>';
  } else if ($perm == "admin") {
    $sql = " SELECT * FROM `users` WHERE username = '$username' AND password = '$password' AND permission = 'admin' ";
    $res = mysqli_query($con, $sql);

    if ($res) {
      while ($n = mysqli_fetch_assoc($res)) {
        $_SESSION['login'] = 1;
        echo '<script> window.location.replace("controlPanal.php")</script>';
      }


      echo '<div class=" row" style="text-align: left ;">
    <div class="col-md-8 col-sm-12">
    <div class="alert alert-danger d-flex align-items-center" role="alert" style="height:1vw ;">
      المستخدم غير موجود
    </div>
    </div>';
    }
  }
}

  ?>


  <br><br><br>

  <footer>
    <h6 style="color: white;">جميع الحقوق محفوظة</h6>
  </footer>

</body>

</html>