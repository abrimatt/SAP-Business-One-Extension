@extends('layouts.vertical')

@section('css')
    <!-- Summernote css -->
    <link href="/assets/libs/summernote/summernote.min.css" rel="stylesheet" />
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                <li class="breadcrumb-item"><a href="#">Tasks</a></li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol> --}}
        </nav>
        <h4 class="mb-1 mt-0">Item Issued From HQ Lists</h4>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        @foreach ($stockIssues->value as $stockIssue)
            <div class='col-xl-4 col-lg-6'>
                @component('apps.stockReport.doc-report', ['id' => 1, 'status' => $stockIssue->DocumentStatus,'category'
                    => '','name' => '', 'description' => $stockIssue->JournalMemo,
                    'dueDate' => $stockIssue->DocDate, 'DueDate' => $stockIssue->DocDueDate, 
                    'noComments' => $stockIssue->DocTotal, 'progress' => 100, 'url' => '/goodsissue' .'/'. $stockIssue->DocEntry])
                @endcomponent
            </div>
            {{-- @foreach ($stockIssue->DocumentLines as $docLine)
                <div class='col-xl-4 col-lg-6'>
                    @component('apps.project.project-item', ['id' => 1, 'status' => 'Finished','category'
                        => $docLine->ItemCode,'name' => $docLine->ItemCode, 'description' => $docLine->ItemDescription,
                        'dueDate' => $stockIssue->DocDate, 'noTasks' => $docLine->Quantity, 
                        'noComments' => 741, 'progress' => 100, 'url' => '/goodsIssue' .'/'. $stockIssue->DocEntry])
                    @endcomponent
                </div>
            @endforeach --}}
        @endforeach
    </div>
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection