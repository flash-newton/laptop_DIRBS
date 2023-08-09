
<div wire:ignore.self class="modal fade" id="borrowmod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form wire:submit.prevent="borrowItem">
                    <div class="modal-body">
                        <h4 class="card-title">Borrow Device</h4>
                        <p class="card-description">Please enter following details to borrow device</p>
                        

                      
                        @if($found==1)
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-star"></i>
                                Device under bc-{{$bcode}} is available
                               
                            </div>

                        @elseif($found==2)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-alert"></i>
                                Identified device already rented
                            
                            </div> 
                    
                        @elseif($found==0 && $bcode)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <i class="mdi mdi-alert"></i>
                                No Device under stated barcode found within system
                            </div>
                       
                        @endif
                     
                    
                     
                        <div class="form-group">
                            <label for="exampleInputUsername1">Device barcode</label>
                            <input type="text" class="form-control @error('bcode') is-invalid @enderror" id="bcode"
                                name="bcode" wire:model.defer="bcode" wire:change="checkBC" >
                            @error('bocde')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Borrower Name</label>
                            <input type="text" class="form-control @error('uname') is-invalid @enderror" id="uname"
                                name="uname" wire:model="uname">
                            @error('uname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        @if($bcode!=null && $uname!=null && $found==1)
                        <button type="submit" class="btn btn-primary"  >
                            Borrow
                        </button>

                        @else
                        <button type="submit" class="btn btn-primary" disabled  >
                            Borrow
                        </button>
                            
                        @endif
                    </div>
                </form>
            </div>
        </div>
        
    </div>
  </div>