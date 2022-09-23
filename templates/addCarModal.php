<div class="modal fade" id="addCarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                  Bitte gehe vorher sicher, dass das Kennzeichen nicht bereits existiert.
                  <br>
                  <form <?php echo 'action="https://rootk1d.xyz/awi-system/functions/addCars.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'" method="post">' ?>
                     <div class="mb-3">
                        <label for="inputPlate" class="form-label font-weight-bold">Kennzeichen</label>
                        <input type="text" class="form-control" id="inputPlate" name="inputPlate" placeholder="XYZ 123" required>
                     </div>
                     <div class="mb-3">
                        <label for="inputOwner" class="form-label font-weight-bold">Besitzer</label>
                        <input type="text" class="form-control" id="inputOwner" name="inputOwner" placeholder="Logan McConnaughey" required>
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