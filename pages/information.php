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
                    <h1 class="h3 mb-2 text-gray-800">Dienstinformationen</h1>
                    <p class="mb-4">Hier findest du alle wichtigen Dokumente und Informationen wie z.B. die Funkcodes, die Funkfrequenzen, etc.</p>
                    <div class="card shadow mb-4">
                     <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Infos</h6>
                     </div>
                     <div class="card-body">
                        <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-frequencies-tab" data-toggle="tab" href="#nav-frequencies" role="tab" aria-controls="nav-frequencies" aria-selected="true">Funkfrequenzen</a>
    <a class="nav-item nav-link" id="nav-codes-tab" data-toggle="tab" href="#nav-codes" role="tab" aria-controls="nav-codes" aria-selected="false">Funkcodes</a>
    <a class="nav-item nav-link" id="nav-discipline-tab" data-toggle="tab" href="#nav-discipline" role="tab" aria-controls="nav-discipline" aria-selected="false">Disziplinarkatalog</a>
    <a class="nav-item nav-link" id="nav-rules-tab" data-toggle="tab" href="#nav-rules" role="tab" aria-controls="nav-rules" aria-selected="false">Richtlinien</a>
    <a class="nav-item nav-link" id="nav-app-tab" data-toggle="tab" href="#nav-app" role="tab" aria-controls="nav-app" aria-selected="false">Bewerbungsformular</a>
    <a class="nav-item nav-link" id="nav-clothing-tab" data-toggle="tab" href="#nav-clothing" role="tab" aria-controls="nav-clothing" aria-selected="false">Arbeitskleidung</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-frequencies" role="tabpanel" aria-labelledby="nav-frequencies-tab">
    <br>
    <b><span class="badge badge-info">Arcadius Corp. (Mutterfirma)</span> : </b>91.11800<button class="btn text-primary" data-toggle="tooltip" data-placement="top" onclick="toClipboard('91.11800')" title="Frequenz in Zwischenablage kopieren"><i class="fa fa-copy"></i></button><br>
    <b><span class="badge badge-info">Blue Investments</span> : </b>171718<button class="btn text-primary" data-toggle="tooltip" data-placement="top" onclick="toClipboard('1234567890187')" title="Frequenz in Zwischenablage kopieren"><i class="fa fa-copy"></i></button><br>
    <b><span class="badge badge-info">Cayo Perico</span> : </b>190.50<button class="btn text-primary" data-toggle="tooltip" data-placement="top" onclick="toClipboard('190.11')" title="Frequenz in Zwischenablage kopieren"><i class="fa fa-copy"></i></button><br>
  </div>
  <div class="tab-pane fade" id="nav-codes" role="tabpanel" aria-labelledby="nav-codes-tab">
    <br>
    <h5><u>Funkcodes</u></h5><br>
    <b><span class="badge badge-primary">Code 1</span> -</b> Bestätigung vom Funkcheck<br>
    <b><span class="badge badge-primary">Code 2</span> -</b> Verstanden<br>
    <b><span class="badge badge-primary">Code 3</span> -</b> Erbitte Standort<br>
    <b><span class="badge badge-primary">Code 4</span> -</b> Erreichbar (im Dienst)<br>
    <b><span class="badge badge-primary">Code 5</span> -</b> Nicht Erreichbar (außer Dienst)<br>
    <br>
    <b><span class="badge badge-danger">Code 6</span> -</b> NOTFALL!<br>
    <b><span class="badge badge-danger">Code 7</span> -</b> ALLE TRFFEN AM BÜRO!<br>
    <b><span class="badge badge-danger">Break</span> -</b> Sobald man im Funk "<b>Break</b>" hört, müssen <b>alle Personen</b> aufhören zu sprechen!
    <br>
    <br>
    <hr>
    <h5><u>Funkdisziplin</u></h5><br>
    Das Einhalten der Funkdisziplin stellt die Grundlage einer reibungslosen Kommunikation dar. Sie muss daher stets eingehalten werden.<br>
    Folgende Punkte sind einzuhalten:
    <br><br>
    - der prinzipielle Ablauf einer Funkkommunikation ist einzuhalten<br>
    - deutliche Aussprache<br>
    - Funksprüche kurz halten<br>
    - Höflichkeitsformen sind zu beachten<br><br>
    Schwierigkeiten und Probleme beim Einhalten dieser Punkte können durch folgenden Merksatz vermieden werden:<br><br>
    <b><span class="badge badge-danger">Denken</span> -> <span class="badge badge-warning">Drücken</span> -> <span class="badge badge-info">Warten</span> -> <span class="badge badge-success">Sprechen</span></b>
  </div>
  <div class="tab-pane fade" id="nav-discipline" role="tabpanel" aria-labelledby="nav-discipline-tab">
    <br>
    <h5><u>Grundsatz</u></h5>
    <br>
    1. Verstoßen Mitarbeiter schuldhaft gegen Pflichten, die Ihnen durch die Richtlinien und
dem Verhaltenskodex auferlegt sind, können gegen sie Disziplinarmaßnahmen angeordnet
werden.<br>
2. Von einer Disziplinarmaßnahme wird abgesehen, wenn es genügt, den Mitarbeiter zu
verwarnen. <br>
3. Jede Disziplinarstrafe wird im Einzelfall von der Geschäftsleitung geprüft. <br>
4. Bei jedem Disziplinarverfahren gilt der Grundsatz der Verhältnismäßigkeit.<br><hr><br>
<h5><u>Disziplinarmaßnahmen</u></h5>
<br>1. Als Disziplinarmaßnahmen sind zulässig:<br>
(1) Übergabe von Schusswesten/ Magazine / Repairkits an das Unternehmen<br>
(2) Bußgeld in individueller Höhe an das Unternehmen<br>
(3) Übergabe von Tilidin in individueller Höhe an das Unternehmen<br>
(4) Ausschluss aus dem Unternehmen<br><br>
2. Bei erneuter Verfehlung wegen der gleichen Sache, kann die Disziplinarstrafe verdoppelt werden.


  </div>
  <div class="tab-pane fade" id="nav-rules" role="tabpanel" aria-labelledby="nav-rules-tab">
    <br>
    <h5><u>Grundsatz</u></h5>
    <br>
    1. Arcadius Corp. ist ein Sicherheits- & Eventmanagement Unternehmen.<br>
2. Die Leitung der Geschäfte unterliegt Heiko Vindicta und Jack Vindicta.<br>
3. Arcadius Corp. ist gegliedert in die Bereiche:<br>
(a) Geschäftsleitung (CEO)<br>
(b) Stellv. Geschäftsleitung (Co. CEO)<br>
(c) Eventmanagement<br>
(d) IT<br>
(e) Security Team<br>
(f) Clubmanagement<br>
(g) Promoter <br><br><hr>

<h5><u>Öffentliche Darstellung</u></h5>
<br>1. Alle Mitarbeiter verhalten sich in der Öffentlichkeit freundlich, seriös und höflich.<br>
2. Es ist strengstens untersagt, in der Öffentlichkeit Waffen zu präsentieren. Dies gilt nicht
für den Zweck der Selbstverteidigung oder für eine Geiselnahme.<br>
3. Beschädigte Firmenfahrzeuge müssen umgehend repariert werden.<br>
4. Firmenfahrzeuge sind regelmäßig in der Waschanlage zu reinigen.<br>
5. Der Firmensitz ist ausschließlich in Business Garderobe zu betreten. Ausnahmen sind
das Wechseln von Kleidung und Einsätze, die andere Kleidung fordern.<br><br><hr>
<h5><u>Verhalten gegenüber Mitgliedern und Vorgesetzten</u></h5>
<br>1. Jeder Mitarbeiter begegnet anderen Mitarbeitern mit Respekt auf Augenhöhe.<br>
2. In Gefahrensituationen halten alle Mitglieder zusammen, niemand wird zurückgelassen.<br>
3. Den Anweisungen von Vorgesetzten ist Folge zu leisten. Vorgesetze sind:<br><br>
(a) Die Geschäftsleitung und deren Vertretung<br>
- Stehen über allen Mitarbeitern.<br><br>
(b) Heads of Events<br>
- Stehen über den Clubmanagern<br><br>
(c) Security Manager<br>
- Stehen über Security Staff und Security Trainee<br><br><hr>
<h5><u>Illegale Geschäftszweige</u></h5><br>
1. Illegale Geschäftszweige sind bedingungslos zu schützen.<br>
2. In der Öffentlichkeit darf nicht über illegale Geschäftszweige gesprochen werden.<br>
3. Unautorisierte Personen dürfen keine Informationen über illegale Geschäfte erlangen.<br>
4. Namen von Mitarbeitern sind zu schützen. Eine Weitergabe von Namen oder
Kontaktdaten an dritte ist untersagt.<br>
5. Die Organisation der illegalen Route und die Vermittlung von Informationen unterliegt<br><br>
I. Ice Snow<br>
II. Dwayne Johnson<br>
III. William Kings<br><br>
6. Die Zulassung neuer Bienchen, die Weiterleitung von Informationen, die Vermittlung von
Kontakten und alle sonstigen Anliegen der illegalen Route, darf nur durch die in Nummer
5 aufgeführten Mitarbeitern erfolgen. Konkret unterliegt diese Aufgabe Ice Snow. Dies
dient zum Schutz des Unternehmens.
7. Auf CayoPirates werden Mitarbeiter ausschließlich mit der Dienstnummer angesprochen.<br><br><hr>
<h5><u>Firmeneigentum und Ausrüstung</u></h5><br>
1. Firmeneigentum wird sorgfältig behandelt.<br>
2. Jeder Mitarbeiter ist für das Ihm überlassene Firmeneigentum verantwortlich.<br><br>
3. Firmenfahrzeuge<br>
(a) Firmenfahrzeuge sind BMW X6.<br>
(b) Die Außenfarbe ist Hochglanzschwarz.<br>
(c) Anbauteile, Unterbodenbeleuchtung und das Interieur dürfen verändert werden.<br>
(d) Firmenfahrzeuge dürfen nur von Mitarbeitern gefahren werden und sind nicht
übertragbar.<br>
(e) Verluste sind der Geschäftsleitung umgehend anzuzeigen.<br><br>
4. Waffen und Ausrüstung<br>
(a) Jeder Mitarbeiter ist für die Ihm zugeteilte Waffe verantwortlich.<br>
(b) Taser sind nur für dienstliche Zwecke zu tragen.<br>
(c) Jeder Mitarbeiter sorgt stets eigenverantwortlich für ausreichend Magazine.<br>
(d) Verluste und Beschädigungen sind der Geschäftsleitung umgehend anzuzeigen.<br> 



  </div>
  <div class="tab-pane fade" id="nav-app" role="tabpanel" aria-labelledby="nav-app-tab">
    <br>
    Wenn sich jemand für das Unternehmen bewerben will, könnt ihr dem- /derjenigen diesen Link schicken, welcher zu einem Formular (Bewerbung) führt: <br><br>
    https://forms.gle/J9toK78NvyeXzpMj8 <button class="btn text-primary" data-toggle="tooltip" data-placement="top" onclick="toClipboard('https\:\/\/forms.gle/J9toK78NvyeXzpMj8')" title="Link in Zwischenablage kopieren"><i class="fa fa-copy"></i></button>


  </div>
  <div class="tab-pane fade" id="nav-clothing" role="tabpanel" aria-labelledby="nav-clothing-tab">
    <br>
    Nachfolgend werden alle wichtigen Outfits für die Arbeitsbekleidung aufgelistet.<br><br>
    <h5><u>Security Trainee</u></h5><br>
    <b>Torso:</b> 352<br>
    <b>T-Shirt:</b> 15<br>
    <b>Arme:</b> 11<br>
    <b>Hosen:</b> 37<br>
    <b>Schuhe:</b> 10
    <br><hr>
    <h5><u>Insel Anzug</u></h5><br>
    <b>Torso:</b> 251/15<br>
    <b>T-Shirt:</b> 15<br>
    <b>Arme:</b> 16<br>
    <b>Hosen:</b> 95/15<br>
    <b>Schuhe:</b> 56<br>
    <b>Maske:</b> 114<br>
    <b>Helm:</b> 163/23
    <br><hr>
    <h5><u>Security Staff</u></h5><br>
    <b>Torso:</b> 11<br>
    <b>T-Shirt:</b> 7/1<br>
    <b>Arme:</b> 11<br>
    <b>Hosen:</b> 37<br>
    <b>Schuhe:</b> 10
    <br><hr>
    <h5><u>Kampfanzug</u></h5>
    <b>Torso:</b> 169/2<br>
    <b>T-Shirt:</b> 136<br>
    <b>Arme:</b> 17<br>
    <b>Hosen:</b> 37<br>
    <b>Schuhe:</b> 35/1<br>
    <b>Maske:</b> 139<br>
    <b>Helm:</b> 163
    <br><hr>
    <h5><u>IT</u></h5><br>
    <b>Torso:</b> 141/2 (Management); 141/0 (alle anderen)<br>
    <b>T-Shirt:</b> 15<br>
    <b>Arme:</b> 4<br>
    <b>Hosen:</b> 37<br>
    <b>Chain:</b> 144<br>
    <b>Maske:</b> 131


  </div>
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
     <?php include("../templates/userModal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
      function toClipboard(text) {
        navigator.clipboard.writeText(text);
      }
    </script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <script>
        $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    </script>

    <!-- Page level plugins -->

</body>

</html>