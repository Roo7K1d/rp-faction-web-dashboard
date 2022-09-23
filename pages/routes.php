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

    <style>
        img {
    transition:transform 0.25s ease;
}

img:hover {
    -webkit-transform:scale(2);
    transform:scale(2);
    z-index: 100000000;
}
    </style>

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
                    <h1 class="h3 mb-2 text-gray-800">Routen</h1>
                    <p class="mb-4">Hier werden dir alle Routen angezeigt, die du brauchst zum herstellen von Gegenständen.</p>


                <div class="row">
                    <div class="col-4">
                        <div class="card border-bottom-primary">
  <img class="card-img-top" src="https://cdn.discordapp.com/attachments/813233921922957372/856594458959282186/unknown.png" style="width: 100%" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Schwarzpulver</h5>
    <p class="card-text"><small>in der Mine; am Eingang</small></p>
  </div>
</div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-bottom-primary">
  <img class="card-img-top" src="https://cdn.discordapp.com/attachments/813233921922957372/856594321997955122/unknown.png" style="width: 100%" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Schrott
    </h5>
    <p class="card-text"><small>an rostigem Auto; eingezäunt</small></p>
  </div>
</div>
                    </div>
                </div>

                <?php 
                
                if (strpos($_GET['role'], 'trainee') == false) {
                    echo '
                    
                    <br>
                <hr>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-bottom-warning">
  <img class="card-img-top" src="https://media.discordapp.net/attachments/742731876170465310/902245700228751370/unknown.png?width=1193&height=671" style="width: 100%" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Opiate
    </h5>
    <p class="card-text"><small>Sammler<br>auf Feld; auf Cayo Perico</small></p>
  </div>
</div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-bottom-warning">
  <img class="card-img-top" src="https://media.discordapp.net/attachments/742731876170465310/902245889261834271/unknown.png?width=1193&height=671" style="width: 100%" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Codein
    </h5>
    <p class="card-text"><small>Verarbeiter<br>auf Cayo Perico</small></p>
  </div>
</div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-bottom-warning">
  <img class="card-img-top" src="https://media.discordapp.net/attachments/742731876170465310/902245184903987240/unknown.png?width=1193&height=671" style="width: 100%" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Tilidin
    </h5>
    <p class="card-text"><small>Verarbeiter<br>im Schuppen; auf Cayo Perico</small></p>
  </div>
</div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-bottom-warning">
  <img class="card-img-top" src="https://media.discordapp.net/attachments/742731876170465310/902245461270868058/unknown.png?width=1193&height=671" style="width: 100%" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Drogenverkäufer
    </h5>
    <p class="card-text"><small>Verkäufer<br>bei Schuppen</small></p>
  </div>
</div>
                    </div>
                </div>
                    
                    ';
                }

                ?>

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

    <div class="modal fade" id="schwarzpulverModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Schwarzpulver - Sammler</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <img class="card-img-top" src="https://cdn.discordapp.com/attachments/742731876170465310/902245184903987240/unknown.png" style="width: 100%" alt="Card image cap">
         </div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Abbrechen</button>
            <button class="btn btn-warning">Bearbeiten</button>
            <button class="btn btn-success">Absenden</button>
         </div>
      </div>
   </div>
</div>
    
    <?php include("../templates/logoutModal.php") ?>
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
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>


</body>

</html>