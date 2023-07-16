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
        <h4 class="mb-1 mt-0">Stock Issued </h4>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Stock Details</h4>
                    <p class="sub-header">
                        Select2 gives you a customizable select box with support for searching, tagging, remote data sets,
                        infinite scrolling, and many other highly used options.
                    </p>
    
                    <div class="row">
                        <div class="col-xl-2 col-sm-4">
                            <div class="form-group mt-3 mt-sm-0">
                                <label>Posting Date</label>
                                <input class="form-control" value="{{ $stockIssue->DocDate }}" placeholder="Posting Date" readonly />
                            </div>
                        </div>
    
                        <div class="col-xl-2 col-sm-4">
                            <div class="form-group mt-3 mt-sm-0">
                                <label>Due Date</label>
                                <input class="form-control" value="{{ $stockIssue->DocDueDate }}" placeholder="Posting Date" readonly />
                            </div>
                        </div>
                    </div>

                    <hr>

                    <h4 class="header-title mt-0 mb-1">Items In Rows</h4>
                    <p class="sub-header">
                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                        function:
                        <code>$().DataTable();</code>.
                    </p>

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Item Code</th>
                                <th>Item Description</th>
                                <th>Quantity</th>
                                <th>Warehouse</th>
                                <th></th>
                                {{-- <th>Start date</th>
                                <th>Salary</th> --}}
                            </tr>
                        </thead>
                        {{-- <div class='col-xl-4 col-lg-6'>
                            @component('apps.project.project-item', ['id' => 1, 'status' => 'Finished','category'
                                => $docLine->ItemCode,'name' => $docLine->ItemCode, 'description' => $docLine->ItemDescription,
                                'dueDate' => $stockIssue->DocDate, 'noTasks' => $docLine->Quantity, 
                                'noComments' => 741,
                                'progress' => 100])
                            @endcomponent
                        </div> --}}
                        <tbody>
                            @foreach ($stockIssue->DocumentLines as $docLine)
                            <tr>
                                <td>{{ $docLine->ItemCode, }}</td>
                                <td>{{ $docLine->ItemDescription }}</td>
                                <td>{{ $docLine->Quantity }}</td>
                                <td>{{ $docLine->WarehouseCode }}</td>
                                <td></td>
                                {{-- <td>2011/04/25</td>
                                <td>$320,800</td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if ($stockIssue->DocumentStatus == 'bost_Open')
                        <a href="{{ url('goodsreceipt/create/' . $stockIssue->DocEntry) }}" class="btn btn-info">Receive</a>
                    @endif
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
@endsection



@section('script')
@endsection

@section('script-bottom')
@endsection