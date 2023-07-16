@extends('layouts.vertical')

@section('css')
    <!-- Summernote css -->
    <link href="/assets/libs/summernote/summernote.min.css" rel="stylesheet" />
@endsection

@section('breadcrumb')
  <div class="row page-title align-items-center">
    <div class="col-md-3 col-xl-6">
        <h4 class="mb-1 mt-0">Goods Receipt</h4>
    </div>
    <div class="col-md-9 col-xl-6 text-md-right">
        <div class="mt-4 mt-md-0">
            <a href="{{ url('goodsissues/create') }}" class="btn btn-primary mr-4 mb-3  mb-sm-0"><i class="uil-plus mr-1"></i> Create Goods Issue</a>
            {{-- <button type="button" class="btn btn-danger mr-4 mb-3  mb-sm-0"><i class="uil-plus mr-1"></i> Create Invoice</button> --}}
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
      @foreach ($stockReceipts->value as $stockReceipt) 
      <div class='col-xl-4 col-lg-6'>
          @component('apps.stockReport.doc-report', ['id' => 1, 'status' => '','category'
              => '','name' => '', 'description' => $stockReceipt->JournalMemo,
              'dueDate' => $stockReceipt->DocDate, 'DueDate' => $stockReceipt->DocDueDate, 
              'noComments' => $stockReceipt->DocTotal, 'progress' => 100, 'url' => '/goodsreceipts' .'/'. $stockReceipt->DocEntry])
          @endcomponent
      </div>
    @endforeach
    </div>
@endsection
{{-- $stockReceipt->DocumentStatus --}}


@section('script')
@endsection

@section('script-bottom')
@endsection