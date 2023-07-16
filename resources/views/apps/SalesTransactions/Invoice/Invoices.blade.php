@extends('layouts.vertical')

@section('css')
    <!-- Summernote css -->
    <link href="/assets/libs/summernote/summernote.min.css" rel="stylesheet" />
@endsection

@section('breadcrumb')
  <div class="row page-title align-items-center">
    <div class="col-md-3 col-xl-6">
        <h4 class="mb-1 mt-0">Sales Invoices</h4>
    </div>
    <div class="col-md-9 col-xl-6 text-md-right">
        <div class="mt-4 mt-md-0">
            <button type="button" class="btn btn-primary mr-4 mb-3  mb-sm-0"><i class="uil-plus mr-1"></i> Create Invoice</button>
            {{-- <button type="button" class="btn btn-danger mr-4 mb-3  mb-sm-0"><i class="uil-plus mr-1"></i> Create Invoice</button> --}}
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        @foreach ($invoices->value as $invoice)
            <div class='col-xl-4 col-lg-6'>
                @component('apps.stockReport.doc-report', ['id' => 1, 'status' => $invoice->DocumentStatus,'category'
                    => '','name' => '', 'description' => $invoice->JournalMemo,
                    'dueDate' => $invoice->DocDate, 'DueDate' => $invoice->DocDueDate, 
                    'noComments' => $invoice->DocTotal, 'progress' => 100, 'url' => '/invoices' .'/'. $invoice->DocEntry])
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