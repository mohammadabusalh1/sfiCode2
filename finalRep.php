<!DOCTYPE html>
<?php
include 'conn/connc.php';
$selected = array();
session_start();
$_SESSION['id'] = 0;
$_SESSION['show'] = 0;
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

        .link {
            color: white;
        }

        .link:hover {
            color: #FDFF00;
        }

        @media screen and (max-width: 992px) {

            .margeNavButton {
                margin-top: 2vw;
                margin-left: 8vw;
            }

            .row div {
                margin-bottom: 1vw;
            }

        }

        @media screen and (min-width:992px) {
            .navbar {
                height: 70px;
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
                left: 2%;
                top: 25%;
            }

        }

        #center1:hover {
            background-color: rgba(37, 109, 133, 1);
            border-radius: 15px;
        }

        #center2:hover {
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

<body dir="rtl" style="background-color: #DFF6FF;">
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
                            <a class="nav-link active" aria-current="page" href="IMMain.php" style=" text-decoration: none;">
                                <div>
                                    <b style="color: white; ">الرئيسية</b>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item margeNavButton" id="center2">
                            <a class="nav-link" href="activity.php" style=" text-decoration: none;">
                                <div>
                                    <b style="color: white; ">الأنشطة</b>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item margeNavButton" id="center3">
                            <a class="nav-link active" aria-current="page" href="rep.php" style="background-color: rgba(6, 40, 61, 1); 
                            border-radius: 15px;">
                                <div>
                                    <b style="color: white;">التقارير</b>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item margeNavButton" id="center4">
                            <a href="out.php" style=" text-decoration: none;">
                                <img src="img/logout2.svg" class="logout" alt="..." style="width: 40px;transform: scaleX(-1);">
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <br><br>



    <!-- body -->


    <br><br>
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