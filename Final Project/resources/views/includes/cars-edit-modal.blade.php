<!-- MODAL -->
<div class="modal fade" id="modal-cars" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('cars.update') }}" method="POST" id="form" >
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title">Cars</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        {{-- Hidden input --}}
        <input id="car-id" hidden name="id" type="text">

        <div class="modal-body">
            <div class="mb-3">
              <label class="form-label" >Brand</label>
              <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label" >Model</label>
              <input name="model" type="text" class="form-control" id="model" value=""  required/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Body Type</label>
              <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>                  
            </div>
            <div class="mb-3">
              <label class="form-label" >Seats</label>
              <input name="seats" type="text" class="form-control" id="seats" value=""  required/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Color</label>
              <input name="color" type="text" class="form-control" id="color" value=""  required/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Fuel Type</label>
              <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
              <label class="form-label" >Mileage</label>
              <input name="mileage" type="text" class="form-control" id="mileage" value=""  required/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Transmission</label>
              <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>                  
            </div>
            <div class="mb-3">
              <label class="form-label" >Power</label>
              <input name="power" type="text" class="form-control" id="power" value=""  required/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Length</label>
              <input name="length" type="text" class="form-control" id="length" value=""  required/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Width</label>
              <input name="width" type="text" class="form-control" id="width" value=""  required/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Height</label>
              <input name="height" type="text" class="form-control" id="height" value=""  required/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Cargo Volume</label>
              <input name="cargo" type="text" class="form-control" id="cargo" value=""  required/>
            </div>

        </div>

        <div class="modal-footer">
          <button type="button" data-bs-dismiss="modal" class="btn btn-secondary" >Cancel</button>
          <button type="submit" name="update" class="btn btn-primary task-action-btn" id="update">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>