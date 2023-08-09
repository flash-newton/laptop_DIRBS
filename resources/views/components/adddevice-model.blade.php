<div wire:ignore.self class="modal fade" id="addmod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <!-- Modal content -->
  <div class="modal-dialog">
      <div class="modal-content">
          <form wire:submit.prevent="addItem">
              <div class="modal-body">
                  <h4 class="card-title">Add a Device</h4>
                  <p class="card-description">Please enter device details</p>
                  <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                          name="name" wire:model="name">
                      @error('name')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Barcode</label>
                      <input type="text" class="form-control @error('barcode') is-invalid @enderror" id="barcode"
                          name="barcode" wire:model="barcode">
                      @error('barcode')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="exampleTextarea1">Description <small>*optional*</small></label>
                      <textarea class="form-control" wire:model="description" name="description" rows="3"></textarea>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="addItem">
                      Confirm
                  </button>
              </div>
          </form>
      </div>
  </div>
</div>
