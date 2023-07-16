@extends('layouts.vertical')


@section('css')
<!-- Summernote css -->
<link href="{{ URL::asset('assets/libs/summernote/summernote.min.css') }}" rel="stylesheet" />
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editor</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Forms Editor</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Default Editor</h4>
                <p class="sub-header">Super simple wysiwyg editor on Bootstrap</p>
                <div id="summernote-editor">
                    <h6>This is an simple editable area.</h6>
                    <ul>
                        <li>
                            Select a text to reveal the toolbar.
                        </li>
                        <li>
                            Edit rich document on-the-fly, so elastic!
                        </li>
                    </ul>
                    <p>
                        End of simple area
                    </p>
                </div> <!-- end summernote-editor-->
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Inline Editor</h4>
                <p class="sub-header">Air-mode give an interface without the Toolbar. To reveal popover Toolbar, select a text where you want to modify. Simply turn on <code>airMode</code> and just focus on text.</p>
                <div id="summernote-inline">
                    <h4>This is an air-mode editable area.</h4>
                    <ul>
                        <li>
                            Select a text to reveal the toolbar.
                        </li>
                        <li>
                            Edit rich document on-the-fly, so elastic!
                        </li>
                    </ul>
                    <p>
                        End of air-mode area
                    </p>
                </div> <!-- end summernote-inline-->
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->

@endsection

@section('script')
<!--Summernote js-->
<script src="{{ URL::asset('assets/libs/summernote/summernote.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Init js -->
<script src="{{ URL::asset('assets/js/pages/form-editor.init.js') }}"></script>
@endsection