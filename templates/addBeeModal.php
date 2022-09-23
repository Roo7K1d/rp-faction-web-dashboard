<div class="modal fade" id="addBeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Benutzer erstellen</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">
                  Bitte gehe vorher sicher, dass der Benutzer nicht bereits existiert.
                  <br>
                  <form <?php echo 'action="https://rootk1d.xyz/awi-system/functions/addBee.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'" method="post">' ?>"
                     <div class="mb-3">
                        <label for="inputFullName" class="form-label font-weight-bold">Name</label>
                        <input type="text" class="form-control" id="inputFullName" name="inputFullName" placeholder="Logan McConnaughey" required>
                     </div>
                     <div class="mb-3">
                        <label for="inputPhone" class="form-label font-weight-bold">Telefonnummer</label>
                        <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="1234567" required>
                     </div>
                     <div class="mb-3">
         <label for="inputPassword" class="form-label font-weight-bold">Zugehörigkeit</label>
         <textarea class="form-control" id="inputGang" name="inputGang" rows="3" placeholder="Grove / Vagos / Arcadius" required></textarea>
         </div>
               </div>
               <div class="modal-footer">
               <button class="btn btn-secondary" type="button" data-dismiss="modal">Abbrechen</button>
               <button type="submit" class="btn btn-success">Absenden</button>
               </div>
               </form>
            </div>
         </div>
      </div>