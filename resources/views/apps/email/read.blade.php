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
                <li class="breadcrumb-item active" aria-current="page">Read</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Email Read</h4>
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

                <div class="mt-2">
                    <h5>Hi Bro, How are you?</h5>

                    <hr />

                    <div class="media mb-4 mt-1">
                        <img class="d-flex mr-2 rounded-circle avatar-sm" src="/assets/images/users/avatar-2.jpg"
                            alt="Generic placeholder image">
                        <div class="media-body">
                            <span class="float-right">07:23 AM</span>
                            <h6 class="m-0 font-14">Jonathan Smith</h6>
                            <small class="text-muted">From: jonathan@domain.com</small>
                        </div>
                    </div>

                    <p><b>Hi Bro...</b></p>
                    <div class="text-muted">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                            penatibus et magnis dis parturient montes, nascetur ridiculus
                            mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                            quis, sem.</p>
                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel,
                            aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                            imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
                            mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                            elementum semper nisi.</p>
                        <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                            eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                            dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                            nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
                            Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies
                            nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget
                            condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                            sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
                            pulvinar,</p>
                    </div>

                    <hr />

                    <h6> <i class="fa fa-paperclip mb-2"></i> Attachments <span>(3)</span>
                    </h6>

                    <div class="row">
                        <div class="col-xl-2 col-sm-4">
                            <a href="#"> <img src="/assets/images/attached-files/img-1.jpg" alt="attachment"
                                    class="img-thumbnail img-responsive">
                            </a>
                        </div>
                        <div class="col-xl-2 col-sm-4 mt-3 mt-sm-0">
                            <a href="#"> <img src="/assets/images/attached-files/img-2.jpg" alt="attachment"
                                    class="img-thumbnail img-responsive">
                            </a>
                        </div>
                        <div class="col-xl-2 col-sm-4 mt-3 mt-sm-0">
                            <a href="#"> <img src="/assets/images/attached-files/img-3.jpg" alt="attachment"
                                    class="img-thumbnail img-responsive">
                            </a>
                        </div>
                    </div>

                </div> <!-- card-box -->

                <div class="media mb-0 mt-5">
                    <img class="d-flex mr-3 rounded-circle avatar-sm" src="/assets/images/users/avatar-7.jpg"
                        alt="Generic placeholder image">
                    <div class="media-body">
                        <div class="mb-2">
                            <div class="summernote">
                                <h6>This is an Air-mode editable area.</h6>
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

                            </div> <!-- end summernote-->
                        </div> <!-- end reply-box -->
                    </div> <!-- end media-body -->
                </div> <!-- end medi-->

                <div class="text-right">
                    <button type="button" class="btn btn-primary btn-rounded width-sm">Send</button>
                </div>

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
