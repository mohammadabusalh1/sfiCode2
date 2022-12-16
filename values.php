<?php
include 'conn/connc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery library -->
    <!-- Latest compiled JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>

<body>
    <br><br>
    <div class="row mb-3">
        <div class="col-1"></div>
        <div class="col-sm-12 col-md-5">
            <input id="gole" class="form-control" list="datalistOptions" placeholder="الهدف">
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
        <div class="col-sm-12 col-md-5">
            <input id="proName" class="form-control" list="project" placeholder="إسم المشروع">
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
    </div>
    <div class="row mb-3">
        <div class="col-1"></div>
        <div class="col-sm-12 col-md-5">
            <form method="post">
                <input class="form-control" name="Governorate" id="Governorate" list="datalistOptions1" placeholder="المحافظة">
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
            </form>
        </div>

        <div class="col-sm-12 col-md-5">
            <input id="area" class="form-control" list="area" placeholder="المنطقة">
            <datalist id="area">
                <?php
                $gov = $_POST['Governorate'];
                $sql = "SELECT * FROM `activities`";
                $res = mysqli_query($con, $sql);
                while ($n = mysqli_fetch_assoc($res)) {
                    if ($n['Governorate'])
                        echo '<option value=' . $n['area'] . '>';
                }
                ?>

            </datalist>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-1"></div>
        <div class="col-sm-12 col-md-5">
            <div class="input-group">
                <span class="input-group-text">التاريخ</span>
                <input id="dFrom" type="date" placeholder="من" aria-label="First name" class="form-control">
                <input id="dTo" type="date" placeholder="إلى" aria-label="Last name" class="form-control">
            </div>
        </div>
        <div class="col-sm-12 col-md-5">
            <input id="prog" class="form-control" list="program" placeholder="البرنامج">

            <datalist id="program">
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
    <br>
    <div class="row mb-4">
        <div class="col-4"></div>
        <div class="col-4">
            <a href="showReport.php" style="width: 80%;" class="btn btn-success"><b>أظهر التقرير</b></a>
        </div>
    </div>
    <br>

</body>

</html>