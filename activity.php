<!DOCTYPE html>
<?php
include 'conn/connc.php';
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
                left:  2%;
                top: 25%;
            }

        }

        #center1:hover {
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


        .btn {
            background-color: #06283D;
            color: white;
            width: 100px;
        }

        .footer {
            width: 100%;
            height: 170px;
            background-color: rgba(6, 40, 61, 1);
            text-align: center;
            
        }

        @media screen and (max-width:770px) {
            .container p {
                display: none;
            }

            .container input {
                margin-top: 10px;
            }

            .container textarea {
                margin-top: 10px;
            }

            .container button {
                margin-top: 10px;
            }
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
                            <a class="nav-link" href="activity.php" style="background-color: rgba(6, 40, 61, 1); 
                            border-radius: 15px;">
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
    <form method="post">
        <div class="container" id="container">
            <div class="row">
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;">إسم النشاط</p>
                </div>
                <div class="col-3"></div>
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;"> الهدف</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="إسم النشاط" name="activtyName" id="activtyName">
                </div>
                <div class="col-1"></div>
                <div class="col-md-4">
                    <input class="form-control" list="datalistOptions" name="goal" id="goal" placeholder="الهدف">

                    <datalist id="datalistOptions">
                        <?php
                        $sql = "SELECT * FROM `goals`";
                        $res = mysqli_query($con, $sql);
                        while ($n = mysqli_fetch_assoc($res)) {
                            echo '<option value=' . $n['goal'] . '>';
                        }
                        ?>
                    </datalist>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;">إسم المشروع</p>
                </div>
                <div class="col-3"></div>
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;"> المحافظة</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <input class="form-control" list="project" name="ProjectName" id="ProjectName" placeholder="إسم المشروع">
                    <datalist id="project">
                        <?php
                        $sql = "SELECT * FROM `project`";
                        $res = mysqli_query($con, $sql);
                        while ($n = mysqli_fetch_assoc($res)) {
                            echo '<option value=' . $n['ProjectName'] . '>';
                        }
                        ?>
                    </datalist>
                </div>
                <div class="col-1"></div>
                <div class="col-md-4">
                    <input class="form-control" list="datalistOptions1" id="a1" name="a1" placeholder="المحافظة">
                    <datalist id="datalistOptions1">
                        <option value="محافظة جنين">
                        <option value="محافظة نابلس">
                        <option value="محافظة الخليل">
                        <option value="محافظة طوباس">
                        <option value="محافظة طولكرم">
                        <option value="	محافظة قلقيلية">
                        <option value="محافظة سلفيت">
                        <option value="محافظة رام الله والبيرة	">
                        <option value="محافظة أريحا">
                        <option value="محافظة القدس">
                        <option value="محافظة بيت لحم">
                    </datalist>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;">المنطقة </p>
                </div>
                <div class="col-3"></div>
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;"> البرنامج</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="area" name="area" placeholder="المنطقة">
                </div>
                <div class="col-1"></div>
                <div class="col-md-4">
                    <input class="form-control" list="datalistOptions2" id="program" name="program" placeholder="البرنامج">
                    <datalist id="datalistOptions2">
                        <?php
                        $sql = "SELECT * FROM `programs`";
                        $res = mysqli_query($con, $sql);
                        while ($n = mysqli_fetch_assoc($res)) {
                            echo '<option value=' . $n['name'] . '>';
                        }
                        ?>
                    </datalist>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;">تفاصيل النشاط</p>
                </div>
                <div class="col-3"></div>
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;">التحديات و التوصيات</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <textarea class="form-control" name="d" rows="3" placeholder="تفاصيل النشاط"></textarea>
                </div>
                <div class="col-1"></div>
                <div class="col-md-4">
                    <textarea class="form-control" name="t" rows="3" placeholder="التحديات و التوصيات"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-2 col-sm-12" style="text-align: left;">
                    <button type="submit" class="btn" name="next" id="next">التالي</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        let projectName = document.getElementById("ProjectName");
        let activtyName = document.getElementById("activtyName");
        let goal = document.getElementById("goal");
        let a1 = document.getElementById("a1");
        let area = document.getElementById("area");
        let program = document.getElementById("program");
        let button = document.getElementById("next");

        button.disabled = true; //setting button state to disabled

        projectName.addEventListener("input", stateHandle);
        activtyName.addEventListener("input", stateHandle);
        goal.addEventListener("input", stateHandle);
        a1.addEventListener("input", stateHandle);
        area.addEventListener("input", stateHandle);
        program.addEventListener("input", stateHandle);

        function stateHandle() {
            if (document.getElementById("ProjectName").value === "" ||
                document.getElementById("activtyName").value === "" || document.getElementById("goal").value === "" ||
                document.getElementById("a1").value === "" || document.getElementById("area").value === "" ||
                document.getElementById("program").value === "") {
                button.disabled = true; //button remains disabled
            } else {
                button.disabled = false; //button is enabled
            }
        }
    </script>


    <?php
    if (isset($_POST['next'])) {
        $activityName = $_POST['activtyName'];
        $goal         = $_POST['goal'];
        $projectName  = $_POST['ProjectName'];
        $a1           = $_POST['a1'];
        $area         = $_POST['area'];
        $program      = $_POST['program'];
        $d            = $_POST['d'];
        $t            = $_POST['t'];

        $sql = "INSERT INTO `activities`(`name`, `Governorate`, `area`, `details`, `challenges`)
         VALUES ('$activityName','$a1','$area','$d','$t')";
        $res = mysqli_query($con, $sql);
        $id = mysqli_insert_id($con);

        $sql1 = "SELECT `id` FROM `project` WHERE `ProjectName` = '$projectName'";
        $res1 = mysqli_query($con, $sql1);

        
        while($n = mysqli_fetch_assoc($res1)){
            $s =$n['id'];
            $sql2 = "UPDATE `goals` SET `activityId`='$id',`ProjectsId`='$s' WHERE `goal`= '$goal'";
            $res2 = mysqli_query($con, $sql2);
        }
        

        $sql4 = "UPDATE `programs` SET `activityId`='$id' WHERE `name`= '$program'";
        $res4 = mysqli_query($con, $sql4);

        $sql5 = "UPDATE `project` SET `activityId`='$id' WHERE `ProjectName`= '$projectName'";
        $res5 = mysqli_query($con, $sql5);

        $_SESSION['show']  = 1;
        $_SESSION['id'] = $id;
        if($res)
        echo '<script> window.location.replace("activity2.php")</script>';
    }
    ?>

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