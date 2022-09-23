<?php
session_start();

$conn = new mysqli('localhost', 'root', '1001010mM', 'arcadius');

if ($conn->connect_error)
{
    die('Error connecting to database: ' . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$users = mysqli_num_rows($conn->query($sql));

$sql = "SELECT * FROM users WHERE duty = 'On'";
$onduties = mysqli_num_rows($conn->query($sql));

$sql = "SELECT * FROM realestate";
$realestates = mysqli_num_rows($conn->query($sql));

$sql = "SELECT * FROM events";
$events = mysqli_num_rows($conn->query($sql));
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

include ("../templates/sidenav.php");

?>
    

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <?php include ("../templates/navbar.php") ?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Aufträge</h1>
                    <p class="mb-4">Hier können Aufträge eingesehen und übernommen werden.</p>
                    <?php
if (strpos($_GET['role'], 'ceo') !== false || strpos($_GET['role'], 'hand') !== false || strpos($_GET['role'], 'president') !== false || $_GET['username'] == "CarlJackson" || $_GET['username'] == "LoganMcCon")
{

    echo '

                    <a href="#" class="btn btn-success btn-sm btn-icon-split" data-toggle="modal" data-target="#addMissionModal">
                        <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Auftrag erstellen</span>
                        </a>
                        <br>
                        <br>
                    ';

}

?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Aufträge-Liste <br></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Auftrag</th>
                                            <th>Status</th>
                                            <th>Auftragnehmer</th>
                                            <th>Deadline</th>
                                            <th>Aktionen</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
$sql = "SELECT * FROM mission";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc())
{

    if (strpos($_GET['role'], 'ceo') !== false || strpos($_GET['role'], 'hand') !== false || strpos($_GET['role'], 'president') !== false || $_GET['username'] == "CarlJackson" || $_GET['username'] == "LoganMcCon")
    {
        echo '
                                                <tr>
                                            <td>' . $row['title'] . '</td>';

        if ($row['status'] == "Offen")
        {
            echo '<td><span class="badge badge-success">' . $row['status'] . '</span></td>';
        }
        else if ($row['status'] == "In Bearbeitung")
        {
            echo '<td><span class="badge badge-warning">' . $row['status'] . '</span></td>';
        }
        else
        {
            echo '<td><span class="badge badge-danger">' . $row['status'] . '</span></td>';
        }

        echo '<td>' . $row['assignee'] . '</td>
                                            <td>' . $row['deadline'] . '</td>
                                            <td>';

        if ($row['status'] == "Offen")
        {
            echo '<form class="vanilla" action="https://rootk1d.xyz/awi-system/functions/takeMission.php?id=' . $_GET['id'] . '&username=' . $_GET['username'] . '&fullname=' . $_GET['fullname'] . '&role=' . $_GET['role'] . '&birthday=' . $_GET['birthday'] . '&usersince=' . $_GET['usersince'] . '&phone=' . $_GET['phone'] . '&number=' . $_GET['number'] . '" method="post">
                                       <button type="submit" class="btn btn-success btn-sm btn-icon-split" id="id" name="id" value="' . $row["id"] . '">
                                       <span class="icon text-white-50">
                                       <i class="fas fa-check"></i>
                                       </span>
                                       <span class="text">Übernehmen</span>
                                       </button>
                                       </form>';
        }
        else if ($row['status'] == "In Bearbeitung" && $row['assignee'] == $_GET['fullname'])
        {
            echo '
                                                <form class="vanilla" action="https://rootk1d.xyz/awi-system/functions/archiveMission.php?id=' . $_GET['id'] . '&username=' . $_GET['username'] . '&fullname=' . $_GET['fullname'] . '&role=' . $_GET['role'] . '&birthday=' . $_GET['birthday'] . '&usersince=' . $_GET['usersince'] . '&phone=' . $_GET['phone'] . '&number=' . $_GET['number'] . '" method="post">
                                       <button type="submit" class="btn btn-warning btn-sm btn-icon-split" id="id" name="id" value="' . $row["id"] . '">
                                       <span class="icon text-white-50">
                                       <i class="fas fa-check"></i>
                                       </span>
                                       <span class="text">Abschließen</span>
                                       </button>
                                       </form>
                                                ';
        }

        echo '<form class="vanilla" action="https://rootk1d.xyz/awi-system/functions/deleteMission.php?id=' . $_GET['id'] . '&username=' . $_GET['username'] . '&fullname=' . $_GET['fullname'] . '&role=' . $_GET['role'] . '&birthday=' . $_GET['birthday'] . '&usersince=' . $_GET['usersince'] . '&phone=' . $_GET['phone'] . '&number=' . $_GET['number'] . '" method="post">
                                       <button type="submit" class="btn btn-danger btn-sm btn-icon-split" id="id" name="id" value="' . $row["id"] . '">
                                       <span class="icon text-white-50">
                                       <i class="fas fa-trash"></i>
                                       </span>
                                       <span class="text">Löschen</span>
                                       </button>
                                       </form></td>
                                            </tr>
                                                ';
    }
    else if ($row['status'] == "Offen")
    {
        echo '
                                                <tr>
                                            <td>' . $row['title'] . '</td>
                                            <td><span class="badge badge-success">' . $row['status'] . '</span></td>
                                            <td>' . $row['assignee'] . '</td>
                                            <td>' . $row['deadline'] . '</td>
                                            <td><form class="vanilla" action="https://rootk1d.xyz/awi-system/functions/takeMission.php?id=' . $_GET['id'] . '&username=' . $_GET['username'] . '&fullname=' . $_GET['fullname'] . '&role=' . $_GET['role'] . '&birthday=' . $_GET['birthday'] . '&usersince=' . $_GET['usersince'] . '&phone=' . $_GET['phone'] . '&number=' . $_GET['number'] . '" method="post">
                                       <button type="submit" class="btn btn-success btn-sm btn-icon-split" id="id" name="id" value="' . $row["id"] . '">
                                       <span class="icon text-white-50">
                                       <i class="fas fa-check"></i>
                                       </span>
                                       <span class="text">Übernehmen</span>
                                       </button>
                                       </form></td>
                                            </tr>
                                                ';
    }
    else if ($row['status'] == "Geschlossen")
    {
        echo '
                                                <tr>
                                            <td>' . $row['title'] . '</td>
                                            <td><span class="badge badge-danger">' . $row['status'] . '</span></td>
                                            <td>' . $row['assignee'] . '</td>
                                            <td>' . $row['deadline'] . '</td>
                                            <td>-</td>
                                            </tr>
                                                ';
    }
    else if ($row['status'] == "In Bearbeitung" && $row['assignee'] == $_GET['fullname'])
    {
        echo '
                                                <tr>
                                            <td>' . $row['title'] . '</td>
                                            <td><span class="badge badge-warning">' . $row['status'] . '</span></td>
                                            <td>' . $row['assignee'] . '</td>
                                            <td>' . $row['deadline'] . '</td>
                                            <td><form class="vanilla" action="https://rootk1d.xyz/awi-system/functions/archiveMission.php?id=' . $_GET['id'] . '&username=' . $_GET['username'] . '&fullname=' . $_GET['fullname'] . '&role=' . $_GET['role'] . '&birthday=' . $_GET['birthday'] . '&usersince=' . $_GET['usersince'] . '&phone=' . $_GET['phone'] . '&number=' . $_GET['number'] . '" method="post">
                                       <button type="submit" class="btn btn-warning btn-sm btn-icon-split" id="id" name="id" value="' . $row["id"] . '">
                                       <span class="icon text-white-50">
                                       <i class="fas fa-check"></i>
                                       </span>
                                       <span class="text">Abschließen</span>
                                       </button>
                                       </form></td>
                                            </tr>
                                                ';
    }

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
            
            <?php include ("../templates/footer.php") ?>

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
    
    <?php include ("../templates/logoutModal.php") ?>
    <?php include ("../templates/addMissionModal.php") ?>
     <?php include ("../templates/userModal.php") ?>

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
    <script>
        // Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    "order": [[3, "asc"]]
  });
});

    </script>

    <script>
        $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    </script>

    <script>
      function toClipboard(text) {
        navigator.clipboard.writeText(text);
      }
    </script>


</body>

</html>
