<?php
  $dbservername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbName = "pizza";

  $conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbName);

  session_start();
 if(!$_SESSION['email'])
    {
     header('location:index.php');
    }
    if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }



?>
<!DOCTYPE html>
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

    <style>
    #pro{
        position: relative;
        left: 50%;
        border-radius:50%;
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
                                        <i class="typcn typcn-home d-block mr-2"></i>
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
                                        <i class="typcn typcn-user-outline d-block mr-2"></i>
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
                                                <img src="./images/me.jpg" alt="">
                                            </div><!-- img-user -->
                                            <h6><?php echo $_SESSION['email'];?></h6>
                                        </div><!-- user-header -->
                                        <a href="profile.php" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                                        <a href="logout.php" class="dropdown-item"><i class="typcn typcn-key-outline"></i> Sign Out</a>
                                    </div><!--/.dropdown-menu -->
                                </li>
                                <?php
                                    $sql_get = mysqli_query($conn,"SELECT * FROM Admin WHERE status=0");
                                    $count = mysqli_num_rows($sql_get);
                                ?>
                                <li class="nav-item dropdown user-menu">
                                <button type="button" class="btn btn-lg dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                                  <!-- <i class="typcn typcn-bell"></i>
                                    <span class="badge bg-light" style="color:red;" id="ba">
                                       <?php echo $count; ?>
                                    </span> -->

                                </button>
                                    <div class="dropdown-menu dropdown-menu-right" >
                                        <div class="dropdown-header d-sm-none">
                                            <a href="#" class="header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                                        </div>

                                        <div class="dropdown">


                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <?php
                  $sql_get1 = mysqli_query($conn,"SELECT * FROM Admin WHERE status=0");
                  if(mysqli_num_rows($sql_get1)>0){
                    while($result = mysqli_fetch_assoc($sql_get1)){
                      echo '<a class="dropdown-item" href="#">'.$result['dept'].'</a>';

                    }

                  }
                  else{
                    echo '<a class="dropdown-item text-danger font-weight-bold" href="#">Sorry! No new request </a>';
                  }
                ?>

                </ul>
              </div>
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
                    <!--Content Header (Page header)-->
                    <div class="content-header row align-items-center m-0">
                        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <div class="header-icon text-success mr-3"><img src="images/download.png" class="img-fluid pull-xs-left" alt="..."></div>
                                <div class="media-body">
                                    <h1 class="font-weight-bold">ADMIN</h1>
                                    <small>KORLE-BU CHILD HEALTH</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)-->
                    <div class="body-content">

                        <div class="row">
                        <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">HOME PAGE</h6>
                                            </div>


                                            <div class="text-right">
                                                <div class="actions">
                                                    <a href="display.php" class="action-item"><i class="ti-reload"></i></a>
                                                    <div class="dropdown action-item" data-toggle="dropdown">
                                                        <a href="display.php" class="action-item"><i class="ti-more-alt"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="display.php" class="dropdown-item">Refresh</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">


                                      <div class="container-fluid">

                                            <!-- the cards -->
                                            <div class="row">
                                  						<div class="col-12 col-lg-4">
                                  							<div class="card radius-15 overflow-hidden">
                                  								<div class="card-body bg-primary text-white">
                                  									<div class="d-flex">
                                  										<div>
                                                        <?php
                                                            $sql_get = mysqli_query($conn,"SELECT * FROM approved WHERE status=0");
                                                            $count = mysqli_num_rows($sql_get);
                                                        ?>
                                  											<p class="mb-0 font-weight-bold">Approved Requests</p>
                                  											<h2 class="mb-0"><?php echo $count; ?></h2>
                                  										</div>
                                  										<!-- <div class="ml-auto align-self-end">
                                  											<p class="mb-0 font-14 text-primary"><i class='bx bxs-up-arrow-circle'></i>  <span>1.01% 31 days ago</span>
                                  											</p>
                                  										</div> -->
                                  									</div>
                                  								</div>

                                  							</div>
                                  						</div>
                                  						<div class="col-12 col-lg-4">
                                  							<div class="card radius-15 overflow-hidden">
                                  								<div class="card-body bg-warning text-white">
                                  									<div class="d-flex">
                                  										<div>
                                                        <?php
                                                            $total_req = mysqli_query($conn,"SELECT * FROM Admin WHERE status=0");
                                                            $req = mysqli_num_rows($total_req);
                                                        ?>
                                  											<p class="mb-0 font-weight-bold">Total Requests made</p>
                                  											<h2 class="mb-0"><?php echo $req; ?></h2>
                                  										</div>
                                  										<!-- <div class="ml-auto align-self-end">
                                  											<p class="mb-0 font-14 text-success"><i class='bx bxs-up-arrow-circle'></i>  <span>0.49% 31 days ago</span>
                                  											</p>
                                  										</div> -->
                                  									</div>
                                  								</div>

                                  							</div>
                                  						</div>
                                  						<div class="col-12 col-lg-4">
                                  							<div class="card radius-15 overflow-hidden">
                                  								<div class="card-body bg-danger text-white">
                                  									<div class="d-flex">
                                  										<div>
                                                        <?php
                                                            $sql_get = mysqli_query($conn,"SELECT * FROM decline WHERE status=0");
                                                            $decline = mysqli_num_rows($sql_get);
                                                        ?>
                                  											<p class="mb-0 font-weight-bold">Requests Denied</p>
                                  											<h2 class="mb-0"><?php echo $decline; ?></h2>
                                  										</div>

                                  									</div>
                                  								</div>

                                  							</div>
                                  						</div>
                                  					</div>




                                            <table class="table">
                                              <thead>
                                                  <tr>

                                                    <th>Name</th>
                                                    <th>ID</th>
                                                    <th colspan="2">Action</th>
                                                  </tr>
                                              </thead
                                          <?php
                                          $getUser = "SELECT * FROM `Admin` ORDER BY id DESC ";
                                          $result = $conn->query($getUser);
                                          if($result->num_rows >0){ while($row = $result->fetch_assoc()){ ?>
                                              <div class="col-12 col-sm-6 col-lg-3">
                                                <tr>

                                                  <td><?php echo $row['dept'];?></td>
                                                  <td><?php echo 'ID: '.$row['id'];?></td>
                                                  <td><a href="userDetails.php?id=<?php echo base64_encode($row['id']); ?>" class="btn btn-primary">See Request</a></td>
                                                </tr>


                                              </div><br>
                                          <?php }}?>


                                        </table>


                                      </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.body content-->
                </div><!--/.main content-->
                <footer class="footer-content">
                    <div class="footer-text d-flex align-items-center justify-content-between">
                        <div class="copy"> &#128222; <b style="color: red;">+233(0)501592984</b></div>
                        <div class="credit">  <b style="color: red;">asarefelix327@gmail.com</b></div>
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
        <script src="assets/plugins/chartJs/Chart.min.js"></script>
        <script src="assets/plugins/sparkline/sparkline.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="assets/dist/js/pages/dashboard.js"></script>
        <!--Page Scripts(used by all page)-->
        <script src="assets/dist/js/sidebar.js"></script>
    </body>


</html>
