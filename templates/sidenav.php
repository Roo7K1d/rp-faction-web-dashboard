<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<?php

$sql="SELECT * FROM feedback";
$feedbackAmount=mysqli_num_rows($conn->query($sql));

$sql="SELECT * FROM complaint";
$complaintAmount=mysqli_num_rows($conn->query($sql));

$sql="SELECT * FROM events";
$eventAmount=mysqli_num_rows($conn->query($sql));

$sql="SELECT * FROM mission WHERE status = 'Offen'";
$missionAmount=mysqli_num_rows($conn->query($sql));

?>

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" <?php echo 'href="http://rootk1d.xyz/awi-system/index.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">';?>
                <div class="sidebar-brand-icon">
                    <i class="fas fa-building"></i>
                </div>
                <div class="sidebar-brand-text mx-3">AWI-System</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" <?php echo 'href="http://rootk1d.xyz/awi-system/index.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">';?>
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Organisation
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" <?php echo 'href="http://rootk1d.xyz/awi-system/pages/employees.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">';?>
                    <i class="fas fa-fw fa-sitemap"></i>
                    <span>Mitarbeiterliste</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" <?php echo 'href="http://rootk1d.xyz/awi-system/pages/information.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">';?>
                    <i class="fas fa-fw fa-info"></i>
                    <span>Dienstinformationen</span></a>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" <?php echo 'href="http://rootk1d.xyz/awi-system/pages/calendar.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">';?>
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Kalender</span>  

                    <?php

                    if ($eventAmount !== 0) {
                        echo ' <span class="badge badge-danger">' . $eventAmount . '</span>';
                    }

                    ?>
                    
                
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" <?php echo 'href="http://rootk1d.xyz/awi-system/pages/complaint.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">';?>
                    <i class="fas fa-fw fa-meh"></i>
                    <span>Beschweren</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" <?php echo 'href="https://rootk1d.xyz/awi-system/pages/feedback.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">';?>
                    <i class="fas fa-fw fa-envelope-open-text"></i>
                    <span>Feedback geben</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" <?php echo 'href="https://rootk1d.xyz/awi-system/pages/duty.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">';?>
                    <i class="fas fa-fw fa-briefcase"></i>
                    <span>Dienstbereitschaft</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" <?php echo 'href="https://rootk1d.xyz/awi-system/pages/storage.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">';?>
                    <i class="fas fa-fw fa-boxes"></i>
                    <span>Lagerzugriffe</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" <?php echo 'href="https://rootk1d.xyz/awi-system/pages/missions.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">';?>
                    <i class="fas fa-fw fa-clipboard"></i>
                    <span>Aufträge</span>
                
                    <?php

                    if ($missionAmount !== 0) {
                        echo ' <span class="badge badge-danger">' . $missionAmount . '</span>';
                    }

                    ?>
                
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" <?php echo 'href="https://rootk1d.xyz/awi-system/pages/routes.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">';?>
                    <i class="fas fa-fw fa-route"></i>
                    <span>Routen</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <?php

            if ($_GET['username'] == 'LoganMcCon' || strpos($_GET['role'], 'head of event') !== false) { 

                echo '
                <!-- Heading -->
            <div class="sidebar-heading">
                Event Bereich
            </div>

            <!-- Nav Item - Charts -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="https://rootk1d.xyz/awi-system/pages/addevent.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Events</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">';

            }
            if (strpos($_GET['role'], 'ceo') !== false || $_GET['username'] == 'LoganMcCon' || $_GET['username'] == 'IceSnow' || $_GET['username'] == 'KadoKawa' || strpos($_GET['role'], 'sekretärin') !== false) {
                echo '
                <!-- Heading -->
            <div class="sidebar-heading">
                CEO Bereich
            </div>

            <!-- Nav Item - Charts -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="https://rootk1d.xyz/awi-system/pages/addevent.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Events</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="https://rootk1d.xyz/awi-system/pages/complaintlist.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">
                    <i class="fas fa-fw fa-meh"></i>
                    <span>Beschwerden</span>';
                    if ($complaintAmount !== 0) {
                        echo ' <span class="badge badge-danger">' . $complaintAmount .'</span>';
                    }
                    echo '</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://rootk1d.xyz/awi-system/pages/feedbacklist.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">
                    <i class="fas fa-fw fa-envelope-open"></i>
                    <span>Feedbacks</span>';
                    if ($feedbackAmount !== 0) {
                        echo ' <span class="badge badge-danger">' . $feedbackAmount .'</span>';
                    }
                    echo '</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://rootk1d.xyz/awi-system/pages/news.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Neuigkeit</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://rootk1d.xyz/awi-system/pages/weaponorder.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">
                    <i class="fas fa-fw fa-sort-amount-up"></i>
                    <span>Waffenbestellungen</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://rootk1d.xyz/awi-system/pages/cars.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">
                    <i class="fas fa-fw fa-car"></i>
                    <span>Dienstfahrzeuge</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
                ';
            }
            ?>

            <?php
            if (strpos($_GET['role'], 'ceo') !== false || $_GET['username'] == 'LoganMcCon' || $_GET['username'] == 'IceSnow' || $_GET['username'] == 'Fluffy' || $_GET['username'] == 'KadoKawa' || $_GET['username'] == 'WilliamKings') {
                echo '
                <!-- Heading -->
            <div class="sidebar-heading">
                Bienchen Bereich
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="https://rootk1d.xyz/awi-system/pages/bees.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">
                    <i class="fas fa-fw fa-bug"></i>
                    <span>Bienchenliste</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
                ';
            }
            ?>

            <?php
            
            if ($_GET['role'] == 'it manager' || $_GET['role'] == 'it trainee' || $_GET['role'] == 'it staff' || $_GET['username'] == 'LoganMcCon') {
                echo '
                <!-- Heading -->
            <div class="sidebar-heading">
                IT Bereich
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="https://rootk1d.xyz/awi-system/pages/users.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Benutzer</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="https://rootk1d.xyz/awi-system/pages/complaintlist.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">
                    <i class="fas fa-fw fa-meh"></i>
                    <span>Beschwerden</span>
                    ';
                    if ($complaintAmount !== 0) {
                        echo ' <span class="badge badge-danger">' . $complaintAmount .'</span>';
                    }
                    echo '</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://rootk1d.xyz/awi-system/pages/feedbacklist.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">
                    <i class="fas fa-fw fa-envelope-open"></i>
                    <span>Feedbacks</span>
                    ';
                    if ($feedbackAmount !== 0) {
                        echo ' <span class="badge badge-danger">' . $feedbackAmount .'</span>';
                    }
                    echo '</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://rootk1d.xyz/awi-system/pages/storagelist.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">
                    <i class="fas fa-fw fa-boxes"></i>
                    <span>Lagerzugriffe</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://rootk1d.xyz/awi-system/pages/cars.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">
                    <i class="fas fa-fw fa-car"></i>
                    <span>Dienstfahrzeuge</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
                ';
            }

            if ($_GET['username'] == 'LoganMcCon') {
                echo '
                <li class="nav-item">
                <a class="nav-link" href="https://rootk1d.xyz/awi-system/pages/routes.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'">
                    <i class="fas fa-fw fa-exclamation-triangle"></i>
                    <span>TEST BEREICH</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
                
                ';
            }
            ?>

        </ul>