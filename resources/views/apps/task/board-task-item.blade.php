<!-- Task Item -->
<div class="card border mb-0">
    <div class="card-body p-3">
        <div class="dropdown float-right">
            <a href="#" class="dropdown-toggle text-muted arrow-none" data-toggle="dropdown" aria-expanded="false">
                <i class="uil uil-ellipsis-v font-size-14"></i>
            </a>
            <div class="dropdown-menu">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-edit-alt mr-2"></i>Edit</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-user-plus mr-2"></i>Add
                    People</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item text-warning"><i
                        class="uil uil-exit mr-2"></i>Leave</a>
                <div class="dropdown-divider"></div>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                        class="uil uil-trash mr-2"></i>Delete</a>
            </div>
        </div>
        <h6 class="mt-0 mb-2 font-size-15">
            <a href="#" class="text-body">{{$title}}</a>
        </h6>

        @if($priority == 'High')
        <span class="badge badge-soft-danger">High</span>
        @endif
        @if($priority == 'Medium')
        <span class="badge badge-soft-info">Medium</span>
        @endif
        @if($priority == 'Low')
        <span class="badge badge-soft-success">Low</span>
        @endif


        <p class="mb-0 mt-4">
            <img src="{{$assigneeAvatar}}" alt="user-img" class="avatar-xs rounded-circle mr-2" />

            <span class="text-nowrap align-middle font-size-13 mr-2">
                <i class="uil uil-comments-alt text-muted mr-1"></i>{{$noComments}}
            </span>

            <span class="text-nowrap align-middle font-size-13">
                <i class="uil uil-check-square mr-1 text-muted"></i>{{$noChecklists}}
            </span>
            <small class="float-right text-muted">{{$dueDate}}</small>
        </p>
    </div> <!-- end card-body -->
</div>
<!-- Task Item End -->