<?php
  require_once 'dbh.inc.php';

  session_start();
 if(!$_SESSION['email'])
    {
     header('location:index.php');
    }

    if (isset($_GET['id'])) {
    $getID = base64_decode($_GET['id']);

    $sql = "SELECT * FROM Admin WHERE `id`='$getID' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();


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
  <title>KBTH CHILD HEALTH DEPARTMENT</title>
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
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
  <link rel="manifest" href="./favicon/site.webmanifest">
  <title>Korle-Bu IT Staff- Admin page</title>

  <style>
  #pro{
    position: relative;
    left: 50%;
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
                                        <h6 class="dropdown-header"><?php echo $row['position'];?></h6>
                                          <span><h5 class="dropdown-header"><?php echo $row['dept'];?></h5></span>
                                      </div><!-- user-header -->
                                      <a href="profile.php" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
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


                    <div class="d-flex flex-column align-items-center ">


                                  <div class="col-lg-4"><strong>Delivery to:</strong></div>
                                  <div class="col-lg-4"><label><?php echo $row['delivery_to'];?></label></div><br>

                                  <div class="col-lg-4"><strong>Job no.:</strong></div>
                                  <div class="col-lg-4"><label><?php echo $row['job_no'];?></label></div><br>

                                  <div class="col-lg-4"><strong>Assest / BME Number:</strong></div>
                                  <div class="col-lg-4"><label><?php echo $row['bme'];?></label></div><br>

                                  <div class="col-lg-4"><strong>Equipment Type:</strong></div>
                                  <div class="col-lg-4"><label><?php echo $row['equipment'];?></label></div><br>

                                  <div class="col-lg-4"><strong>DEPARTMENT:</strong></div>
                                  <div class="col-lg-4"><label><?php echo $row['dept'];?></label></div><br>

                                  <div class="col-lg-4"><strong>Planned Preventive Maintenance:</strong></div>
                                  <div class="col-lg-4"><label><?php echo $row['pre_maintenance'];?></label></div><br>

                                  <div class="col-lg-4"><strong>Corrective Maintenance / Repair:</strong></div>
                                  <div class="col-lg-4"><label><?php echo $row['repair'];?></label></div><br>

                                  <div class="col-lg-4"><strong>Decontaminate:</strong></div>
                                  <div class="col-lg-4"><label><?php echo $row['decontaminate'];?></label></div><br>

                                  <div class="col-lg-4"><strong>Position:</strong></div>
                                  <div class="col-lg-4"><label><?php echo $row['position'];?></label></div><br>

                                  <div class="col-lg-4"><strong>ID:</strong></div>
                                  <div class="col-lg-4"><label><?php echo $row['id'];?></label></div><br>



                    </div>


                  <div class="footer-text d-flex align-items-center justify-content-between">
                            <div><a href="update.php?id=<?php echo $row['id']; ?> name="update" class="btn btn-success"> APPROVED </a></div>
                            <div><a href="decline.php?id=<?php echo $row["id"]; ?> name="delete" class="btn btn-danger">DECLINE </a></div>
                        </div>



                    </div><!--/.main content-->

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


</html>
