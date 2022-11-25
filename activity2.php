<!DOCTYPE html>
<?php
include 'conn/connc.php';
session_start();
if ($_SESSION['login'] == 0) {
    echo '<script> window.location.replace("login.php")</script>';
}

// if ($_SESSION['show'] == 0) {##
//     echo '<script> window.location.replace("activity.php")</script>';
// }
$id = $_SESSION['id'];
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


        .btncolor {
            background-color: #06283D;
            color: white;
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
    <form method="post" enctype="multipart/form-data">
        <div class="container" id="container">
            <div class="row">
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;">نوع النشاط</p>
                </div>
                <div class="col-3"></div>
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;"> التاريخ</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="نوع النشاط" name="activtyType" id="activtyType">
                </div>
                <div class="col-1"></div>
                <div class="col-md-4">
                    <input type="date" class="form-control" name="date" id="date">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;">المشارك </p>
                </div>
                <div class="col-3"></div>
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;"> اللقب</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <input class="form-control" list="datalistOptions1" id="pre" name="pre" placeholder="المشارك">
                    <datalist id="datalistOptions1">
                        <?php
                        $sql = "SELECT * FROM `participants`";
                        $res = mysqli_query($con, $sql);
                        while ($n = mysqli_fetch_assoc($res)) {
                            echo '<option value=' . $n['name'] . '>';
                        }
                        ?>
                    </datalist>
                </div>
                <div class="col-1"></div>
                <div class="col-md-4">
                    <input class="form-control" list="datalistOptions" id="preName" name="preName" placeholder="اللقب">
                    <datalist id="datalistOptions">
                        <?php
                        $sql = "SELECT * FROM `nicknames`";
                        $res = mysqli_query($con, $sql);
                        while ($n = mysqli_fetch_assoc($res)) {
                            echo '<option value=' . $n['Nickname'] . '>';
                        }
                        ?>
                    </datalist>
                </div>

                <div class="col-md-1 col-sm-12" style="text-align: left;">
                    <button type="submit" class="btn btncolor" name="preAdd" id="preAdd">اضف</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;">عدد المستفيدين</p>
                </div>
                <div class="col-3"></div>
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;"> اسماء الموظفين </p>

                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="number" class="form-control" id="benNum" name="benNum" placeholder="عدد المستفيدين">
                </div>
                <div class="col-1"></div>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="empName" name="empName" placeholder="اسماء الموظفين">
                </div>
                <div class="col-md-1 col-sm-12" style="text-align: left;">
                    <button type="submit" class="btn btncolor" name="empNameAdd" id="empNameAdd">اضف</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;">عدد المستفيدين الذكور</p>
                </div>
                <div class="col-3"></div>
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;"> اسم المستفيد</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="number" class="form-control" id="benMaleNum" name="benMaleNum" placeholder="عدد المستفيدين الذكور">
                </div>
                <div class="col-1"></div>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="benName" name="benName" placeholder="اسم المستفيد">
                </div>
                <div class="col-md-1 col-sm-12" style="text-align: left;">
                    <button type="submit" class="btn btncolor" name="benNameAdd" id="benNameAdd">اضف</button>
                </div>

            </div>

            <div class="row">
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;">عدد المستفيدين تحت 18</p>
                </div>
                <div class="col-3"></div>
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;">روابط</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="number" class="form-control" id="ben18Num" name="ben18Num" placeholder="عدد المستفيدين تحت 18 ">
                </div>
                <div class="col-1"></div>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="link" name="link" placeholder="روابط">
                </div>
                <div class="col-md-1 col-sm-12" style="text-align: left;">
                    <button type="submit" class="btn btncolor" name="addLink" id="addLink">اضف</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;">عدد المستفيدين 18-30</p>
                </div>
                <div class="col-3"></div>
                <div class="col-md-2">
                    <p style="color: rgba(37, 109, 133, 0.70);font-size: 16px;">مرفقات</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="number" class="form-control" id="ben1830Num" name="ben1830Num" placeholder="عدد المستفيدين 18-30 ">
                </div>
                <div class="col-1"></div>
                <div class="col-md-4">
                    <input class="form-control" type="file" id="formFile" name="fileToUpload">
                </div>
                <div class="col-md-1 col-sm-12" style="text-align: left;">
                    <button type="submit" class="btn btncolor" name="formFileAdd" id="formFileAdd">اضف</button>
                </div>
            </div>

            <?php
            if (isset($_POST['formFileAdd'])) {
                $updir = 'atc/';
                $upload = $updir.basename($_FILES['fileToUpload']['name']);
                if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $upload)) {
                    $formFile = $_FILES['fileToUpload']['name'];
                    $sql = "INSERT INTO `attachments`(`name`, `activityId`) VALUES ('$formFile','$id')";
                    $res = mysqli_query($con, $sql);
                } else {
                    echo '<div class=" row" style="text-align: left ;">
        <div class="col-md-8 col-sm-12">
        <div class="alert alert-danger d-flex align-items-center" role="alert" style="height:1vw ;">
          لم يتم رفع الملف
        </div>
        </div>';
                }
            }
            ?>

            <br><br>

            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-3 col-sm-12" style="text-align: center;">
                    <button type="submit" class="btn btn-success" name="next" style="font-size: 18px;" id="addact">أضف نشاط</button>
                </div>
            </div>
        </div>
    </form>

    <?php
    if (isset($_POST['preAdd'])) {
        $pre = $_POST['pre'];
        $preName = $_POST['preName'];
        $sql = "UPDATE `participants` SET `nickname`='$preName',`activityId`='$id' WHERE `name`= '$pre'";
        $res = mysqli_query($con, $sql);
    }

    if (isset($_POST['empNameAdd'])) {
        $empName = $_POST['empName'];
        $sql = "INSERT INTO `employees`(`name`, `activityId`) VALUES ('$empName','$id')";
        $res = mysqli_query($con, $sql);
    }

    if (isset($_POST['addLink'])) {
        $link = $_POST['link'];
        $sql = "INSERT INTO `links`(`name`, `activityId`) VALUES ('$link','$id')";
        $res = mysqli_query($con, $sql);
    }

    if (isset($_POST['benNameAdd'])) {
        $benName = $_POST['benName'];
        $sql = "INSERT INTO `beneficiaries`(`name`, `activityId`) VALUES ('$benName','$id')";
        $res = mysqli_query($con, $sql);
    }
    ?>

    <script>
        let activtyType = document.getElementById("activtyType");
        let date = document.getElementById("date");
        let benMaleNum = document.getElementById("benMaleNum");
        let ben18Num = document.getElementById("ben18Num");
        let ben1830Num = document.getElementById("ben1830Num");
        let button = document.getElementById("addact");

        let pre = document.getElementById("pre");
        let preName = document.getElementById("preName");
        let benName = document.getElementById("benName");
        let empName = document.getElementById("empName");
        let link = document.getElementById("link");
        let formFile = document.getElementById("formFile");


        let add1 = document.getElementById("preAdd");
        let add2 = document.getElementById("empNameAdd");
        let add3 = document.getElementById("benNameAdd");
        let add4 = document.getElementById("addLink");
        let add5 = document.getElementById("formFileAdd");

        button.disabled = true; //setting button state to disabled

        add1.disabled = true;
        add2.disabled = true;
        add3.disabled = true;
        add4.disabled = true;
        add5.disabled = true;

        benName.addEventListener("input", stateHandle6);
        pre.addEventListener("input", stateHandle1);
        preName.addEventListener("input", stateHandle1);
        empName.addEventListener("input", stateHandle3);
        link.addEventListener("input", stateHandle4);
        formFile.addEventListener("input", stateHandle5);



        activtyType.addEventListener("input", stateHandle);
        date.addEventListener("input", stateHandle);
        pre.addEventListener("input", stateHandle);
        preName.addEventListener("input", stateHandle);
        benMaleNum.addEventListener("input", stateHandle);
        ben18Num.addEventListener("input", stateHandle);
        ben1830Num.addEventListener("input", stateHandle);

        function stateHandle() {
            if (document.getElementById("activtyType").value === "" ||
                document.getElementById("date").value === "" || document.getElementById("benMaleNum").value === "" ||
                document.getElementById("ben18Num").value === "" || document.getElementById("ben1830Num").value === "") {
                button.disabled = true; //button remains disabled
            } else {
                button.disabled = false; //button is enabled
            }
        }

        function stateHandle1() {
            if (document.getElementById("pre").value === "" ||
                document.getElementById("preName").value === "") {
                add1.disabled = true; //button remains disabled
            } else {
                add1.disabled = false; //button is enabled
            }
        }

        function stateHandle4() {
            if (document.getElementById("link").value === "") {
                add4.disabled = true; //button remains disabled
            } else {
                add4.disabled = false; //button is enabled
            }
        }

        function stateHandle5() {
            if (document.getElementById("formFile").value === "") {
                add5.disabled = true; //button remains disabled
            } else {
                add5.disabled = false; //button is enabled
            }
        }

        function stateHandle3() {
            if (document.getElementById("empName").value === "") {
                add2.disabled = true; //button remains disabled
            } else {
                add2.disabled = false; //button is enabled
            }
        }

        function stateHandle6() {
            if (document.getElementById("benName").value === "") {
                add3.disabled = true; //button remains disabled
            } else {
                add3.disabled = false; //button is enabled
            }
        }
    </script>



    <?php
    if (isset($_POST['next'])) {
        $activtyType = $_POST['activtyType'];
        $date = $_POST['date'];
        $benNum = $_POST['benNum'];
        $ben18Num = $_POST['ben18Num'];
        $benMaleNum = $_POST['benMaleNum'];
        $ben1830Num = $_POST['ben1830Num'];
        $id = $_SESSION['id'];
        $fmale = $benNum - $benMaleNum;
        $num30 = $benNum - ($ben18Num + $ben1830Num);

        $sql = "UPDATE `activities` SET `type`='$activtyType',`date`='$date'
        ,`numberBeneficiaries`='$benNum',`numberBeneficiariesMale`='$benMaleNum',
        `numberBeneficiariesFmale`='$fmale',`numberBeneficiaries-18`='$ben18Num',
        `numberBeneficiaries+18-30`='$ben1830Num',`numberBeneficiaries+30`='$num30' WHERE `id` = '$id'";
        $res = mysqli_query($con, $sql);
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