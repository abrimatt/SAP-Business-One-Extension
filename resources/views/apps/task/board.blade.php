@extends('layouts.vertical')

@section('css')
<!-- Summernote css -->
<link href="/assets/libs/summernote/summernote.min.css" rel="stylesheet" />
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                <li class="breadcrumb-item"><a href="#">Tasks</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tasks Board</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Project Tasks Board</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <label class="font-weight-bold d-inline mr-2"><i class="icon-dual icon-xs mr-2"
                                data-feather="hard-drive"></i>
                            Project: </label>
                        <div class="dropdown d-inline">
                            <a class="font-weight-bold dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Shreyu Design
                                <i class='uil uil-angle-down font-size-16 align-middle'></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">
                                    <i class="icon-dual icon-xs mr-2" data-feather="hard-drive"></i>Shreyu Design</a>
                                <a class="dropdown-item" href="#">
                                    <i class="icon-dual icon-xs mr-2" data-feather="briefcase"></i>Development</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="icon-dual icon-xs mr-2" data-feather="folder-plus"></i>Shreyu Angular</a>
                                <a class="dropdown-item" href="#">
                                    <i class="icon-dual icon-xs mr-2" data-feather="folder-plus"></i>Shreyu React</a>
                            </div>
                        </div>
                    </div>
                    <div class="col text-right">
                        <button class="btn btn-primary" id="btn-new-event"><i class="uil-plus mr-1"></i>Add New</button>
                    </div>
                </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>
    <!-- end col-12 -->
</div>

<div class="row">
    <div class="col-12">
        <div class="board">
            <div class="tasks border">
                <h5 class="mt-0 task-header header-title">Todo <span class="font-size-13">(3)</span>
                </h5>

                <div id="task-list-one" class="task-list-items">
                    @component('apps.task.board-task-item', ['id' => 1, 'title' => 'Draft the new
                    contract document for sales team', 'assignedTo' => 'Arya Stark','dueDate' =>
                    'Today 10am', 'noChecklists' => 3, 'noComments' => 2,'priority' =>
                    'High', 'assigneeAvatar' =>
                    '/assets/images/users/avatar-9.jpg'])@endcomponent

                    @component('apps.task.board-task-item', ['id' => 2, 'title' => 'iOS App home
                    page', 'assignedTo' => 'James B','dueDate' => 'Today 4pm', 'noChecklists' =>
                    3, 'noComments' => 2,'priority' => 'Low', 'assigneeAvatar' =>
                    '/assets/images/users/avatar-7.jpg'])@endcomponent

                    @component('apps.task.board-task-item', ['id' => 3, 'title' => 'Write a release
                    note', 'assignedTo' => 'Kevin C','dueDate' => 'Today 4pm', 'noChecklists' =>
                    3, 'noComments' => 3,'priority' => 'Medium', 'assigneeAvatar' =>
                    '/assets/images/users/avatar-4.jpg'])@endcomponent
                </div>

            </div>

            <div class="tasks border">
                <h5 class="mt-0 task-header header-title">In Progress <span class="font-size-13">(2)</span>
                </h5>
                <div id="task-list-two" class="task-list-items">
                    @component('apps.task.board-task-item', ['id' => 4, 'title' => 'Invite user to
                    a project', 'assignedTo' => 'Arya Stark','dueDate' => 'Tomorrow 10am',
                    'noChecklists' => 3, 'noComments' => 2,'priority' => 'Low',
                    'assigneeAvatar' => '/assets/images/users/avatar-9.jpg'])@endcomponent

                    @component('apps.task.board-task-item', ['id' => 5, 'title' => 'Enable
                    analytics tracking', 'assignedTo' => 'James B','dueDate' => '27 Aug
                    10am', 'noChecklists' => 3, 'noComments' => 2,'priority' => 'Low',
                    'assigneeAvatar' => '/assets/images/users/avatar-5.jpg'])@endcomponent
                </div>
            </div>

            <div class="tasks border">
                <h5 class="mt-0 task-header header-title">Review <span class="font-size-13">(2)</span>
                </h5>
                <div id="task-list-three" class="task-list-items">
                    @component('apps.task.board-task-item', ['id' => 6, 'title' => 'Code HTML
                    email template', 'assignedTo' => 'Kevin C','dueDate' => 'No Due Date',
                    'noChecklists' => 3, 'noComments' => 2,'priority' => 'Medium',
                    'assigneeAvatar' => '/assets/images/users/avatar-6.jpg'])@endcomponent

                    @component('apps.task.board-task-item', ['id' => 7, 'title' => 'Coordinate
                    with business development', 'assignedTo' => 'Arya Stark','dueDate' =>
                    'No Due Date', 'noChecklists' => 3, 'noComments' => 2,'priority' =>
                    'High', 'assigneeAvatar' =>
                    '/assets/images/users/avatar-9.jpg'])@endcomponent
                </div>
            </div>

            <div class="tasks border">
                <h5 class="mt-0 task-header header-title">Done <span class="font-size-13">(1)</span>
                </h5>
                <div id="task-list-four" class="task-list-items">
                    @component('apps.task.board-task-item', ['id' => 8, 'title' => 'Kanban board
                    design', 'assignedTo' => 'James B','dueDate' => '30 Aug 10am',
                    'noChecklists' => 3, 'noComments' => 2,'priority' => 'Low',
                    'assigneeAvatar' => '/assets/images/users/avatar-5.jpg'])@endcomponent
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="/assets/libs/sortablejs/sortablejs.min.js"></script>
@endsection

@section('script-bottom')
<script src="/assets/js/pages/kanban.init.js"></script>
@endsection