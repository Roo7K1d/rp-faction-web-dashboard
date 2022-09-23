<div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Event eintragen</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">
                  Bitte gehe sicher, dass das Event, dass du eintragen willst, nicht bereits existiert.
                  <br>
                  <br>
                  <form <?php echo 'action="https://rootk1d.xyz/awi-system/functions/addEvent.php?id=' . $_GET['id'] .'&username=' . $_GET['username'] .'&fullname=' . $_GET['fullname'] .'&role=' . $_GET['role'] .'&birthday=' . $_GET['birthday'] .'&usersince=' . $_GET['usersince'] .'&phone=' . $_GET['phone'] .'&number=' . $_GET['number'] .'" method="post">' ?>"
                     <div class="mb-3">
                        <label for="inputTitle" class="form-label font-weight-bold">Titel</label>
                        <input type="text" class="form-control" id="inputTitle" name="inputTitle" placeholder="Training / Ausbildung / Meeting / Bahama Mamas" required>
                     </div>
                     <div class="form-row">
                         <div class="col-md-6">
                            <label for="inputStart" class="form-label font-weight-bold">Start-Datum</label>
                            <input type="text" class="form-control" id="inputStart" name="inputStart" placeholder="bitte in diesem Format: YYYY-MM-DD" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputStartTime" class="form-label font-weight-bold">Start-Zeit</label>
                            <input type="text" class="form-control" id="inputStartTime" name="inputStartTime" placeholder="21:30" required>
                        </div>
                     </div>
                     <br>
                     <div class="form-row">
                         <div class="col-md-6">
                            <label for="inputEnd" class="form-label font-weight-bold">End-Datum</label>
                            <input type="text" class="form-control" id="inputEnd" name="inputEnd" placeholder="bitte in diesem Format: YYYY-MM-DD" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEndTime" class="form-label font-weight-bold">End-Zeit</label>
                            <input type="text" class="form-control" id="inputEndTime" name="inputEndTime" placeholder="23:30" required>
                        </div>
                     </div>
                     <br>
                     <div class="mb-3">
                        <label for="inputDescription" class="form-label font-weight-bold">Beschreibung</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="inputDescription" id="inputDescription"></textarea>
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