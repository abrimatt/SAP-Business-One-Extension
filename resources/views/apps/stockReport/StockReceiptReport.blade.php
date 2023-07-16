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
        <h4 class="mb-1 mt-0">Item Lists</h4>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        @foreach ($stockReceipts->value as $stockReceipt)
            <div class='col-xl-4 col-lg-6'>
                @component('apps.stockReport.doc-report', ['id' => 1, 'status' => $stockReceipt->DocumentStatus,'category'
                    => '','name' => '', 'description' => $stockReceipt->JournalMemo,
                    'dueDate' => $stockReceipt->DocDate, 'DueDate' => $stockReceipt->DocDueDate, 
                    'noComments' => $stockReceipt->DocTotal, 'progress' => 100, 'url' => '/goodsreceipt' .'/'. $stockReceipt->DocEntry])
                @endcomponent
            </div>
            {{-- <div class='col-xl-4 col-lg-6'>
                @component('apps.project.project-item', ['id' => 1, 'status' => 'Finished','category'
                    => $stockReceipt->ItemCode,'name' => $stockReceipt->ItemDescription, 'description' => 'With supporting text below as a natural
                    lead-in to additional contenposuere erat a ante','dueDate' => '15 Dec', 'noTasks' => $stockReceipt->Quantity, 'noComments' =>
                    741,'progress' => 100, 'url' => '/goodsreceipt' .'/'.-   $stockReceipt->DocEntry ])
                @endcomponent
            </div> --}}
        @endforeach
    </div>
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection