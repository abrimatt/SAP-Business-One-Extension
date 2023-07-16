<div class="card @if(isset($bodyClass)){{$bodyClass}}@endif">
    <div class="card-body">
        @if (isset($status) && $status == 'bost_Close' || $status = 'cdsClosed')
            <div class="badge badge-success float-right">Closed</div>
            <p class="text-success text-uppercase font-size-12 mb-2">Recieved</p>
        @endif

        @if (isset($status) && $status == 'bost_Open')
            <div class="badge badge-warning float-right">Open</div>
            <p class="text-warning text-uppercase font-size-12 mb-2">Pending</p>
        @endif

        {{-- @if (isset($status) && $status == 'Planned')
        <div class="badge badge-info float-right">{{$status}}</div>
        <p class="text-info text-uppercase font-size-12 mb-2">{{$category}}</p>
        @endif --}}

        <h5><a href="#" class="text-dark">{{$name}}</a></h5>
        <p class="text-muted mb-4">{{$description}}
        </p>

        <div>
            <a href="javascript: void(0);">
                <img src="/assets/images/users/avatar-2.jpg" alt="" class="avatar-sm m-1 rounded-circle">
            </a>
            <a href="javascript: void(0);">
                <img src="/assets/images/users/avatar-3.jpg" alt="" class="avatar-sm m-1 rounded-circle">
            </a>
        </div>
    </div>
    <div class="card-body border-top">
        <div class="row align-items-center">
            <div class="col-sm-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item pr-2">
                        <a href="#" class="text-muted d-inline-block" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Doc date">
                            <i class="uil uil-calender mr-1"></i> {{$dueDate}}
                        </a>
                    </li>
                    <li class="list-inline-item pr-2">
                        <a href="#" class="text-muted d-inline-block" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Due Date">
                            <i class="uil uil-calender mr-1"></i> {{$DueDate}}
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-muted d-inline-block" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Comments">
                            <i class="uil uil-comments-alt mr-1"></i> {{ $noComments }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col offset-sm-1">
                {{-- <div class="progress mt-4 mt-sm-0" style="height: 5px;" data-toggle="tooltip" data-placement="top"
                    title="" data-original-title="{{$progress}}% completed">
                    
                    <div class="progress-bar bg-success" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="{{$progress}}"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div> --}}
                <a href="{{ url($url) }}" class="btn btn-small btn-success float-right"> Detail </a>
            </div>
        </div>
    </div>
</div>
<!-- end card -->