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
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Tasks List</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-8">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <!-- cta -->
                        <div class="row">
                            <div class="col-sm-3">
                                <a href="#" class="btn btn-primary"><i class='uil uil-plus mr-1'></i>Add New</a>
                            </div>
                            <div class="col-sm-9">
                                <div class="float-sm-right mt-3 mt-sm-0">

                                    <div class="task-search d-inline-block mb-3 mb-sm-0 mr-sm-3">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control search-input"
                                                    placeholder="Search..." />
                                                <span class="uil uil-search icon-search"></span>
                                                <div class="input-group-append">
                                                    <button class="btn btn-soft-primary" type="button">
                                                        <i class='uil uil-file-search-alt'></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class='uil uil-sort-amount-down'></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Due Date</a>
                                            <a class="dropdown-item" href="#">Added Date</a>
                                            <a class="dropdown-item" href="#">Assignee</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col">
                                <a class="text-dark" data-toggle="collapse" href="#todayTasks" aria-expanded="false"
                                    aria-controls="todayTasks">
                                    <h5 class="mb-0"><i class='uil uil-angle-down font-size-18'></i>Today <span
                                            class="text-muted font-size-14">(10)</span></h5>
                                </a>

                                <div class="collapse show" id="todayTasks">
                                    <div class="card mb-0 shadow-none">
                                        <div class="card-body">
                                            <!-- task -->
                                            @component('apps.task.task-item', ['id' => 1, 'title' => 'Draft the new
                                            contract document for sales team', 'assignedTo' => 'Arya Stark','dueDate' =>
                                            'Today 10am', 'noChecklists' => 3, 'noComments' => 2,'priority' =>
                                            'High', 'assigneeAvatar' =>
                                            '/assets/images/users/avatar-9.jpg'])@endcomponent

                                            @component('apps.task.task-item', ['id' => 2, 'title' => 'iOS App home
                                            page', 'assignedTo' => 'James B','dueDate' => 'Today 4pm', 'noChecklists' =>
                                            3, 'noComments' => 2,'priority' => 'High', 'assigneeAvatar' =>
                                            '/assets/images/users/avatar-3.jpg'])@endcomponent

                                            @component('apps.task.task-item', ['id' => 3, 'title' => 'Write a release
                                            note', 'assignedTo' => 'Kevin C','dueDate' => 'Today 4pm', 'noChecklists' =>
                                            3, 'noComments' => 3,'priority' => 'Medium', 'assigneeAvatar' =>
                                            '/assets/images/users/avatar-4.jpg'])@endcomponent
                                            <!-- end task -->
                                        </div>
                                    </div>
                                </div>

                                <!-- upcoming tasks -->
                                <div class="mt-4">
                                    <a class="text-dark" data-toggle="collapse" href="#upcomingTasks"
                                        aria-expanded="false" aria-controls="upcomingTasks">
                                        <h5 class="mb-0">
                                            <i class='uil uil-angle-down font-18'></i>Upcoming <span
                                                class="text-muted font-size-14">(5)</span>
                                        </h5>
                                    </a>

                                    <div class="collapse show" id="upcomingTasks">
                                        <div class="card mb-0 shadow-none">
                                            <div class="card-body">

                                                @component('apps.task.task-item', ['id' => 4, 'title' => 'Invite user to
                                                a project', 'assignedTo' => 'Arya Stark','dueDate' => 'Tomorrow 10am',
                                                'noChecklists' => 3, 'noComments' => 2,'priority' => 'Low',
                                                'assigneeAvatar' => '/assets/images/users/avatar-9.jpg'])@endcomponent

                                                @component('apps.task.task-item', ['id' => 5, 'title' => 'Enable
                                                analytics tracking', 'assignedTo' => 'James B','dueDate' => '27 Aug
                                                10am', 'noChecklists' => 3, 'noComments' => 2,'priority' => 'Low',
                                                'assigneeAvatar' => '/assets/images/users/avatar-5.jpg'])@endcomponent

                                                @component('apps.task.task-item', ['id' => 6, 'title' => 'Code HTML
                                                email template', 'assignedTo' => 'Kevin C','dueDate' => 'No Due Date',
                                                'noChecklists' => 3, 'noComments' => 2,'priority' => 'Medium',
                                                'assigneeAvatar' => '/assets/images/users/avatar-6.jpg'])@endcomponent
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- other -->
                                <div class="mt-4 mb-4">
                                    <a class="text-dark" data-toggle="collapse" href="#otherTasks" aria-expanded="false"
                                        aria-controls="otherTasks">
                                        <h5>
                                            <i class='uil uil-angle-down font-18'></i>Other <span
                                                class="text-muted font-size-14">(5)</span>
                                        </h5>
                                    </a>

                                    <div class="collapse show" id="otherTasks">
                                        <div class="card mb-0 shadow-none">
                                            <div class="card-body">
                                                @component('apps.task.task-item', ['id' => 7, 'title' => 'Coordinate
                                                with business development', 'assignedTo' => 'Arya Stark','dueDate' =>
                                                'No Due Date', 'noChecklists' => 3, 'noComments' => 2,'priority' =>
                                                'High', 'assigneeAvatar' =>
                                                '/assets/images/users/avatar-9.jpg'])@endcomponent

                                                @component('apps.task.task-item', ['id' => 8, 'title' => 'Kanban board
                                                design', 'assignedTo' => 'James B','dueDate' => '30 Aug 10am',
                                                'noChecklists' => 3, 'noComments' => 2,'priority' => 'Low',
                                                'assigneeAvatar' => '/assets/images/users/avatar-5.jpg'])@endcomponent

                                                @component('apps.task.task-item', ['id' => 9, 'title' => 'Draft the new
                                                contract document for sales team', 'assignedTo' => 'Kevin C','dueDate'
                                                => 'No Due Date', 'noChecklists' => 3, 'noComments' => 2,'priority' =>
                                                'Medium', 'assigneeAvatar' =>
                                                '/assets/images/users/avatar-6.jpg'])@endcomponent

                                                @component('apps.task.task-item', ['id' => 10, 'title' => 'Draft the new
                                                contract document for vendor Abc', 'assignedTo' => 'Kevin C','dueDate'
                                                => '2 Sep 10am', 'noChecklists' => 3, 'noComments' => 2,'priority' =>
                                                'Medium', 'assigneeAvatar' =>
                                                '/assets/images/users/avatar-6.jpg'])@endcomponent
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 mt-5">
                        <div class="col-12">
                            <div class="text-center">
                                <a href="javascript:void(0);" class="btn btn-white mb-3">
                                    <i data-feather="loader" class="icon-dual icon-xs mr-2"></i>
                                    Load more
                                </a>
                            </div>
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>

    <!-- task details -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="row pb-3 border-bottom">
                    <div class="col">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class='uil uil-ellipsis-h'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class='uil uil-file-upload mr-1'></i>Attachment
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class='uil uil-edit mr-1'></i>Edit
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class='uil uil-file-copy-alt mr-1'></i>Mark as Duplicate
                                </a>
                                <div class="dropdown-divider"></div>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item text-danger">
                                    <i class='uil uil-trash-alt mr-1'></i>Delete
                                </a>
                            </div> <!-- end dropdown menu-->
                        </div> <!-- end dropdown-->

                        <div class="custom-control custom-checkbox float-left">
                            <input type="checkbox" class="custom-control-input" id="completedCheck">
                            <label class="custom-control-label" for="completedCheck">
                                Mark as completed
                            </label>
                        </div> <!-- end custom-checkbox-->
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h4 class="mt-3">Draft the new contract document for sales team</h4>

                        <div class="row">
                            <div class="col-6">
                                <!-- assignee -->
                                <p class="mt-2 mb-1 text-muted">Assigned To</p>
                                <div class="media">
                                    <img src="/assets/images/users/avatar-9.jpg" alt="Arya S"
                                        class="rounded-circle mr-2" height="24" />
                                    <div class="media-body">
                                        <h5 class="mt-1 font-size-14">
                                            Arya Stark
                                        </h5>
                                    </div>
                                </div>
                                <!-- end assignee -->
                            </div> <!-- end col -->

                            <div class="col-6">
                                <!-- start due date -->
                                <p class="mt-2 mb-1 text-muted">Due Date</p>
                                <div class="media">
                                    <i class='uil uil-schedule font-18 text-success mr-1'></i>
                                    <div class="media-body">
                                        <h5 class="mt-1 font-size-14">
                                            Today 10am
                                        </h5>
                                    </div>
                                </div>
                                <!-- end due date -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <!-- task description -->
                        <div class="row mt-3">
                            <div class="col">
                                <div id="taskDesk">
                                    <p>This is a task description with markup support</p>
                                    <ul>
                                        <li>Select a text to reveal the toolbar.</li>
                                        <li>Edit rich document on-the-fly, so elastic!</li>
                                    </ul>
                                    <p>End of air-mode area</p>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end task description -->

                        <!-- start sub tasks/checklists -->
                        <h5 class="mt-4 mb-2 font-size-16">Checklists/Sub-tasks</h5>
                        <div class="custom-control custom-checkbox mt-1">
                            <input type="checkbox" class="custom-control-input" id="checklist1">
                            <label class="custom-control-label strikethrough" for="checklist1">
                                Find out the old contract documents
                            </label>
                        </div>

                        <div class="custom-control custom-checkbox mt-1">
                            <input type="checkbox" class="custom-control-input" id="checklist2">
                            <label class="custom-control-label strikethrough" for="checklist2">
                                Organize meeting sales associates to understand need in detail
                            </label>
                        </div>

                        <div class="custom-control custom-checkbox mt-1">
                            <input type="checkbox" class="custom-control-input" id="checklist3">
                            <label class="custom-control-label strikethrough" for="checklist3">
                                Make sure to cover every small details
                            </label>
                        </div>
                        <!-- end sub tasks/checklists -->

                        <!-- start attachments -->
                        <h5 class="mt-4 mb-2 font-size-16">Attachments</h5>
                        <div class="card mb-2 shadow-none border">
                            <div class="p-1 px-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img src="/assets/images/projects/project-1.jpg" class="avatar-sm rounded"
                                            alt="file-image">
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);"
                                            class="text-muted font-weight-bold">sales-assets.zip</a>
                                        <p class="mb-0">2.3 MB</p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom"
                                            title="Download" class="btn btn-link text-muted btn-lg p-0">
                                            <i class='uil uil-cloud-download font-size-14'></i>
                                        </a>
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom"
                                            title="Delete" class="btn btn-link text-danger btn-lg p-0">
                                            <i class='uil uil-multiply font-size-14'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2 shadow-none border">
                            <div class="p-1 px-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img src="/assets/images/projects/project-2.jpg" class="avatar-sm rounded"
                                            alt="file-image">
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);"
                                            class="text-muted font-weight-bold">new-contarcts.docx</a>
                                        <p class="mb-0">1.25 MB</p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom"
                                            title="Download" class="btn btn-link text-muted btn-lg p-0">
                                            <i class='uil uil-cloud-download font-size-14'></i>
                                        </a>
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom"
                                            title="Delete" class="btn btn-link text-danger btn-lg p-0">
                                            <i class='uil uil-multiply font-size-14'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end attachments -->

                        <!-- comments -->
                        <div class="row mt-3">
                            <div class="col">
                                <h5 class="mb-2 font-size-16">Comments</h5>

                                <div class="media mt-3 p-1">
                                    <img src="/assets/images/users/avatar-9.jpg" class="mr-2 rounded-circle" height="36"
                                        alt="Arya Stark" />
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-0 font-size-14">
                                            <span class="float-right text-muted font-size-12">4:30am</span>
                                            Arya Stark
                                        </h5>
                                        <p class="mt-1 mb-0 text-muted">
                                            Should I review the last 3 years legal documents as
                                            well?
                                        </p>
                                    </div>
                                </div> <!-- end comment -->

                                <hr />

                                <div class="media mt-2 p-1">
                                    <img src="/assets/images/users/avatar-5.jpg" class="mr-2 rounded-circle" height="36"
                                        alt="Dominc B" />
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-0 font-size-14">
                                            <span class="float-right text-muted font-size-12">3:30am</span>
                                            Gary Somya
                                        </h5>
                                        <p class="mt-1 mb-0 text-muted">
                                            @Arya FYI..I have created some general guidelines last
                                            year.
                                        </p>
                                    </div>
                                </div> <!-- end comment-->

                                <hr />

                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="row mt-2">
                            <div class="col">
                                <div class="border rounded">
                                    <form action="#" class="comment-area-box">
                                        <textarea rows="3" class="form-control border-0 resize-none"
                                            placeholder="Your comment..."></textarea>
                                        <div class="p-2 bg-light">
                                            <div class="float-right">
                                                <button type="submit" class="btn btn-sm btn-success"><i
                                                        class='uil uil-message mr-1'></i>Submit</button>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-sm px-1 btn-light"><i
                                                        class='uil uil-cloud-upload'></i></a>
                                                <a href="#" class="btn btn-sm px-1 btn-light"><i
                                                        class='uil uil-at'></i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- end .border-->
                            </div> <!-- end col-->
                        </div> <!-- end row-->
                        <!-- end comments -->
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

@endsection

@section('script')
<script src="/assets/libs/summernote/summernote.min.js"></script>
@endsection
<!--Summernote js-->

@section('script-bottom')
<script>
    $(document).ready(function (e) {
        $('#taskDesk').summernote({
            airMode: true,
            callbacks: {
                // fix broken checkbox on link modal
                onInit: function onInit(e) {
                    var editor = $(e.editor);
                    editor.find('.custom-control-description').addClass('custom-control-label')
                        .parent().removeAttr('for');
                }
            }
        });
    });
</script>
@endsection