<!-- MODAL -->
<div class="modal fade" id="modal-brands-edit" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ route('brands.update') }}" method="POST" id="form" data-parsley-validate>
          @csrf
          @method('PUT')
          <div class="modal-header">
            <h5 class="modal-title" id="modal-title">Brands</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          {{-- Hidden input --}}
          <input id="brand-id" hidden name="id" type="text">
          
          <div class="modal-body">
              <div class="mb-3">
                <label class="form-label" >Brand</label>
                <input name="name" type="text" class="form-control" id="brand" value=""  required data-parsley-pattern="^[A-Z][a-z]*$"/>
                <span id="validateBrand"></span>
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