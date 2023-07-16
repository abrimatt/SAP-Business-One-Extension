@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Profile</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="text-center mt-3">
                    <img src="/assets/images/users/avatar-7.jpg" alt="" class="avatar-lg rounded-circle" />
                    <h5 class="mt-2 mb-0">Shreyu N</h5>
                    <h6 class="text-muted font-weight-normal mt-2 mb-0">User Experience Specialist
                    </h6>
                    <h6 class="text-muted font-weight-normal mt-1 mb-4">San Francisco, CA</h6>

                    <div class="progress mb-4" style="height: 14px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100">
                            <span class="font-size-12 font-weight-bold">Your Profile is <span
                                    class="font-size-11">60%</span> completed</span>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary btn-sm mr-1">Follow</button>
                    <button type="button" class="btn btn-white btn-sm">Message</button>
                </div>

                <!-- profile  -->
                <div class="mt-5 pt-2 border-top">
                    <h4 class="mb-3 font-size-15">About</h4>
                    <p class="text-muted mb-4">Hi I'm Shreyu. I am user experience and user
                        interface designer.
                        I have been working on UI & UX since last 10 years.</p>
                </div>
                <div class="mt-3 pt-2 border-top">
                    <h4 class="mb-3 font-size-15">Contact Information</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0 text-muted">
                            <tbody>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>xyz123@gmail.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Phone</th>
                                    <td>(123) 123 1234</td>
                                </tr>
                                <tr>
                                    <th scope="row">Address</th>
                                    <td>1975 Boring Lane, San Francisco, California, United States -
                                        94108</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-3 pt-2 border-top">
                    <h4 class="mb-3 font-size-15">Skills</h4>
                    <label class="badge badge-soft-primary">UI design</label>
                    <label class="badge badge-soft-primary">UX</label>
                    <label class="badge badge-soft-primary">Sketch</label>
                    <label class="badge badge-soft-primary">Photoshop</label>
                    <label class="badge badge-soft-primary">Frontend</label>
                </div>
            </div>
        </div>
        <!-- end card -->

    </div>

    <div class="col-lg-9">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills navtab-bg nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-activity-tab" data-toggle="pill" href="#pills-activity"
                            role="tab" aria-controls="pills-activity" aria-selected="true">
                            Activity
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-messages-tab" data-toggle="pill" href="#pills-messages" role="tab"
                            aria-controls="pills-messages" aria-selected="false">
                            Messages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-projects-tab" data-toggle="pill" href="#pills-projects" role="tab"
                            aria-controls="pills-projects" aria-selected="false">
                            Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-tasks-tab" data-toggle="pill" href="#pills-tasks" role="tab"
                            aria-controls="pills-tasks" aria-selected="false">
                            Tasks
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-files-tab" data-toggle="pill" href="#pills-files" role="tab"
                            aria-controls="pills-files" aria-selected="false">
                            Files
                        </a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-activity" role="tabpanel"
                        aria-labelledby="pills-activity-tab">
                        <h5 class="mt-3">This Week</h5>
                        <div class="left-timeline mt-3 mb-3 pl-4">
                            <ul class="list-unstyled events mb-0">
                                <li class="event-list">
                                    <div class="pb-4">
                                        <div class="media">
                                            <div class="event-date text-center mr-4">
                                                <div class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                    02 hours ago</div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="font-size-15 mt-0 mb-1">Designing
                                                    Shreyu Admin</h6>
                                                <p class="text-muted font-size-14">Shreyu Admin - A
                                                    responsive admin and dashboard template</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-list">
                                    <div class="pb-4">
                                        <div class="media">
                                            <div class="event-date text-center mr-4">
                                                <div class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                    21 hours ago</div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="font-size-15 mt-0 mb-1">UX and UI for
                                                    Ubold Admin</h6>
                                                <p class="text-muted font-size-14">Ubold Admin - A
                                                    responsive admin and dashboard template</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-list">
                                    <div class="pb-4">
                                        <div class="media">
                                            <div class="event-date text-center mr-4">
                                                <div class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                    22 hours ago</div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="font-size-15 mt-0 mb-1">UX and UI for
                                                    Hyper Admin</h6>
                                                <p class="text-muted font-size-14">Hyper Admin - A
                                                    responsive admin and dashboard template</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <h5 class="mt-4">Last Week</h5>
                        <div class="left-timeline mt-3 pl-4">
                            <ul class="list-unstyled events mb-0">
                                <li class="event-list">
                                    <div class="pb-4">
                                        <div class="media">
                                            <div class="event-date text-center mr-4">
                                                <div class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                    02 hours ago</div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="font-size-15 mt-0 mb-1">Designing
                                                    Shreyu Admin</h6>
                                                <p class="text-muted font-size-14">Shreyu Admin - A
                                                    responsive admin and dashboard template</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-list">
                                    <div class="pb-4">
                                        <div class="media">
                                            <div class="event-date text-center mr-4">
                                                <div class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                    21 hours ago</div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="font-size-15 mt-0 mb-1">UX and UI for
                                                    Ubold Admin</h6>
                                                <p class="text-muted font-size-14">Ubold Admin - A
                                                    responsive admin and dashboard template</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-list">
                                    <div class="pb-4">
                                        <div class="media">
                                            <div class="event-date text-center mr-4">
                                                <div class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                    22 hours ago</div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="font-size-15 mt-0 mb-1">UX and UI for
                                                    Hyper Admin</h6>
                                                <p class="text-muted font-size-14">Hyper Admin - A
                                                    responsive admin and dashboard template</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <h5 class="mt-4">Last Month</h5>
                        <div class="left-timeline mt-3 pl-4">
                            <ul class="list-unstyled events mb-0">
                                <li class="event-list">
                                    <div class="pb-4">
                                        <div class="media">
                                            <div class="event-date text-center mr-4">
                                                <div class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                    02 hours ago</div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="font-size-15 mt-0 mb-1">Designing
                                                    Shreyu Admin</h6>
                                                <p class="text-muted font-size-14">Shreyu Admin - A
                                                    responsive admin and dashboard template</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-list">
                                    <div class="pb-4">
                                        <div class="media">
                                            <div class="event-date text-center mr-4">
                                                <div class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                    21 hours ago</div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="font-size-15 mt-0 mb-1">UX and UI for
                                                    Ubold Admin</h6>
                                                <p class="text-muted font-size-14">Ubold Admin - A
                                                    responsive admin and dashboard template</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-list">
                                    <div class="pb-4">
                                        <div class="media">
                                            <div class="event-date text-center mr-4">
                                                <div class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                                    22 hours ago</div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="font-size-15 mt-0 mb-1">UX and UI for
                                                    Hyper Admin</h6>
                                                <p class="text-muted font-size-14">Hyper Admin - A
                                                    responsive admin and dashboard template</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    
                        <!-- messages -->
                        <div class="tab-pane" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
                            <h5 class="mt-3">Messages</h5>
                            <ul class="list-unstyled">
                                <li class="py-3 border-bottom">
                                    <div class="media">
                                        <div class="mr-3">
                                            <img src="/assets/images/users/avatar-2.jpg" alt=""
                                                class="avatar-md rounded-circle">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#" class="text-dark">John
                                                    Jack</a></h5>
                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                The
                                                languages only differ in their grammar</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 border-bottom">
                                    <div class="media">
                                        <div class="mr-3">
                                            <img src="/assets/images/users/avatar-3.jpg" alt=""
                                                class="avatar-md rounded-circle">

                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                                    class="text-dark">Theodore</a></h5>
                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                Everyone realizes why a new common language </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 border-bottom">
                                    <div class="media">
                                        <div class="avatar-md rounded-circle bg-soft-primary mr-3">
                                            <span class="font-size-18 avatar-title text-primary font-weight-semibold">
                                                M
                                            </span>
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#" class="text-dark">Michael</a>
                                            </h5>
                                            <p class="text-muted font-size-13 text-truncate mb-0">To
                                                an
                                                English person, it will seem like simplified</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 border-bottom">
                                    <div class="media">
                                        <div class="mr-3">
                                            <img src="/assets/images/users/avatar-5.jpg" alt=""
                                                class="avatar-md rounded-circle">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#" class="text-dark">Tony
                                                    Lindsey</a></h5>
                                            <p class="text-muted font-size-13 text-truncate mb-0">If
                                                several languages coalesce the grammar</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 border-bottom">
                                    <div class="media">
                                        <div class="avatar-md rounded-circle bg-soft-primary mr-3">
                                            <span class="font-size-18 avatar-title text-primary font-weight-semibold">
                                                R
                                            </span>
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#" class="text-dark">Robert
                                                    Wilke</a></h5>
                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                Their separate existence is a myth</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 border-bottom">
                                    <div class="media">
                                        <div class="mr-3">
                                            <img src="/assets/images/users/avatar-7.jpg" alt=""
                                                class="avatar-md rounded-circle">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#" class="text-dark">James</a>
                                            </h5>
                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                The European languages are members.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 border-bottom">
                                    <div class="media">
                                        <div class="avatar-md rounded-circle bg-soft-primary mr-3">
                                            <span class="font-size-18 avatar-title text-primary font-weight-semibold">
                                                B
                                            </span>
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#" class="text-dark">Brian</a>
                                            </h5>
                                            <p class="text-muted font-size-13 text-truncate mb-0">At
                                                vero eos et accusamus et iusto odio</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3">
                                    <div class="media">
                                        <div class="mr-3">
                                            <img src="/assets/images/users/avatar-5.jpg" alt=""
                                                class="avatar-md rounded-circle">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="font-size-15 mt-2 mb-1"><a href="#" class="text-dark">Aaron
                                                    Nickel</a></h5>
                                            <p class="text-muted font-size-13 text-truncate mb-0">
                                                Itaque earum rerum hic tenetur a sapiente</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div class="text-center">
                                <a href="#" class="btn btn-primary btn-sm">Load more</a>
                            </div>
                    </div>

                    <div class="tab-pane fade" id="pills-projects" role="tabpanel" aria-labelledby="pills-projects-tab">

                        <h5 class="mt-3">Projects</h5>

                        <div class="row mt-3">
                            <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 1, 'status'
                                => 'Finished','category'
                                => 'Web Design','name' => 'Ubold v3.0 - Redesign', 'description' => 'With supporting
                                text below as a natural
                                lead-in to additional contenposuere erat a ante','dueDate' => '15 Dec', 'noTasks' => 21,
                                'noComments' =>
                                741,'progress' => 100, 'bodyClass' => 'border'])@endcomponent</div>

                            <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 2, 'status'
                                =>
                                'Ongoing','category' => 'Web Design','name' => 'Minton v3.0 - Redesign', 'description'
                                => 'This card has
                                supporting text below as a natural lead-in to additional content is a little bit
                                longer','dueDate' => '15 Dec',
                                'noTasks' => 81, 'noComments' => 103,'progress' => 21, 'bodyClass' => 'border'])@endcomponent</div>

                            <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 3, 'status'
                                =>
                                'Ongoing','category' => 'Web Design','name' => 'Hyper v2.1 - Angular and Django',
                                'description' => 'Anim pariatur
                                cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid','dueDate' => '20 Dec',
                                'noTasks' => 12, 'noComments' => 48,'progress' => 66, 'bodyClass' => 'border'])@endcomponent</div>

                            <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 4, 'status'
                                =>
                                'Finished','category' => 'Web Design','name' => 'Hyper v2.1 - React, Webpack',
                                'description' => 'Some quick
                                example text to build on the card title and make up the bulk of the card
                                content','dueDate' => '22 Dec',
                                'noTasks' => 50, 'noComments' => 1024,'progress' => 100, 'bodyClass' => 'border'])@endcomponent</div>

                            <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 5, 'status'
                                =>
                                'Ongoing','category' => 'Android','name' => 'Hyper 2.2 - Vue.Js and Laravel',
                                'description' => 'Anim pariatur
                                cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.','dueDate' => '17 Dec',
                                'noTasks' => 3, 'noComments' => 104,'progress' => 45, 'bodyClass' => 'border'])@endcomponent</div>

                            <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 6, 'status'
                                =>
                                'Planned','category' => 'Web Design','name' => 'Hyper 2.3 - Rails, NodeJs, Mean',
                                'description' => 'Anim pariatur
                                cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.','dueDate' => '20 Dec',
                                'noTasks' => 11, 'noComments' => 201,'progress' => 55, 'bodyClass' => 'border'])@endcomponent</div>

                            <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 7, 'status'
                                =>
                                'Planned','category' => 'Android','name' => 'Hyper - Landing page and UI Kit',
                                'description' => 'Anim pariatur
                                cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.','dueDate' => '25 Dec',
                                'noTasks' => 3, 'noComments' => 104,'progress' => 45, 'bodyClass' => 'border'])@endcomponent</div>

                            <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 8, 'status'
                                =>
                                'Finished','category' => 'Web Design','name' => 'Hyper 3.0 - Scoping', 'description' =>
                                'Anim pariatur cliche
                                reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.','dueDate' =>
                                '30 Dec', 'noTasks' =>
                                3, 'noComments' => 104,'progress' => 100, 'bodyClass' => 'border'])@endcomponent</div>
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="tab-pane fade" id="pills-tasks" role="tabpanel" aria-labelledby="pills-tasks-tab">
                        <h5 class="mt-3">Tasks</h5>

                        <div class="card mb-0 shadow-none">
                            <div class="card-body">
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
                            </div> <!-- end card-body-->
                        </div> <!-- end card -->
                    </div>

                    <div class="tab-pane fade" id="pills-files" role="tabpanel" aria-labelledby="pills-files-tab">
                        <h5 class="mt-3">Files</h5>

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
                    </div>
                </div>

            </div>
        </div>
        <!-- end card -->
    </div>
</div>
<!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection