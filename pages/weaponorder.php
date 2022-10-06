<?php

session_start();

include("../db.php");

if ($conn->connect_error) {
    die('Error connecting to database: '. $conn->connect_error);
}

$sql="SELECT * FROM users";
$users=mysqli_num_rows($conn->query($sql));

$sql="SELECT * FROM users WHERE duty = 'On'";
$onduties=mysqli_num_rows($conn->query($sql));

$sql="SELECT * FROM realestate";
$realestates=mysqli_num_rows($conn->query($sql));

$sql="SELECT * FROM events";
$events=mysqli_num_rows($conn->query($sql));
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AWI-System</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        
        <?php 

        include("../templates/sidenav.php");

        ?>
    

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <?php include("../templates/navbar.php") ?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Waffenbestellungen</h1>
                    <p class="mb-4">Auf dieser Seite kannst du Bestellungen für Waffen von Mitarbeitern eintragen. Das erleichtert das Verteilen der Waffen.</p>
                    <a href="#" class="btn btn-success btn-sm btn-icon-split" data-toggle="modal" data-target="#addWeaponOrderModal">
                        <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Eintag erstellen</span>
                        </a>
                        <br>
                        <br>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bestellungen <br></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Anzahl Waffen</th>
                                            <th>Notizen</th>
                                            <th>Aktionen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $sql="SELECT * FROM weaponorders";
                                        $result=$conn->query($sql);

                                        while ($row = $result->fetch_assoc()) {

                                            echo'
                                            <tr>
                                            <td>'. $row['orderid'] .'</td>
                                            <td>'. $row['fullname'] .'</td>
                                            <td>'. $row['amount'] .'</td>
                                            <td>'. str_replace("\n", "<br>", $row['comments']) .'</td>
                                            <td><form class="vanilla" action="https://rootk1d.xyz/awi-system/functions/deleteWeaponOrder.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'" method="post">
                                       <button type="submit" class="btn btn-danger btn-sm btn-icon-split" id="id" name="id" value="' . $row["orderid"] . '">
                                       <span class="icon text-white-50">
                                       <i class="fas fa-trash"></i>
                                       </span>
                                       <span class="text">Löschen</span>
                                       </button>
                                       </form></td>
                                            </tr>
                                            ';

                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
            <?php include("../templates/footer.php") ?>

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
    
    <?php include("../templates/logoutModal.php") ?>
    <?php include("../templates/addWeaponOrderModal.php") ?>
 <?php include("../templates/userModal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>


</body>

</html>