<!DOCTYPE html>
<?php
include 'conn/connc.php';
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
    <!-- Latest compiled JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

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
            margin-top: 25%;

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

    <form action="users.php" method="post">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-4 col-sm-12col-lg-3 ">
              <input class="form-control me-2" type="search" placeholder="بحث" name="keyword" id="key">
            </div>
          </div>
        </div>
      </form>
      <br><br>

      <script>
        
       let isSelect =  localStorage.getItem("selected");

          let key = document.getElementById("key");
          key.addEventListener("input", stateHandle);

          function stateHandle() {
            var filter, table, tr, td, i, txtValue;
            filter = key.value.toUpperCase();
            table = document.getElementById("table");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td")[0];
              td1 = tr[i].getElementsByTagName("td")[1];
              td2 = tr[i].getElementsByTagName("td")[2];
              td3 = tr[i].getElementsByTagName("td")[3];
              if (td) {
                txtValue = td.textContent || td.innerText;
                txtValue1 = td1.textContent || td1.innerText;
                txtValue2 = td2.textContent || td2.innerText;
                txtValue3 = td3.textContent || td3.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue1.toUpperCase().indexOf(filter) > -1
                || txtValue2.toUpperCase().indexOf(filter) > -1 || txtValue3.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                }else {
                  tr[i].style.display = "none";
                }
              }
            }
          }
        </script>

        <table class="table table-striped" id="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">الأسم</th>
                    <th scope="col">اسم المشروع</th>
                    <th scope="col">المحافظة</th>
                    <th scope="col">المنطقة</th>
                    <th scope="col">أظهر</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `activities`";
                $res = mysqli_query($con, $sql);

                if ($res) {
                    $b = 1;
                    while ($n = mysqli_fetch_assoc($res)) {

                        echo '<tr>
      <th scope="row">' . $b . '</th>
      <td>' . $n['name'] . '</td>
      <td>' . $n['Governorate'] . '</td>
      <td>' . $n['area'] . '</td>
      <td>' . $n['type'] . '</td>
      <td><a href="showAll.php?id=' .$n['id'] . '" class="btn btn-success">أظهر التقرير</a></td>
    </tr>';
                        $b++;
                    }
                } else {
                    echo '<div class="row">
            <div class="col-5 alert alert-danger" style="height:1vw ;">
            <p class="al">لم تتم إضافة البيانات</p>
            </div>
          </div>';
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
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