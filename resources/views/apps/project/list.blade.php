@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-3 col-xl-6">
        <h4 class="mb-1 mt-0">Projects</h4>
    </div>

    <div class="col-md-9 col-xl-6 text-md-right">
        <div class="mt-4 mt-md-0">
            <button type="button" class="btn btn-danger mr-4 mb-3  mb-sm-0"><i class="uil-plus mr-1"></i> Create
                Project</button>
            <div class="btn-group mb-3 mb-sm-0">
                <button type="button" class="btn btn-primary">All</button>
            </div>
            <div class="btn-group ml-1">
                <button type="button" class="btn btn-white">Ongoing</button>
                <button type="button" class="btn btn-white">Finished</button>
            </div>
            <div class="btn-group ml-2 d-none d-sm-inline-block">
                <button type="button" class="btn btn-primary btn-sm"><i class="uil uil-apps"></i></button>
            </div>
            <div class="btn-group d-none d-sm-inline-block">
                <button type="button" class="btn btn-white btn-sm"><i class="uil uil-align-left-justify"></i></button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 1, 'status' => 'Finished','category'
        => 'Web Design','name' => 'Ubold v3.0 - Redesign', 'description' => 'With supporting text below as a natural
        lead-in to additional contenposuere erat a ante','dueDate' => '15 Dec', 'noTasks' => 21, 'noComments' =>
        741,'progress' => 100])@endcomponent</div>

    <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 2, 'status' =>
        'Ongoing','category' => 'Web Design','name' => 'Minton v3.0 - Redesign', 'description' => 'This card has
        supporting text below as a natural lead-in to additional content is a little bit longer','dueDate' => '15 Dec',
        'noTasks' => 81, 'noComments' => 103,'progress' => 21])@endcomponent</div>

    <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 3, 'status' =>
        'Ongoing','category' => 'Web Design','name' => 'Hyper v2.1 - Angular and Django', 'description' => 'Anim pariatur
        cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid','dueDate' => '20 Dec',
        'noTasks' => 12, 'noComments' => 48,'progress' => 66])@endcomponent</div>

    <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 4, 'status' =>
        'Finished','category' => 'Web Design','name' => 'Hyper v2.1 - React, Webpack', 'description' => 'Some quick
        example text to build on the card title and make up the bulk of the card content','dueDate' => '22 Dec',
        'noTasks' => 50, 'noComments' => 1024,'progress' => 100])@endcomponent</div>

    <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 5, 'status' =>
        'Ongoing','category' => 'Android','name' => 'Hyper 2.2 - Vue.Js and Laravel', 'description' => 'Anim pariatur
        cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.','dueDate' => '17 Dec',
        'noTasks' => 3, 'noComments' => 104,'progress' => 45])@endcomponent</div>

    <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 6, 'status' =>
        'Planned','category' => 'Web Design','name' => 'Hyper 2.3 - Rails, NodeJs, Mean', 'description' => 'Anim pariatur
        cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.','dueDate' => '20 Dec',
        'noTasks' => 11, 'noComments' => 201,'progress' => 55])@endcomponent</div>

    <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 7, 'status' =>
        'Planned','category' => 'Android','name' => 'Hyper - Landing page and UI Kit', 'description' => 'Anim pariatur
        cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.','dueDate' => '25 Dec',
        'noTasks' => 3, 'noComments' => 104,'progress' => 45])@endcomponent</div>
    <div class='col-xl-4 col-lg-6'>@component('apps.project.project-item', ['id' => 8, 'status' =>
        'Finished','category' => 'Web Design','name' => 'Hyper 3.0 - Scoping', 'description' => 'Anim pariatur cliche
        reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.','dueDate' => '30 Dec', 'noTasks' =>
        3, 'noComments' => 104,'progress' => 100])@endcomponent</div>
</div>
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection