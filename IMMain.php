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
  <title>الرئيسية</title>
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
      background-color: rgba(71, 181, 255, 1);
    }

    #navbarSupportedContent {
      text-align: center;
    }

    .a {
      width: 161.88px;
      height: 161.88px;
      background-color: rgba(37, 109, 133, 1);
      margin-top: 6vw;
      padding-right: 1vw;
      padding-top: 1vw;
      border-radius: 20px;
      transition: 0.7s;
    }

    .a1 {
      width: 161.88px;
      height: 161.88px;
      background-color: rgba(37, 109, 133, 1);
      margin-top: 10vw;
      padding-right: 1vw;
      padding-top: 1vw;
      margin-right: 3vw;
      border-radius: 20px;
      transition: 0.7s;
    }


    .a:hover {
      background-color: #9EB23B;
    }

    .link {
      color: white;
    }

    .link:hover {
      color: #FDFF00;
    }

    .a1:hover {
      background-color: #9EB23B;
    }

    @media screen and (max-width: 992px) {
      #img {
        display: none;
      }

      .a1 {
        margin-top: 6vw;
        margin-right: 30%;
      }

      .a {
        margin-right: 30%;
        
      }


      .cont {
        text-align: center;
      }

      .margeNavButton{
        margin-top: 2vw;
        margin-left: 8vw;
      }
 
    }

    @media screen and (min-width:768px) {
      .br{
        display: block;
      }
    }


    @media screen and (min-width:992px) {

      .navbar {
                height: 70px;
            }
            
      .br{
      display: none;
    }
     
      #col {
        display: none;
      }

      #center1 {
                position: absolute;
                right: 35%;
                top: 25%;
                border-radius: 15px;
                width: 100px;
                text-decoration: none;
                transition: 0.5s;
            }

            #center2 {
                position: absolute;
                right: 45%;
                top: 25%;
                width: 90px;
            }

            #center3 {
                position: absolute;
                right: 55%;
                top: 25%;
                border-radius: 15px;
                width: 100px;
                text-decoration: none;
                transition: 0.5s;
            }

            #center4 {
                position: absolute;
                left:  2%;
                top: 25%;
            }
    }

    #center2:hover {
        background-color: rgba(37, 109, 133, 1);
        border-radius: 15px;
      }

      #center3:hover {
        background-color: rgba(37, 109, 133, 1);
        border-radius: 15px;
      }
 
    .logout {
      width: 40px;
      transform: scaleX(-1);
    }

    .logout:hover {
      opacity: 0.7;
    }


    .footer {
      width: 100%;
      height: 170px;
      background-color: rgba(6, 40, 61, 1);
      text-align: center;
    }
  </style>

</head>

<body dir="rtl">
  <!-- header ------------>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="IMMain.php">
          <img src="img/logo.png" alt="..." style="width: 70px ; height: 60px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item margeNavButton" id="center1">
              <a class="nav-link active" aria-current="page" href="IMMain.php" style="background-color: rgba(6, 40, 61, 1); border-radius: 15px;
              text-decoration: none;">
                <div>
                  <b style="color: white; ">الرئيسية</b>
                </div>
              </a>
            </li>
            <li class="nav-item margeNavButton" id="center2">
              <a class="nav-link" href="activity.php" style="text-decoration: none;">
                <div>
                  <b style="color: white; ">الأنشطة</b>
                </div>
              </a>
            </li>
            <li class="nav-item margeNavButton" id="center3">
              <a class="nav-link active" aria-current="page" href="rep.php" style=" text-decoration: none;">
                <div>
                  <b style="color: white;">التقارير</b>
                </div>
              </a>
            </li>
            <li class="nav-item margeNavButton" id="center4">
              <a href="out.php" style=" text-decoration: none;">
                <img src="img/logout2.svg" alt="..." class="logout">
              </a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>

  <br><br>

  <!-- body -->
  <div class="cont">
    <div class="container">
      <div class="row">
        <div class="col-sm-2" id="col"></div>
        <div class="col-sm-5 col-md-2">
          <a href="activity.php" style="text-decoration: none;">
            <div class="a">
              <img src="img/list-svg.svg" style="width: 40%;" alt="...">
              <h4 style="color: white; margin-top:2vw;margin-right:2vw;">الأنشطة</h4>
            </div>
          </a>
        </div>
        <div class="col-sm-2" id="col"></div>
        <div class="col-sm-12 col-md-2 ">
          <a href="rep.php" style="text-decoration: none;">
            <div class="a1">
              <img src="img/rep-svg.svg" style="width: 40%;" alt="...">
              <h4 style="color: white; margin-top:2vw;margin-right:2.4vw;">التقارير</h4>
            </div>
          </a>
        </div>
        <div class="col-1"></div>

        <div class="col-sm-12 col-md-5" style="margin-right: 3vw;" id="img">
          <img src="img/main1.jpg" alt="..." style="width: 100%; height: 100%; margin-right: 12vw;">
        </div>
      </div>
    </div>
    <br><br>
  </div>
  <br class="br"><br class="br">
  <!-- footer -->
  <footer class="footer">
    <br>
    <img src="img/sfi-logo.png" alt="...">
    <center>
      <hr style="color: white; width: 70%; border-width: 3px; border-color: white;">
    </center>
    <div class="container text-center">
      <div class="row">
        <div class="col-4">
          <a href="IMMain.php" class="link" style="text-decoration: none;"><b>الرئيسية</b></a>
        </div>
        <div class="col-4">
          <a href="activity.php" class="link" style="text-decoration: none;"><b>الأنشطة</b></a>
        </div>
        <div class="col-4">
          <a href="rep.php" class="link" style="text-decoration: none;"> <b>التقارير</b></a>
        </div>
      </div>
    </div>
    </div>
  </footer>

</body>

</html>