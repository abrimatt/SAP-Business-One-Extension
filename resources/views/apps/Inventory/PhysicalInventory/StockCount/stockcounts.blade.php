@extends('layouts.vertical')

@section('css')
    <!-- Summernote css -->
    <link href="/assets/libs/summernote/summernote.min.css" rel="stylesheet" />
@endsection

@section('breadcrumb')
  <div class="row page-title align-items-center">
    <div class="col-md-3 col-xl-6">
        <h4 class="mb-1 mt-0">Stock Counts</h4>
    </div>
    <div class="col-md-9 col-xl-6 text-md-right">
        <div class="mt-4 mt-md-0">
            <a href="{{ URL::previous() }}" class="btn btn-primary mr-4 mb-3  mb-sm-0"><i class="uil-plus mr-1"></i> Create Stock Count</a>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        @foreach ($stockcounts->value as $count)
        <div class='col-xl-4 col-lg-6'>
            @component('apps.stockReport.doc-report', ['id' => 1, 'status' => $count->DocumentStatus,'category'
                => '','name' => '', 'description' => $count->Remarks,
                'dueDate' => $count->CountDate, 'DueDate' => '', // $posting->PostingDate, 
                'noComments' => '', 'progress' => 100, 'url' => '/stockpostings' .'/'. $count->DocumentEntry])
            @endcomponent
          </div>
        @endforeach
    </div>
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection