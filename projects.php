<!DOCTYPE html>
<?php 
    include 'conn/connc.php';
    session_start();
    if ($_SESSION['login'] == 0) {
      echo '<script> window.location.replace("login.php")</script>';
    }
 ?>
<head>
	<!-- head-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> المشاريع </title>
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
	<style>
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

    .me-2 {
      background-color: #E7F6F2;
    }

    .al{
      margin-top: -0.9vw;
    }

    @media only screen and (max-width: 700px) {
    .table{
        display: none;
    }
  }
  @media only screen and (max-width: 700px) {
    #search{
        display: none;
    }
  }

  @media only screen and (max-width: 700px) {
    .br{
        display: none;
    }
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
    <div class="collapse navbar-collapse" id="navbarNav" style="margin-right: -2vw;">
      <ul class="navbar-nav" style=" width: 100%;">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="controlPanal.php"> الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="users.php" >المستخدمين</a>
        </li>
        <li class="nav-item">
          <b><a class="nav-link" href="projects.php" >المشاريع</a></b>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="princpl.php" >المشاركين</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="activtyNames.php" >الانشطة</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="programs.php" >البرامج</a>
        </li>
        <li class="nav-item" style="margin-right: 1%; margin-top: 0.2vw; text-align: left; width: 100%;">
          <form method="post" action="">
          <button type="submit" class="btn btn-danger" name="bt_logout">تسجيل الخروج</button>
          </form>
        </li>
      </ul>

      <?php 

      if(isset($_POST['bt_logout'])){
        $_SESSION['login']= 0;
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
    <label for="inputName" class="col-sm-12 col-md-2 col-lg-2 col-form-label">إسم المشروع</label>
    <div class="col-sm-12 col-md-4 col-lg-3">
      <input type="text" class="form-control" name="name">
    </div>
  </div>

    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-12 col-md-2 col-lg-2 col-form-label">إسم الممول </label>
    <div class="col-sm-12 col-md-4 col-lg-3">
      <input type="text" class="form-control" name="mom">
    </div>
  </div>

   <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-12 col-md-2 col-lg-2 col-form-label">قيمة المشروع</label>
    <div class="col-sm-12 col-md-4 col-lg-3">
      <input type="text" class="form-control" name="value">
    </div>
  </div>

   <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-12 col-md-2 col-lg-2 col-form-label">المنطقة المستهدفة</label>
    <div class="col-sm-12 col-md-4 col-lg-3">
      <input type="text" class="form-control" name="area">
    </div>
  </div>

   <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-12 col-md-2 col-lg-2 col-form-label">الفئة المستهدفة</label>
    <div class="col-sm-12 col-md-4 col-lg-3">
      <input type="text" class="form-control" name="class">
    </div>
  </div>

   <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-12 col-md-2 col-lg-2 col-form-label">فكرة المشروع</label>
    <div class="col-sm-12 col-md-4 col-lg-3">
      <input type="text" class="form-control" name="idea">
    </div>
  </div>

      <div class="row" style="text-align:left ;">
        <div class="col-3"></div>
        <div class="col-sm-12 col-md-3 col-lg-2">
          <button type="submit" class="btn btn-success" name="bt_add">أضف مشروع جديد </button>
        </div>
      </div>
      <br>

  <?php 

  if (isset($_POST['bt_add'])) {
    $name = $_POST['name'];
    $mom = $_POST['mom'];
    $value = $_POST['value'];
    $area = $_POST['area'];
    $class = $_POST['class'];
    $idea = $_POST['idea'];
    if (!empty($name) && !empty($mom) && !empty($value) && !empty($area)  && !empty($class)  && !empty($idea)  && !is_double($value)){

      $sql = "INSERT INTO `project`(`ProjectName`, `financierName`, `value`, `area`, `TargetGroup`, `idea`) VALUES ('$name','$mom','$value','$area','$class','$idea')";
      $res = mysqli_query($con,$sql);

    }else{
      echo '<div class="row">
          <div class="col-5 alert alert-danger" style="height:1vw ;">
          <p class="al">الرجاء إضافة جميع البيانات</p>
          </div>
        </div>';
    }
  }
   ?>

   <br class="br">
   <br class="br">

   <form action="users.php" method="post" >
        <div class="container text-center" id="search">
          <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-3">
              <input class="form-control me-2" type="search" placeholder="بحث" name="keyword" id="key">
            </div>
          </div>
        </div>
      </form>

   <br>

  <!-- table -->
<table class="table table-striped" id="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">إسم المشروع</th>
      <th scope="col">إسم الممول</th>
      <th scope="col">قيمة المشروع</th>
      <th scope="col">المنطقة المستهدفة</th>
      <th scope="col">الفئة المستهدفة</th>
      <th scope="col">الفكرة</th>
      <th scope="col">تعديل</th>
      <th scope="col">حذف</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql = "SELECT * FROM `project`";
      $res = mysqli_query($con,$sql);

      if($res){
        $b =1;
        while ($n = mysqli_fetch_assoc($res)) {

          echo '<tr>
      <th scope="row">'.$b.'</th>
      <td>'.$n['ProjectName'].'</td>
      <td>'.$n['financierName'].'</td>
      <td>'.$n['value'].'</td>
      <td>'.$n['area'].'</td>
      <td>'.$n['TargetGroup'].'</td>
      <td>'.$n['idea'].'</td>
      <td><a href="projectsEdit.php?id='.$n['id'].'" class="btn btn-success" name="edit">تعديل</a></td>
      <td><a href="editeProjects.php?id='.$n['id'].'" class="btn btn-danger">حذف</a></td>
    </tr>'; 
    $b++;
  }
      }else{
        echo '<div class="row">
        <div class="col-5 alert alert-danger" style="height:1vw ;">
        <p class="al">لم تتم إضافة البيانات</p>
        </div>
      </div>';
      } 
     ?>
  </tbody>
</table>

<script>
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
              td4 = tr[i].getElementsByTagName("td")[4];
              td5 = tr[i].getElementsByTagName("td")[5];

              if (td || td1) {
                txtValue = td.textContent || td.innerText;
                txtValue1 = td1.textContent || td1.innerText;
                txtValue2 = td2.textContent || td2.innerText;
                txtValue3 = td3.textContent || td3.innerText;
                txtValue4 = td4.textContent || td4.innerText;
                txtValue5 = td5.textContent || td5.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                }else if(txtValue1.toUpperCase().indexOf(filter) > -1){
                  tr[i].style.display = "";
                }else if(txtValue2.toUpperCase().indexOf(filter) > -1){
                  tr[i].style.display = "";
                }else if(txtValue3.toUpperCase().indexOf(filter) > -1){
                  tr[i].style.display = "";
                }else if(txtValue4.toUpperCase().indexOf(filter) > -1){
                  tr[i].style.display = "";
                }else if(txtValue5.toUpperCase().indexOf(filter) > -1){
                  tr[i].style.display = "";
                } else {
                  tr[i].style.display = "none";
                }
              }
            }
            
          }
        </script>

  </form> 
</div>

<br class="br">
<br class="br">

<!-- footer ------------>
<footer>
    <div id="footer">
    <img src="img/sfi-logo.png" class="imgFot">
    <br>
    <p class="card-text" style="padding-top: 0.4vw; color: #7F8487; "
    >فلسطين، بيت لحم، شارع القدس الخليل - نزلة غزال - بالقرب من فرشات حرباوي.</p>
    <a href="https://ysfi.ps/Arr/index.php/ar/" class="btn btn-primary" target="blank" >الموقع الرسمي</a>
</div>
		
	</footer>
	
</body>
</html>