<div class="modal fade" id="addStorageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Eintrag erstellen</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">
                  Bitte gehe vorher sicher, dass du nicht bereits einen Eintrag zur gleichen Aktivität erstellt hast.
                  <br>
                  <form <?php echo 'action="https://rootk1d.xyz/awi-system/functions/addStorage.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'" method="post">' ?>
                     <div class="mb-3">
                        <label for="inputAction" class="form-label font-weight-bold">Aktion</label>
                        <select class="form-control" id="inputAction" name="inputAction" required>
                           <option>Einlagerung</option>
                           <option>Entnahme</option>
                           <?php 
                           
                           if ($_GET['username'] == "CarlJackson") {
                              echo '<option>Lagerbestand</option>';
                           }

                           ?>
                        </select>
                     </div>
                     <div class="form-group">
    <label for="inputDescription">Beschreibung</label>
    <textarea class="form-control" id="inputDescription" name="inputDescription" rows="10" placeholder="- 200x Magazine" required></textarea>
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