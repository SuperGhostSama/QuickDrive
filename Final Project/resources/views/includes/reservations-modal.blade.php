<!-- MODAL -->
<div class="modal fade" id="modal-reservation" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ route('reservations.update') }}" method="POST" id="form" >
          @csrf
          @method('PUT')
          <div class="modal-header">
            <h5 class="modal-title" id="modal-title">Reservation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            {{-- Hidden input --}}
            <input id="reservation-id" hidden name="id" type="text">

          <div class="modal-body">
            <div class="mb-3">
                <label class="form-label" >Status</label>
                <select name="status"  class="form-select" aria-label="Default select example">
                    <option value="Accepted">Accepted</option>
                    <option value="Pending">Pending</option>
                    <option value="Rejected">Rejected</option>
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