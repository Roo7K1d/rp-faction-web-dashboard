<div class="modal fade" id="addWeaponOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Entry</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">
                  Please make sure that you don't have multiple entries for the same customer.
                  <br>
                  <form <?php echo 'action="https://rootk1d.xyz/awi-system/functions/addWeaponOrder.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'" method="post">' ?>
                     <div class="mb-3">
                        <label for="inputName" class="form-label font-weight-bold">Name</label>
                        <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Heiko Vindicta" required>
                     </div>
                     <div class="mb-3">
                        <label for="inputAmount" class="form-label font-weight-bold">Weapons Amount</label>
                        <input type="text" class="form-control" id="inputAmount" name="inputAmount" placeholder="15" required>
                     </div>
                     <div class="form-group">
    <label for="inputNotes">Notes</label>
    <textarea class="form-control" id="inputNotes" name="inputNotes" rows="10" placeholder="..." required></textarea>
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