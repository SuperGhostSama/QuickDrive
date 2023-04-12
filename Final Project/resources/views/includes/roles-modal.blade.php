<!-- MODAL -->
<div class="modal fade" id="modal-roles" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ route ('assign.role')}}" method="POST" id="form" data-parsley-validate>
          @csrf
          @method('PUT')

          <div class="modal-header">
            <h5 class="modal-title" id="modal-title">Roles</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          {{-- Hidden input --}}
          <input id="user-id" hidden name="user_id" type="text">

          <div class="modal-body">
              <div class="mb-3">
                <label class="form-label" >Role</label>
                <select name="role" class="form-select" aria-label="Default select example">
                  <option  selected disabled >Open this select menu</option>
                  <option value="admin">admin</option>
                  <option value="moderator">moderator</option>
                  <option value="user">user</option>
                </select>
              </div>
              

          </div>

          <div class="modal-footer">
            <button type="button" data-bs-dismiss="modal" class="btn btn-secondary" >Cancel</button>
            <button type="submit" name="update" class="btn btn-warning task-action-btn" id="update">Update</button>
          </div>
        </form>
      </div>
    </div>
</div>