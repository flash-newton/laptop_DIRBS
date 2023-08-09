<div>
    <div class="container">
        @include('components.borrow-modal')
        @include('components.return-modal')
        <div class="row">
            <!-- First Column -->
            <div class="col-lg-4">
                <!-- First Card -->
                <div class="card cardbtn mb-4" data-bs-toggle="modal" data-bs-target="#borrowmod">
                    <div class="card-body btnbody">
                        <img src="{{asset('/img/brw.png')}}" alt="borrow_img">
                        <div class="labl brrw">Borrow Device</div>
                    </div>
                </div>
                <!-- Second Card -->
                <div class="card cardbtn mb-4" data-bs-toggle="modal" data-bs-target="#returnmod">
                    <div class="card-body btnbody">
                        <img src="{{asset('/img/rtn.png')}}" alt="return_img">
                        <div class="labl rturn">Return Device</div>
                    </div>
                </div>
            </div>
            <!-- Second Column -->
            <div class="col-lg-8 ">
                <div class="card ">
                    <div class="card-body">
                        <div class="table-responsive">
                            <h4 class="text-center">Latest Transactions</h4>
                            <hr>
                            <table class="table">
                                <thead>
                                    <th>User</th>
                                    <th>Action</th>
                                    <th>Device</th>
                                    <th>Date</th>
                                </thead>
                                <tbody>
                                    @foreach ($history as $h)
                                    <tr>
                                        <td>{{$h->user}}</td>
                                        <td ><div class="stat">
                                            <div class="{{$h->action == 0 ? "brw" : "rtn"}}">{{$h->action == 0 ? "Borrowed" : "Returned"}}</div></div></td>
                                        <td>{{$h->devices->name}} | #{{$h->devices->barcode}}</td>
                                        <td>{{$h->created_at}}</td>
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
</div>
