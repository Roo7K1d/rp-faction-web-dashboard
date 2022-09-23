<div class="modal fade" id="addMissionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Auftrag erstellen</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">
                  Bitte gehe vorher sicher, dass du nicht bereits deinen gewünschten Auftrag erstellt hast.
                  <br>
                  <form <?php echo 'action="https://rootk1d.xyz/awi-system/functions/addMission.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'" method="post">' ?>
                     <div class="mb-3">
                        <label for="inputTitle" class="form-label font-weight-bold">Titel</label>
                        <input type="text" class="form-control" id="inputTitle" name="inputTitle" placeholder="20x Magazine herstellen" required>
                     </div>
                     <div class="form-group">
    <label for="inputDeadline">Deadline</label>
    <textarea class="form-control" id="inputDeadline" name="inputDeadline" rows="10" placeholder="20.10.2021, 22:00" required></textarea>
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