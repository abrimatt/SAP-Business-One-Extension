@extends('layouts.vertical')

@section('css')
    <!-- Summernote css -->
    <link href="/assets/libs/summernote/summernote.min.css" rel="stylesheet" />
@endsection

@section('breadcrumb')
  <div class="row page-title align-items-center">
    <div class="col-md-3 col-xl-6">
        <h4 class="mb-1 mt-0">Goods Receipt PO</h4>
    </div>
    <div class="col-md-9 col-xl-6 text-md-right">
        <div class="mt-4 mt-md-0">
            <button type="button" class="btn btn-primary mr-4 mb-3  mb-sm-0"><i class="uil-plus mr-1"></i> Create GRPO</button>
            {{-- <button type="button" class="btn btn-danger mr-4 mb-3  mb-sm-0"><i class="uil-plus mr-1"></i> Create Invoice</button> --}}
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
      @foreach ($grpos->value as $grpo)
        <div class='col-xl-4 col-lg-6'>
            @component('apps.stockReport.doc-report', ['id' => 1, 'status' => $grpo->DocumentStatus,'category'
                => '','name' => '', 'description' => $grpo->JournalMemo,
                'dueDate' => $grpo->DocDate, 'DueDate' => $grpo->DocDueDate, 
                'noComments' => $grpo->DocTotal, 'progress' => 100, 'url' => '/grpos' .'/'. $grpo->DocEntry])
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