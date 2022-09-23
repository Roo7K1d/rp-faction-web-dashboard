<?php

session_start();

$conn=new mysqli('localhost', 'root', '1001010mM', 'arcadius');

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
                    <h1 class="h3 mb-2 text-gray-800">Neuigkeiten</h1>
                    <p class="mb-4">Hier kannst du die Neuigkeit, welche auf der Startseite angezeigt wird, bearbeiten.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Neuigkeit bearbeiten <br></h6>
                        </div>
                        <div class="card-body">
                            <form <?php echo 'action="https://rootk1d.xyz/awi-system/functions/editNews.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'" method="post">' ?>
  <div class="form-group">
    <textarea class="form-control" id="inputNews" name="inputNews" rows="20"><?php 
                                        while ($row = $news->fetch_assoc()) {
                                            echo $row['text']; 
                                        }
                                        ?></textarea>
  </div>
  <button type="submit" class="btn btn-success btn-sm btn-icon-split" id="userID" name="userID">
                                       <span class="icon text-white-50">
                                       <i class="fas fa-eraser"></i>
                                       </span>
                                       <span class="text">Absenden</span>
                                       </button>
</form>
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

    <?php
         
         $sql="SELECT * FROM users";
         $result=$conn->query($sql);
         
         while ($row = $result->fetch_assoc()) {
         
            echo '
         
         <div class="modal fade" id="editModal-' . $row['id'] . '" tabindex="-1" role="dialog" aria-labelledby="editLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title" id="editLabel">Benutzer bearbeiten - ' . $row['fullname'] .'</h5>
         <button class="close" type="button" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">×</span>
         </button>
         </div>
         <div class="modal-body">
         <form action="../functions/editUser.php" method="post">
         <div class="mb-3">
         <label for="inputFullName" class="form-label font-weight-bold">Voller Name</label>
         <input type="text" class="form-control" id="inputFullName" name="inputFullName" placeholder="" value="' . $row["fullname"] . '" required>
         </div>
         <div class="mb-3">
         <label for="inputName" class="form-label font-weight-bold">Username</label>
         <input type="text" class="form-control" id="inputName" name="inputName" placeholder="" value="' . $row["username"] . '" required>
         </div>
         <div class="mb-3">
                        <label for="inputRole" class="form-label font-weight-bold">Rolle</label>
                        <select class="form-control" id="inputRole" name="inputRole" required>
                           <option selected hidden>' . $row['role'] .'</option>
                           <option>promoter</option>
                           <option>barkeeper</option>
                           <option>security trainee</option>
                           <option>security staff</option>
                           <option>security manager</option>
                        </select>
        </div>
         <div class="mb-3">
         <label for="inputPhone" class="form-label font-weight-bold">Telefonnummer</label>
         <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="" value="' . $row["phone"] . '" required>
         </div>
         <div class="mb-3">
         <label for="inputNumber" class="form-label font-weight-bold">Dienstnummer</label>
         <input type="text" class="form-control" id="inputNumber" name="inputNumber" placeholder="" value="' . $row["number"] . '" required>
         </div>
         <div class="mb-3">
         <label for="inputPassword" class="form-label font-weight-bold">Passwort</label>
         <input type="text" class="form-control" id="inputPassword" name="inputPassword" placeholder="**************" value="">
         </div>
         </div>
         <div class="modal-footer">
         <button class="btn btn-secondary" type="button" data-dismiss="modal">Abbrechen</button>
         <button type="submit" class="btn btn-success" id="id" name="id" value="' . $row["id"] . '">Absenden</button>
         </div>
         </form>
         </div>
         </div>
         </div>
         </div>
         ';
         
         }
         ?>
    
    <?php include("../templates/logoutModal.php") ?>
    <?php include("../templates/addUserModal.php") ?>
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