@extends('layouts.vertical')


@section('css')
<!-- Plugins css -->
<link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">File Upload</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">File Upload</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Dropzone File Upload</h4>
                <p class="sub-header">
                    DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
                </p>

                <form action="/" method="post" class="dropzone" id="myAwesomeDropzone">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>

                    <div class="dz-message needsclick">
                        <i class="h1 text-muted  uil-cloud-upload"></i>
                        <h3>Drop files here or click to upload.</h3>
                        <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                            <strong>not</strong> actually uploaded.)</span>
                    </div>
                </form>
                <div class="clearfix text-right mt-3">
                    <button type="button" class="btn btn-danger"> <i class="uil uil-arrow-right mr-1"></i>
                        Submit</button>
                </div>
            </div> <!-- end card-body -->
        </div>
    </div> <!-- end col-->
</div>
<!-- end row -->
@endsection

@section('script')
<!-- Plugins js -->
<script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
@endsection

@section('script-bottom')
@endsection