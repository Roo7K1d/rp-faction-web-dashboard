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

    <link href="../css/fullcalendar/main.css" rel="stylesheet">

    <script src="../js/fullcalendar/main.js"></script>
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'listWeek',
          themeSystem: 'bootstrap',
          timeZone: 'local',
          buttonText: {
            today: "Heute",
            prev: "Zurück",
            next: "Weiter"
          },
          headerToolbar: {
              start: 'title',
              center: 'today',
              end: 'prev,next',
          },
          locale: 'de',
          height: '70vh',
          displayEventTime: true,
          displayEventEnd: true,
          events: [

            <?php
         
         $sql="SELECT * FROM events";
         $result=$conn->query($sql);
         
         while ($row = $result->fetch_assoc()) {
         
            echo '
         
            {
                  title  : "' . $row['title'] .'",
                  start  : "' . $row['start'] .' ' . $row['starttime'] .'",
                  end    : "' . $row['end'] .' ' . $row['endtime'] .'",
                  id: "' . $row['id'] .'"

            },
         
         ';
         
         }
         ?>

          ],
            eventClick: function(event) {
                console.log("#eventModal-" + event.event.id)
                var modal = $("#eventModal-" + event.event.id);
                modal.modal();
            }
        });
        calendar.render();
      });

    </script>

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
                    <h1 class="h3 mb-2 text-gray-800">Kalender</h1>
                    <p class="mb-4">Auf dieser Seite werden alle Events, Ausbildungen, Meetings und Ähnliches aufgelistet, um den Mitarbeitern einen leichten Überblick zu verschaffen.</p>
                    <div class="card shadow mb-4">
                     <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Kalender</h6>
                     </div>
                     <div class="card-body">
                        <div id="calendar"></div>
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
         
         $sql="SELECT * FROM events";
         $result=$conn->query($sql);
         
         while ($row = $result->fetch_assoc()) {
         
            echo '
         
         <div class="modal fade" id="eventModal-' . $row['id'] . '" tabindex="-1" role="dialog" aria-labelledby="editLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-xl" role="document">
         <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title" id="editLabel">Event - ' . $row['title'] .'</h5>
         <button class="close" type="button" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">×</span>
         </button>
         </div>
         <div class="modal-body">
         <!--
         <form class="vanilla" action="../functions/participate.php" method="post">
                                       <button type="submit" class="btn btn-success btn-sm btn-icon-split" id="id" name="id" value="' . $row["id"] . '">
                                       <span class="icon text-white-50">
                                       <i class="fas fa-door-open"></i>
                                       </span>
                                       <span class="text">Teilnehmen</span>
                                       </button>
                                       </form>
                                       <form class="vanilla" action="../functions/dontParticipate.php" method="post">
                                       <button type="submit" class="btn btn-danger btn-sm btn-icon-split" id="id" name="id" value="' . $row["id"] . '">
                                       <span class="icon text-white-50">
                                       <i class="fas fa-door-closed"></i>
                                       </span>
                                       <span class="text">Nicht mehr teilnehmen</span>
                                       </button>
                                       </form>
         <br>
         -->
         <div class="mb-3">
                        <label for="inputDescription" class="form-label font-weight-bold">Beschreibung</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="inputDescription" id="inputDescription" readonly style="background-color: #FFF;">' . $row['description'] .'</textarea>
         </div>
         <!--
         <hr>
         <div class="mb-3">
                        <label for="participants" class="form-label font-weight-bold">Teilnehmer</label>
                        <textarea class="form-control" id="participants" rows="10" name="participants" id="participants">' . $row['description'] .'</textarea>
         </div>
         -->
         </div>
         <div class="modal-footer">
         <button class="btn btn-secondary" type="button" data-dismiss="modal">Schließen</button>
         </div>
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

    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

    <!-- Page level plugins -->

</body>

</html>