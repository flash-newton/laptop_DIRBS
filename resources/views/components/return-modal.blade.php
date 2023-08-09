
<div wire:ignore.self class="modal fade" id="returnmod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <div>
                <form wire:submit.prevent="checkReturn">
                    <div class="modal-body">
                        <h4 class="card-title">Return a Device</h4>
                        <p class="card-description">Please enter following details to return device</p>
                        @if($return==1)
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Device under bc-{{$bcodereturn}} is available
                          
                            </div>

                        @elseif($return==2)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-alert"></i>
                                Device already returned
                        
                            </div> 
                    
                        @elseif($return==0 && $bcodereturn)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-alert"></i>
                                No Device under stated barcode found within system
                         
                            </div>
                       
                        @endif
                     
                    
                     
                        <div class="form-group">
                            <label for="exampleInputUsername1">Device barcode</label>
                            <input type="text" class="form-control @error('bcodereturn') is-invalid @enderror" id="bcodereturn"
                                name="bcode" wire:model.defer="bcodereturn" wire:change="checkReturn" >
                            @error('bocdereturn')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                   
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                       
                        <button type="submit" class="btn btn-primary"  >
                            Borrow
                        </button>

                    </div>
                </form>
            </div>
        </div>
        
    </div>
  </div>