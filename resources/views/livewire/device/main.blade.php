<div>
    @include('components.adddevice-model')
    @include('components.editdevice-model')
    
    <div class="card">

     <div class="card-body">
         <h2 class="card-title tabletitle">Device Management 

          
          <span class="float-end  ">
          
              <select class="filters" wire:model="filter" >
                  <option value="">All</option>
                  <option value="0">Available</option>
                  <option value="1">Borrowed</option>
              </select>
              <input class="filters searchbox" placeholder="Search for Device"  type="search" wire:model='search'>
       
          <button class="model-btn" data-bs-toggle="modal" data-bs-target="#addmod">Add a Device</button></span></h2>
         <hr>
         
         <div class="table-responsive ">
           <table class="table table-striped text-align-center">
             <thead>
               <tr>
               
                 <th>Device Name</th>
                 <th class="bc">Barcode</th>
                 <th>B/C Number</th>
                 <th>Current Status</th>
                 <th>Details</th>
               </tr>
             </thead>
             <tbody>
              @foreach ($device as $d)
              <tr class="">
                <td class="py-1">
                  {{$d->name}}
                </td>
                <td><?php echo DNS1D::getBarcodeHTML($d->barcode, 'I25');?></td>
                <td>{{$d->barcode}}</td>
                <td ><div class="stat"><div class="{{$d->status == '0'? 'rtn':'brw'}}">{{$d->status == '0'? 'Available':'Borrowed'}}</div></div></td>
                <td >
                  
                  <a href="/device-detail/{{$d->id}}" class="btn actbtn btn-inverse-dark btn-icon">
                    <i class="mdi mdi-alert-box"></i>
                  </a>

                    <button type="button" wire:click="editDetails({{$d->id}})" class="btn actbtn btn-inverse-primary btn-icon" data-bs-toggle="modal" data-bs-target="#editmod">
                      <i class="mdi mdi-border-color"></i>
                    </button>
                   
                    <button type="button" wire:click="delDeviceSelect({{$d->id}})" class="btn actbtn btn-inverse-danger btn-icon">
                      <i class="mdi mdi-delete-forever"></i>
                    </button>

                </td>
              </tr>    

              @endforeach
               
              
             </tbody>
           </table>
           <div style="display:flex; justify-content:center;">
            {{$device->links()}}
        </div>
         </div>
       </div>
    </div>



    
</div>
