<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="addcard card">
                    <div class="card-body">
                        <h5 class="card-title text-center ">Create New Admin Account</h5>
                        
                        <hr/>
                        <form wire:submit.prevent="saveAdmin">
                            <div class="row mb-3">
                                
                                <div class="col-md-12">
                                    <label for="name" class="col-md-6 col-form-label ">{{ __('Name') }}</label>
                                    <input id="name" wire:model.defer="name"  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                  
                                        <label class="col-md-12 col-form-label" for="option">Select Role:</label>
                                        <select class="custom-select" id="role" name="role" wire:model.defer="role">
                                            <option value="0" selected>Admin</option>
                                            <option value="1">Super Admin</option>
                                        </select>
                                    </div>
    
                                    @error('lname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                          

                            </div>
    
    
                            <div class="row mb-3">
                                
    
                                <div class="col-md-12">
                                    <label for="email" class="col-md-12 col-form-label ">{{ __('Email Address') }}</label>
                                    <input id="email" wire:model.defer="email"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                
    
                                <div class="col-md-6">
                                    <label for="password"   class="col-md-12 col-form-label ">{{ __('Password') }}</label>
                                    <input id="password" wire:model.defer="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                <label for="password-confirm" class="col-md-12 col-form-label">{{ __('Confirm Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" wire:model.defer="password_confirmation">
                                </div>
                                </div>
                            </div>

                            <div class="addbtn">
                                <button type="submit" class=" btn btn-dark subbtn">ADD</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <h5>Administrators : </h5>
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $u)
                                    <tr>
                                        <td>{{$u->name}}</td>
                                        <td ><div><div class="{{$u->role=='0'?'admin':'super'}}">{{$u->role=='0'?'Admin':'SuperAdmin'}}</div></div></td>
                                        <td>{{$u->email}}</td>
                                        <td>
                                            <button type="button" wire:click="delUser({{$u->id}})" class="btn actbtn btn-danger btn-icon">
                                                <i class="mdi mdi-delete-forever"></i>
                                              </button>
                                        </td>
                                    </tr>
                                @endforeach
                               
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


