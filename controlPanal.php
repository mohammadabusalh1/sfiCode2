<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['login'] == 0) {
  echo '<script> window.location.replace("login.php")</script>';
}
?>

<head>
  <!-- head-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>لوحة التحكم </title>
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
   .navbar {
      background-color: #D6F4FF;
    }

    .card-head {
      background-color: #E7F6F2;
    }

    .card-footer:last-child {
      background-color: #E7F6F2;
    }

    .card-header:first-child {
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

    @media only screen and (max-width: 770px) {
      .br {
        display: none;
      }

    }

    .imgFot {
      width: 220px;
      height: 50px;
    }

    @media only screen and (max-width: 440px) {
      .imgFot {
        width: 190px;
        height: 47px;
      }

    }

    .logout {
      width: 40px;
      transform: scaleX(-1);
    }

    .logout:hover {
      opacity: 0.7;
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
      <div class="collapse navbar-collapse" id="navbarNav" style="margin-right: -2vw;">
        <ul class="navbar-nav" style=" width: 100%;">
          <li class="nav-item">
            <b> <a class="nav-link" aria-current="page" href="controlPanal.php"> الرئيسية</a></b>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users.php">المستخدمين</a>
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
          <li class="nav-item">
            <a class="nav-link" href="nickname.php">المسميات</a>
          </li>
          <li class="nav-item" style="margin-right: 1%; margin-top: 0.2vw; text-align: left; width: 100%;">
            <form method="post" action="">
              <button type="submit" class="btn btn-danger" name="bt_logout" >تسجيل الخروج</button>
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
  <br class="br"><br class="br">
  <br>
  <!-- grid -->

  <div class="container text-center">
    <center>

      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="card border-info mb-3" style="max-width: 18rem;">
            <div class="card-header">

              <a href="users.php" style="text-decoration: none;">
                <div class="container text-center">
                  <div class="row">
                    <div class="col-2 "></div>
                    <div class="col-sm-2 col-md-2">
                      <img src="img/user.png" style=" width: 20px; height: 20px; margin-left: 1vw;">
                    </div>
                    <div class="col-sm-5 col-md-7 col-lg-5 ">
                      <h6 style=" color: black; margin-top: 0.5vw; ">المستخدمين</h6>
                    </div>
                  </div>
                </div>
              </a>

            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="users.php" style="text-decoration: none; color: black;">قسم إدارة المستخدمين</a></h5>
              <p class="card-text">انشاء مستخدم، حذف مستخدم، تعديل مستخدم، اعطاء المستخدمين الصلاحيات.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="card border-info mb-3" style="max-width: 18rem;">

            <div class="card-header">
              <a href="projects.php" style="text-decoration: none;">
                <div class="container text-center">
                  <div class="row">
                    <div class="col-2 "></div>
                    <div class="col-sm-2 col-md-2">
                      <img src="img/blueprint.png" style=" width: 20px; height: 20px; margin-left: 1vw;">
                    </div>
                    <div class="col-sm-6 col-md-8 col-lg-6">
                      <h6 style=" color: black; margin-top: 0.5vw; ">إدارة المشاريع</h6>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="projects.php" style="text-decoration: none; color: black;">قسم إدارة المشاريع</a></h5>
              <p class="card-text">اضافة مشروع، حذف مشروع، تعديل مشروع، يتم استخدامها عند اضافة نشاط.</p>
            </div>
          </div>
        </div>
        <div class=" col-sm-12 col-md-4">
          <div class="card border-info mb-3" style="max-width: 18rem; height: 11.7rem;">
            <div class="card-header">

              <a href="princpl.php" style="text-decoration: none;">
                <div class="container text-center">
                  <div class="row">
                    <div class=" col-2 "></div>
                    <div class="col-sm-2 col-md-2">
                      <img src="img/participation.png" style=" width: 20px; height: 20px; margin-left: 1vw;">
                    </div>
                    <div class="col-sm-5 col-md-7 col-lg-5">
                      <h6 style=" color: black; margin-top: 0.5vw; ">المشاركين </h6>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="princpl.php" style="text-decoration: none; color: black;">قسم إدارة المشاركين</a></h5>
              <p class="card-text"> إضافة مشارك، حذف مشارك، ليتم استخدامهم عند اضافة نشاط.</p>
            </div>
          </div>
        </div>
      </div>
      <br class="br">
      <br class="br">
      <div class="row">
        <div class=" col-sm-12 col-md-4">
          <div class="card border-info mb-3" style="max-width: 18rem;">
            <div class="card-header">

              <a href="activtyNames.php" style="text-decoration: none;">
                <div class="container text-center">
                  <div class="row">
                    <div class=" col-2"></div>
                    <div class="col-sm-2 col-md-2">
                      <img src="img/checklist.png" style=" width: 20px; height: 20px; margin-left: 1vw;">
                    </div>
                    <div class=" col-sm-6 col-md-8 col-lg-6">
                      <h6 style="color: black; margin-top: 0.5vw; ">أسماء الأنشطة </h6>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="activtyNames.php" style="text-decoration: none; color: black;">قسم إدارة الأنشطة</a></h5>
              <p class="card-text">ضافة إسم نشاط، حذف إسم نشاط، ليتم استخدامهم عند اضافة نشاط.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="card border-info mb-3" style="max-width: 18rem;">
            <div class="card-header">

              <a href="programs.php" style="text-decoration: none;">
                <div class="container text-center">
                  <div class="row">
                    <div class=" col-3 "></div>
                    <div class="col-sm-2 col-md-2">
                      <img src="img/prog.png" style=" width: 20px; height: 20px; margin-left: 1vw;">
                    </div>
                    <div class="col-sm-4 col-md-6 col-lg-4">
                      <h6 style="color: black; margin-top: 0.5vw; ">البرامج</h6>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="programs.php" style="text-decoration: none; color: black;">قسم إدارة البرامج</a></h5>
              <p class="card-text">إضافة برنامج، حذف برنامج، ليتم استخدامهم عند اضافة نشاط.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-4">
          <div class="card border-info mb-3" style="max-width: 18rem;">
            <div class="card-header">

              <a href="nickName.php" style="text-decoration: none;">
                <div class="container text-center">
                  <div class="row">
                    <div class=" col-2 "></div>
                    <div class="col-sm-4 col-md-6 col-lg-8">
                      <h6 style="color: black; margin-top: 0.5vw; ">المسميات الوظيفية</h6>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="nickName.php" style="text-decoration: none; color: black;">قسم المسميات الوظيفية</a></h5>
              <p class="card-text">إضافة لقب، حذف لقب، ليتم استخدامهم عند اضافة نشاط.</p>
            </div>
          </div>
        </div>

      </div>
    </center>
  </div>

  <br>
  <br>
  <br>

  <!-- footer ------------>
  <footer>
    <div id="footer">
      <img src="img/sfi-logo.png" class="imgFot">
      <br>
      <p class="card-text" style="padding-top: 0.3vw; color: #7F8487; padding-left: 0.3vw; padding-right: 0.3vw; ">فلسطين، بيت لحم، شارع القدس الخليل - نزلة غزال - بالقرب من فرشات حرباوي.</p>
      <a href="https://ysfi.ps/Arr/index.php/ar/" class="btn btn-primary" target="blank">الموقع الرسمي</a>
    </div>

  </footer>

</body>

</html>