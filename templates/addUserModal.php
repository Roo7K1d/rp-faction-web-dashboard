<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">
                  Please make sure that the user you are trying to add doesn't already exist.
                  <br>
                  <form <?php echo 'action="http://rootk1d.xyz/awi-system/functions/addUser.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'" method="post">' ?>
                     <div class="mb-3">
                        <label for="inputUserName" class="form-label font-weight-bold">Username</label>
                        <input type="text" class="form-control" id="inputUserName" name="inputUserName" placeholder="LoganMcCon" required>
                     </div>
                     <div class="mb-3">
                        <label for="inputRole" class="form-label font-weight-bold">Role</label>
                        <select class="form-control" id="inputRole" name="inputRole" required>
                           <option>promoter</option>
                           <option>barkeeper</option>
                           <option>security trainee</option>
                           <option>security staff</option>
                           <option>security manager</option>
                           <option>club manager</option>
                           <option>head of event / pr</option>
                           <option>vice president</option>
                           <option>rechte hand</option>
                           <option>co ceo</option>
                           <option>ceo</option>
                        </select>
                     </div>
                     <div class="mb-3">
                        <label for="inputFullName" class="form-label font-weight-bold">Full Name</label>
                        <input type="text" class="form-control" id="inputFullName" name="inputFullName" placeholder="Logan McConnaughey" required>
                     </div>
                     <div class="mb-3">
                        <label for="inputPassword" class="form-label font-weight-bold">Password</label>
                        <input type="text" class="form-control" id="inputPassword" name="inputPassword" placeholder="passwort" required>
                     </div>
                     <div class="mb-3">
                        <label for="inputPhone" class="form-label font-weight-bold">Phone Number</label>
                        <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="1234567" required>
                     </div>
                     <div class="mb-3">
                        <label for="inputNumber" class="form-label font-weight-bold">Service Number</label>
                        <input type="text" class="form-control" id="inputNumber" name="inputNumber" placeholder="38" required>
                     </div>
               </div>
               <div class="modal-footer">
               <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
               <button type="submit" class="btn btn-success">Submit</button>
               </div>
               </form>
            </div>
         </div>
      </div>