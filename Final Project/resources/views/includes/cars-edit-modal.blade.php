<!-- MODAL -->
<div class="modal fade" id="modal-cars-edit" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('cars.update') }}" method="POST" id="form" enctype="multipart/form-data" data-parsley-validate>
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
              <select name="brand"  class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label" >Model</label>
              <input name="model" type="text" class="form-control" id="model" value=""  required data-parsley-pattern="^[a-zA-Z0-9 ]*$"/>
            </number
            <div class="mb-3">
              <label class="form-label" >Body Type</label>
              <select name="bodytype"  class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
              </select>                  
            </div>
            <div class="mb-3">
              <label class="form-label" >Seats</label>
              <input name="seats" type="number" class="form-control" id="seats" value=""  required data-parsley-pattern="^[0-9]+$"/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Color</label>
              <input name="color" type="text" class="form-control" id="color" value=""  required/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Fuel Type</label>
              <select name="fueltype"  class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                </select>
            </div>
            <div class="mb-3">
              <label class="form-label" >Mileage</label>
              <input name="mileage" type="number" class="form-control" id="mileage" value=""  required data-parsley-pattern="^[0-9]+$"/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Transmission</label>
              <select name="transmission"  class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                </select>                  
            </div>
            <div class="mb-3">
              <label class="form-label" >Power</label>
              <input name="power" type="number" class="form-control" id="power" value=""  required data-parsley-pattern="^[0-9]+$"/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Length</label>
              <input name="length" type="number" class="form-control" id="length" value=""  require data-parsley-pattern="^[0-9]+$"d/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Width</label>
              <input name="width" type="number" class="form-control" id="width" value=""  required data-parsley-pattern="^[0-9]+$"/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Height</label>
              <input name="height" type="number" class="form-control" id="height" value=""  required data-parsley-pattern="^[0-9]+$"/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Cargo Volume</label>
              <input name="cargo" type="number" class="form-control" id="cargo" value=""  required data-parsley-pattern="^[0-9]+$"/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Price</label>
              <input name="price" type="number" class="form-control" id="price" value=""  required data-parsley-pattern="^[0-9]+$"/>
            </div>
            <div class="mb-3">
              <label class="form-label" >Status</label>
              <select name="status"  class="form-select" aria-label="Default select example">
                  <option value="Available">Available</option>
                  <option value="Reserved">Reserved</option>
              </select>                  
            </div>
            <div class="mb-3">
                <label for="images">Images :</label>
                <input id="images" type="file" name="images[]" multiple>
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