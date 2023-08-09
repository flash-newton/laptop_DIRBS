<div>
    <div class="py-3 py-md-md-5">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-dark">
                            Device Details [ #{{$device->barcode}} ]
                            <a href="/devices" class="btn btn-dark btn-sm float-end">Back</a>
                        </h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 bcbox">
                                <div class="barcode-container" style="width: 200px; height: 100px;">
                                    <?php echo DNS1D::getBarcodeHTML($device->barcode, 'I25',5,90);
                                    ?>
                                    <div class="text-center">{{$device->barcode}}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5>Details</h5>
                                <hr>
                                <h6>Name : {{$device->name}}</h6>
                                <h6>Barcode : {{$device->barcode}} </h6>
                                <h6 >Status :  <span class="{{$device->status == 0 ? 'rtn':'brw'}}">{{$device->status == '0'? 'Available':'Borrowed'}}</span></h6>
                                <h6>Last updated by : {{$device->added_by}} </h6>
                                <h6>Description : {{$device->description}}</h6>
                            </div>
                        </div>
                        <br>
                        <div class="tabletitle">
                            <h5>History
                                @can('isAvailable',$device)
                                <button class="btn btn-sm btn-danger float-end" wire:click="delquestion">Clear history</button>
                                @endcan
                                
                            </h5>
                        </div>
                        
                        <hr>
                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <th>Action</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Authorized by</th>
                                   
                                </thead>
                                <tbody>
                                  @foreach ($history as $h)
                                  <tr>
                                    <td  ><div class="statbox"><div class="{{$h->action == '0'? 'brwstat':'rtnstat'}}">{{$h->action == '0'? 'borrowed':'returned'}}</div></div></td>
                                    <td class="nm" >{{$h->user}}</td>
                                    <td  >{{$h->created_at}}</td>
                                    <td>{{$h->carried_out_by}}</td>
                                </tr>
                                  @endforeach
                                    
                                </tbody>
                            </table>
                            <div style="display:flex; justify-content:center;">
                                {{$history->links()}}
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
