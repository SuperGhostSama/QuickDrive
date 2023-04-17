<!-- MODAL -->
<div class="modal fade" id="modal-brands" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ route('brands.store') }}" method="POST" id="form" data-parsley-validate>
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="modal-title">Brands</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="mb-3">
                <label class="form-label" >Brand</label>
                <input name="name" type="text" class="form-control" id="brand" value=""  required data-parsley-pattern="^[a-zA-Z0-9 ]*$"/>
              </div>
          </div>

          <div class="modal-footer">
            <button type="button" data-bs-dismiss="modal" class="btn btn-secondary" >Cancel</button>
            <button type="submit" name="save" class="btn btn-primary task-action-btn" id="save">Save</button>
          </div>
        </form>
      </div>
    </div>
</div>
