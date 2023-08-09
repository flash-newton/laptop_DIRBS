<div wire:ignore.self class="modal fade" id="editmod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <!-- Modal content -->
    <div class="modal-dialog">
        
        
            <div class="modal-content">
                <div wire:loading>
                    <div class="text-center">
                        <div class="spinner-border text-primary" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                      </div>
                </div>
                <div wire:loading.remove>
                <form wire:submit.prevent="updateItem">
                    <div class="modal-body">
                        <h4 class="card-title">Update Device Details</h4>
                        <p class="card-description">Please enter latest device details</p>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" wire:model.defer="name">
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Barcode</label>
                            <input type="text" class="form-control @error('barcode') is-invalid @enderror" id="barcode"
                                name="barcode" wire:model.defer="barcode">
                            @error('barcode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Description <small>*optional*</small></label>
                            <textarea class="form-control" wire:model.defer="description" name="description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" >
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
  </div>
  