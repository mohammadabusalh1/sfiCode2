<!DOCTYPE html>
<?php
include 'conn/connc.php';
$selected = array();
session_start();
$_SESSION['id'] = 0;
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

        .con p {
            font-size: 16px;
            line-height: 100%;
            margin-top: 1vw;
            color: #3D5656;
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
    <div class="container text-center">
        <div class="row">
            <div class="col-12" style="padding: 0 30%;">
                <div style="background-color: white; box-shadow: 1px 4px 4px rgba(0, 0, 0, 0.25); 
    border-radius: 10px; border-style: solid; border-width: 1px; border-style: solid; 
    border-color: rgba(0, 0, 0, 0.80);">
                    <p style="font-size: 24px; line-height: 100%; margin-top: 0.2vw; color: rgba(37, 109, 133, 1);">إختر محتويات التقرير</p>

                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div id="container1" class="container text-center con" style=" background-color: white; 
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 30px; border-style: solid; 
    border-width: 1px; border-style: solid; border-color: rgba(0, 0, 0, 0.50);">
        <br><br>
        <div class="row mb-4">
            <div class="col-2"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="1" name="1" type="submit">
                    <p>إسم النشاط</p>
                </button>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="2" name="2" type="submit">
                    <p>الهدف</p>
                </button>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="3" name="3" type="submit">
                    <p>إسم المشروع</p>
                </button>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-2"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="4" name="4" type="submit">
                    <p>المحافظة</p>
                </button>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="5" name="5" type="submit">
                    <p>المنطقة</p>
                </button>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="6" name="6" type="submit">
                    <p>البرنامج</p>
                </button>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-2"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="7" name="7" type="submit">
                    <p>الروابط</p>
                </button>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="8" name="8" type="submit">
                    <p>أسماء الموظفين</p>
                </button>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="9" name="9" type="submit">
                    <p>التاريخ</p>
                </button>
            </div>
        </div>


        <div class="row mb-4">
            <div class="col-2"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="10" name="10" type="submit">
                    <p>نوع النشاط</p>
                </button>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="11" name="11" type="submit">
                    <p>تفاصيل النشاط</p>
                </button>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="12" name="12" type="submit">
                    <p>التحديات و التوصيات</p>
                </button>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-2"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="13" name="13" type="submit">
                    <p>المشاركين</p>
                </button>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="14" name="14" type="submit">
                    <p>المستفيدين</p>
                </button>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-2">
                <button style=" background-color: white; border-radius: 10px;
             border-style: solid; border-width: 1px; border-style: solid; 
             border-color: rgba(71, 181, 255, 0.60);width: 100%;" id="15" name="15" type="submit">
                    <p>المرفقات</p>
                </button>
            </div>
        </div>
        <br>
        <div class="row mb-4">
            <div class="col-4"></div>
            <div class="col-4">
                <button id="next" style="width: 80%;" class="btn btn-success"><b>التالي</b></button>
            </div>
        </div>
    </div>

    <script>
        let next = document.getElementById("next");
        next.addEventListener("click", stateHandle1);

        function stateHandle1() {
            localStorage.setItem("isSelect", isSelect);
            //alert(localStorage.getItem("storageName"))
            window.location.replace("rep2.php");
        }



        let isSelect = new Array(15);
        for (let i = 0; i < 15; i++) {
            isSelect[i] = 0;
        }

        let es = new Array(16);

        for (let i = 1; i <= 15; i++) {
            es[i] = document.getElementById(i + "");
        }

        for (let i = 1; i <= 15; i++) {
            es[i].addEventListener("click", stateHandle);

            function stateHandle() {
                if (isSelect[i - 1] == 0) {
                    es[i].style.backgroundColor = "#FED049";
                    isSelect[i - 1] = 1;
                } else {
                    es[i].style.backgroundColor = "#ffffff";
                    isSelect[i - 1] = 0;
                }
            }

        }
    </script>

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