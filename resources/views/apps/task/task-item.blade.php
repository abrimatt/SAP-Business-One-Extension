<div class="row justify-content-sm-between border-bottom mt-2 border-bottom pt-2">
    <div class="col-lg-6 mb-2 mb-lg-0">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="task{{$id}}">
            <label class="custom-control-label" for="task{{$id}}">
                {{$title}}
            </label>
        </div> <!-- end checkbox -->
    </div> <!-- end col -->
    <div class="col-lg-6">
        <div class="d-sm-flex justify-content-between">
            <div>
                <img src="{{$assigneeAvatar}}" alt="image" class="avatar-xs rounded-circle"
                    data-toggle="tooltip" data-placement="bottom" title="Assigned to {{$assignedTo}}" />
            </div>
            <div class="mt-3 mt-sm-0">
                <ul class="list-inline font-13 text-sm-right">
                    <li class="list-inline-item pr-1">
                        <i class='uil uil-schedule font-16 mr-1'></i>
                        {{$dueDate}}
                    </li>
                    <li class="list-inline-item pr-1">
                        <i class='uil uil-align-alt font-16 mr-1'></i>
                        {{$noChecklists}}
                    </li>
                    <li class="list-inline-item pr-2">
                        <i class='uil uil-comment-message font-16 mr-1'></i>
                        {{$noComments}}
                    </li>
                    <li class="list-inline-item">
                        @if($priority == 'High')
                        <span class="badge badge-soft-danger p-1">{{$priority}}</span>
                        @endif
                        @if($priority == 'Medium')
                        <span class="badge badge-soft-info p-1">{{$priority}}</span>
                        @endif
                        @if($priority == 'Low')
                        <span class="badge badge-success p-1">{{$priority}}</span>
                        @endif
                    </li>
                </ul>
            </div>
        </div> <!-- end .d-flex-->
    </div> <!-- end col -->
</div>