<?php

include("./db.php");

if ($conn->connect_error) {
    die('Error connecting to database: '. $conn->connect_error);
}

?>


<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Profile - <?php echo $_GET['fullname']; ?></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="col-12 text-center"><h1>----------------------</h1></div>
            <br>
            <br>
            <div class="col-12 text-center"><h1>WORK IN PROGRESS</h1></div>
            <br>
            <br>
            <div class="col-12 text-center"><h1>----------------------</h1></div>
            <!--
            <center>
                    <img src="https://rootk1d.xyz/awi-system/img/undraw_profile.svg" name="aboutme" width="140" height="140" border="0" class="rounded-circle"></a>
                    <br>
                    <h4><?php echo $_GET['fullname']; ?></h4>
                    <span class="badge badge-success"><i class="fa fa-user-tag" aria-hidden="true"></i>  <?php echo strtoupper($_GET['role']); ?></span><br>
                    <small>Beigetreten: <?php echo $_GET['usersince']; ?></small>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong><u>Über mich</u></strong><br><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                    <br>
                    </center>
-->
         </div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-warning">Edit</button>
            <button class="btn btn-success">Submit</button>
         </div>
      </div>
   </div>
</div>