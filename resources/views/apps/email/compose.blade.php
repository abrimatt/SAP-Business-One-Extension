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
                <li class="breadcrumb-item"><a href="/">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="">Apps</a></li>
                <li class="breadcrumb-item"><a href="">Email</a></li>
                <li class="breadcrumb-item active" aria-current="page">Compose</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Compose Email</h4>
    </div>
</div>
@endsection


@section('content')

<div class="row">
    <div class="col-12">
        <div class="email-container">
            <div class="inbox-leftbar">
                @component('apps.email.leftbar')@endcomponent
            </div>

            <div class="inbox-rightbar p-4">
                @component('apps.email.toolbar')@endcomponent

                <div>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="To">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <div class="summernote">
                                <h6>Hello Summernote</h6>
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

                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <div class="text-right">
                                <button type="button" class="btn btn-success mr-1"><i class="uil uil-envelope-edit"></i>
                                    Draft</button>
                                <button class="btn btn-primary"> <span>Send</span> <i class="uil uil-message ml-2"></i>
                                </button>
                            </div>
                        </div>

                    </form>
                </div> <!-- end card-->

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!--Summernote js-->
<script src="/assets/libs/summernote/summernote.min.js"></script>
@endsection

@section('script-bottom')
<script type="text/javascript">
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 230, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });
    });
</script>

@endsection
