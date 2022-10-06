<?php

header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"'); 
session_start();

if(!isset($_GET['username'])) {
    Header("Location: ./login.php");
}

include("./db.php");

if ($conn->connect_error) {
    die('Error connecting to database: '. $conn->connect_error);
}

$sql="SELECT * FROM users";
$users=mysqli_num_rows($conn->query($sql));

$sql="SELECT * FROM users WHERE duty = 'on'";
$onduties=mysqli_num_rows($conn->query($sql));

$sql="SELECT * FROM users WHERE duty = 'off'";
$offduties=mysqli_num_rows($conn->query($sql));

$sql="SELECT * FROM events";
$events=mysqli_num_rows($conn->query($sql));

$sql="SELECT * FROM news";
$news=$conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-eval' 'unsafe-inline' data: gap: https://ssl.gstatic.com 'unsafe-eval'; frame-src *; connect-src *; style-src 'self' 'unsafe-inline'; media-src *; img-src 'self' data: content:;">
    <meta name="author" content="">

    <title>AWI-System</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        
        <?php 

        include("templates/sidenav.php");

        ?>
    

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <?php include("templates/navbar.php") ?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard - RP Faction</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Members</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $users; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Events</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $events; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Off Duty</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $offduties; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-door-closed fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                On Duty</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $onduties; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
<div class="row">

                        <div class="col-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Welcome</h6>
                                </div>
                                <div class="card-body">
                                    <p>Welcome to the web dashboard for RP factions. Here you can find useful tools for organizing your group. <br>
                                    If you find any bugs feel free to create an issue on GitHub.
                                </div>
                            </div>
</div>
                    </div>
<div class="row">

                        <div class="col-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">News</h6>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly style="background-color: #FFF"><?php 
                                        while ($row = $news->fetch_assoc()) {
                                            echo $row['text']; 
                                        }
                                        ?></textarea>
                                </div>
                            </div>
</div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
            <?php include("templates/footer.php") ?>

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    
    <?php include("templates/logoutModal.php") ?>
    <?php include("templates/userModal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>