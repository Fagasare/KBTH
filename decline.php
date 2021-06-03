<?php
include('session.php');
include('dbh.inc.php');
  //require_once 'dbh.inc.php';

  $dbservername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbName = "pizza";

  $con = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbName);

      if ($con) {



      }
      else{
          echo mysqli_error($con);
      }
?>

<!doctype html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Admin">
  <meta name="author" content="Felix">
  <link rel="stylesheet" href="./css/display.css">
  <title>KBTH IT DEPARTMENT</title>
  <!-- App favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/dist/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/dist/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/dist/favicon/favicon-16x16.png">
  <link rel="manifest" href="./favicon/site.webmanifest">
  <!--Global Styles(used by all pages)-->
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
  <link href="assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
  <link href="assets/plugins/typicons/src/typicons.min.css" rel="stylesheet">
  <link href="assets/plugins/themify-icons/themify-icons.min.css" rel="stylesheet">
  <!--Third party Styles(used by this page)-->
  <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!--Start Your Custom Style Now-->
  <link href="assets/dist/css/style.css" rel="stylesheet">

  <style>
  #pro{
    justify-content: center;
    align-items: center;
      border-radius:50%;
  }

  #tag{

    width: 50px;
    height: 50px;
    border-radius: 47%;
  }
  .btn-primary:hover {
  color: #fff;
  background-color: #007bff;
  border-color: transparent;
}
  .show>.btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #007bff;
  border-color: transparent;
}
.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: transparent;
}
.btn-success {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
  margin: 0px 0px 10px;
}
.dis{

  position: relative;
  left: -4%;
}
.row{
    text-align: center;
}
#hed{
    color: red;
    text-align: center;
    text-transform: uppercase;
    font-weight: 700;
}



  </style>

</head>
    <body class="fixed">

      <?php


           $sql =mysqli_query($conn, "SELECT * FROM Admin WHERE `id`='".$_GET['id']."' ");
          $row= mysqli_fetch_array($sql);

      ?>


        <div class="wrapper">
          <!-- Sidebar  -->
          <nav class="sidebar sidebar-bunker" style="background-color:snow;">

                <div class="profile-element d-flex align-items-center flex-shrink-0">
                    <div>
                        <p><img src="./images/download.png" width="100px;" height="100px" id="pro" class="mx-auto d-block" ></p>
                    </div>

                </div><!--/.profile element-->

                <form class="search sidebar-form" action="#" method="get" >
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Search..." style="background-color:snow;">
                        <i class="typcn typcn-zoom-outline search__helper" data-sa-action="search-close"></i>
                    </div>
                </form><!--/.search-->

                <br><br>  <div class="sidebar-body">
                    <nav class="sidebar-nav">
                        <ul class="metismenu">

                                <li class="mm-active">
                                    <a class="has-arrow material-ripple" href="#">
                                        <i class="typcn typcn-home-outline d-block mr-2"></i>
                                        HOME
                                    </a>
                                    <ul class="nav-second-level">
                                        <li class="mm-active"><a href="display.php" style="color:#37a000;"><i class="typcn typcn-home-outline mr-2"></i>Home</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a class="has-arrow material-ripple" href="#">
                                        <i class="typcn typcn-group-outline d-block mr-2"></i>
                                            APPROVED
                                    </a>
                                    <ul class="nav-second-level">
                                      <li class="mm-active">
                                          <a class="has-arrow material-ripple" href="approved_list.php" style="color:#37a000;">
                                              <i class="typcn typcn-user-add-outline mr-2"></i>
                                              approved
                                          </a>
                                      </li>
                                    </ul>
                                </li>

                                <li class="mm-active">
                                    <a class="has-arrow material-ripple" href="#" style="color:snow;">
                                        <i class="typcn typcn-group-outline d-block mr-2"></i>
                                        DECLINED
                                    </a>
                                    <ul class="nav-second-level">
                                        <li class="mm-active"><a href="declined_list.php" style="color:#37a000;"><i class="typcn typcn-user-outline mr-2"></i>Declined</a></li>

                                    </ul>
                                </li>

                                <li class="mm-active">
                                    <a class="has-arrow material-ripple" href="#" style="color:snow;">
                                        <i class="typcn typcn-group-outline d-block mr-2"></i>
                                        About
                                    </a>
                                    <ul class="nav-second-level">
                                        <li class="mm-active"><a href="profile.php" style="color:#37a000;"><i class="typcn typcn-user-outline mr-2"></i>About</a></li>

                                    </ul>
                                </li>
                            </li><br>


                    </nav>
                </div><!-- sidebar-body -->
            </nav>


            <!-- Page Content  -->
            <div class="content-wrapper">
                <div class="main-content">
                    <nav class="navbar-custom-menu navbar navbar-expand-lg m-0">
                        <div class="sidebar-toggle-icon" id="sidebarCollapse">
                            sidebar toggle<span></span>
                        </div><!--/.sidebar toggle icon-->
                        <div class="d-flex flex-grow-1">
                            <ul class="navbar-nav flex-row align-items-center ml-auto">


                                <li class="nav-item dropdown user-menu">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">

                                        <i class="typcn typcn-user-add-outline"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" >
                                        <div class="dropdown-header d-sm-none">
                                            <a href="#" class="header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                                        </div>
                                        <div class="user-header">
                                            <div class="img-user">
                                                <img src="assets/dist/img/avatar-1.jpg" alt="">
                                            </div><!-- img-user -->

                                            <span><h5 class="dropdown-header"><?php echo $row['dept'];?></h5></span>
                                        </div><!-- user-header -->
                                        <a href="#" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                                        <a href="logout.php" class="dropdown-item"><i class="typcn typcn-key-outline"></i> Sign Out</a>
                                    </div><!--/.dropdown-menu -->
                                </li>
                            </ul><!--/.navbar nav-->
                            <div class="nav-clock">
                                <div class="time">
                                    <span class="time-hours"></span>
                                    <span class="time-min"></span>
                                    <span class="time-sec"></span>
                                </div>
                            </div><!-- nav-clock -->
                        </div>
                    </nav><!--/.navbar-->
                    <div class="body-content">
                        <div class="row">
                            <div class="col-sm-12 col-xl-8">
                                <div class="media d-flex m-1 ">
                                    <div class="align-left p-1">
                                        <a href="#" class="profile-image">
                                            <img src="assets/dist/img/avatar-1.jpg" class="avatar avatar-xl rounded-circle img-border height-100" alt="Card image">
                                        </a>
                                    </div>
                                    <div class="media-body text-left ml-3 mt-1">
                                        <h3 class="font-large-1 white"><?php echo $row['dept'];?>
                                            <span class="font-medium-1 white">(STAFF)</span>
                                        </h3>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Update Staff Information</h6>
                                            </div>
                                            <div class="text-right">
                                                <div class="actions">
                                                    <a href="#" class="action-item"><i class="ti-reload"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="card-body">
                                        <form method="post" >

                                            <div class="row">
                                                <div class="col-md-6 pr-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Delivery to</label>
                                                        <input type="text" class="form-control" name="delivery_to" value="<?php echo $row['delivery_to'];?>">
                                                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>">

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Job No.</label>
                                                        <input type="text" class="form-control" name="job_no" value="<?php echo $row['job_no'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Assest / BME Number:</label>
                                                        <input type="text" class="form-control" name="bme" value="<?php echo $row['bme'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Equipment Type:</label>
                                                        <input type="text" class="form-control" name="equipment" value="<?php echo $row['equipment'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">DEPARTMENT</label>
                                                        <input type="text" class="form-control" name="dept" value="<?php echo $row['dept'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Planned Preventive Maintenance:</label>
                                                        <input type="text" class="form-control" name="pre_maintenance" value="<?php echo $row['pre_maintenance'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-4 px-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Corrective Maintenance / Repair:</label>
                                                        <input type="text" class="form-control" name="repair" value="<?php echo $row['repair'];?>" >
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-md-4 px-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Decontaminate:</label>
                                                        <input type="text" class="form-control" name="decontaminate" value="<?php echo $row['decontaminate'];?>" >
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-md-4 px-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Position:</label>
                                                        <input type="text" class="form-control" name="position" value="<?php echo $row['position'];?>" >
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-md-4 px-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Admin Approval:</label>
                                                        <input type="text" class="form-control" name="sign" value="<?php echo $row['sign'];?>" >
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-md-4 px-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Date:</label>
                                                        <input type="text" class="form-control" name="date" value="<?php echo $row['date'];?>" >
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-md-4 px-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Time :</label>
                                                        <input type="text" class="form-control" name="time" value="<?php echo $row['time'];?>" >
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-md-4 px-md-1">
                                                    <div class="form-group">
                                                        <label class="font-weight-600">Contact :</label>
                                                        <input type="text" class="form-control" name="contact" value="<?php echo $row['contact'];?>" >
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-md-4 px-md-1">
                                                    <div class="form-group">

                                                        <button class="btn btn-danger"  name="Save" id="Save" value="do">Decline</button>
                                                    </div>
                                                </div>

                                            </div>

                                        </form>


                                        <?php


                                             if(isset($_POST["Save"])){


                                               $delivery_to = $_POST['delivery_to'];
                                               $id = $_POST['id'];
                                               $job_no = $_POST['job_no'];
                                               $bme = $_POST['bme'];
                                               $equipment = $_POST['equipment'];
                                               $dept = $_POST['dept'];
                                               $pre_maintenance = $_POST['pre_maintenance'];
                                               $repair = $_POST['repair'];
                                               $decontaminate = $_POST['decontaminate'];
                                               $position = $_POST['position'];
                                               $date = $_POST['date'];
                                               $time = $_POST['time'];
                                               $contact = $_POST['contact'];
                                               $sign = $_POST['sign'];



                                                // $sql = "UPDATE Admin SET delivery_to = '$delivery_to', job_no = '$job_no', bme = '$bme',equipment = '$equipment' ,dept = '$dept', pre_maintenance = '$pre_maintenance', repair = '$repair', sign = '$sign' WHERE id = '$id' " ;
                                                //
                                                //    if(mysqli_query($conn, $sql)){
                                                //      echo "Updated Successfully";
                                                //
                                                //     //  header('location:display.php');
                                                //
                                                //      }
                                                //      else{
                                                //          echo"Error Updating" .mysqli_error($conn);
                                                //      }
                                                //      mysqli_close($conn);
                                                $sql_insert = mysqli_query($con, "INSERT INTO decline(delivery_to,id,job_no,bme,equipment,dept,pre_maintenance,repair,decontaminate,position,date,time,contact,sign) VALUES ('$delivery_to','$id','$job_no','$bme','$equipment','$dept','$pre_maintenance','$repair','$decontaminate','$position','$date','$time','$contact','$sign')");
                                                  if($sql_insert){
                                                    echo "<script>alert('message sent successfully')</script>";
                                                  }
                                                  else{
                                                    echo mysqli_error($con);
                                                    exit;
                                                  }
                                             }
                                  ?>



                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!--/.body content-->
                </div><!--/.main content-->
                <footer class="footer-content">
                    <div class="footer-text d-flex align-items-center justify-content-between">
                      <div class="copy">&#128222; <b style="color: red;">+233(0)501592984</b></div>
                      <div class="credit">&#128140; <b style="color: red;">asarefelix327@gmail.com</b></div>
                    </div>
                </footer><!--/.footer content-->
                <div class="overlay"></div>
            </div><!--/.wrapper-->
        </div>
        <!--Global script(used by all pages)-->
        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/plugins/jQuery/jquery-3.4.1.min.js"></script>
        <script src="assets/dist/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/metisMenu/metisMenu.min.js"></script>
        <script src="assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <!-- Third Party Scripts(used by this page)-->

        <!--Page Active Scripts(used by this page)-->

        <!--Page Scripts(used by all page)-->
        <script src="assets/dist/js/sidebar.js"></script>
    </body>

<!-- Mirrored from bhulua.thememinister.com/user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2020 17:26:00 GMT -->
</html>
