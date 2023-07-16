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
        <h4 class="mb-1 mt-0">Good Receipt Transaction</h4>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <form method="POST" enctype="multipart/form-data" action="{{ url('goodsreceipt/store') }}" class="col-12">
            @csrf
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Stock Details</h4>
                    <p class="sub-header">
                        Select2 gives you a customizable select box with support for searching, tagging, remote data sets,
                        infinite scrolling, and many other highly used options.
                    </p>

                    <div class="row">
                        <div class="col-xl-2 col-sm-6">
                            <div class="form-group mt-3 mt-sm-0">
                                <label>Posting Date</label>
                                <input name="DocDate" class="form-control" value="{{ $stockIssue->DocDate }}" placeholder="Posting Date" />
                            </div>
                        </div>

                        <div class="col-xl-2 col-sm-6">
                            <div class="form-group mt-3 mt-sm-0">
                                <label>Due Date</label>
                                <input type="date" name="DocDueDate" class="form-control" value="{{ $stockIssue->DocDueDate }}" placeholder="Posting Date" />
                                <input type="text" name="DocEntry" class="form-control" value="{{ $stockIssue->DocEntry }}" placeholder="Posting Date" hidden />
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
                                {{-- <th>Start date</th>
                                <th>Salary</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stockIssue->DocumentLines as $docLine)
                            <tr>
                                <td>
                                    <input type="text" name="ItemCode[]" class="form-control" value="{{ $docLine->ItemCode }}" placeholder="Item Code" />
                                    {{-- <div class="form-group mt-3 mt-sm-0">
                                        <label>Item Code</label>
                                        <input name="ItemCode" class="form-control" value="{{ $docLine->ItemCode }}" placeholder="Item Code" />
                                    </div> --}}
                                </td>
                                <td>
                                    <div class="form-group mt-3 mt-sm-0">
                                        <label>Default</label>
                                        <select data-plugin="customselect" class="form-control">
                                            <option value="0">Shreyu</option>
                                            <option value="1">Greeva</option>
                                            <option value="2">Dhyanu</option>
                                            <option value="3" disabled>Disabled</option>
                                            <option value="4">Mannat</option>
                                        </select>
                                    </div>
                                    {{-- <input type="text" name="ItemDescription[]" class="form-control" value="{{ $docLine->ItemDescription }}" placeholder="Item Description" /> --}}
                                    {{-- <div class="form-group mt-3 mt-sm-0">
                                        <label>Item Description</label>
                                        <input name="ItemDescription" class="form-control" value="{{ $docLine->ItemDescription }}" placeholder="Item Description" />
                                    </div> --}}
                                </td>
                                <td>
                                    <input type="text" name="Quantity[]" class="form-control" value="{{ $docLine->Quantity }}" placeholder="Item Quantity" />
                                    {{-- <div class="form-group mt-3 mt-sm-0">
                                        <label>Item Quantity</label>
                                        <input name="Quantity" class="form-control" value="{{ $docLine->Quantity }}" placeholder="Item Quantity" />
                                    </div> --}}
                                </td>
                                <td>
                                    <input type="text" name="Warehouse[]" class="form-control" value="{{ $docLine->WarehouseCode }}" placeholder="Item WarehouseCode" />
                                    <input type="text" name="LineNum[]" class="form-control" value="{{ $docLine->LineNum }}" placeholder="Posting Date" hidden />
                                    {{-- <div class="form-group mt-3 mt-sm-0">
                                        <label>Item WarehouseCode</label>
                                        <input name="Warehouse" class="form-control" value="{{ $docLine->WarehouseCode }}" placeholder="Item WarehouseCode" />
                                    </div> --}}
                                </td>
                                {{-- <td>2011/04/25</td>
                                <td>$320,800</td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <button type="submit" class="btn btn-success">Save</button> --}}
                </div> <!-- end card body-->
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                    <a href="{{ URL::previous() }}" class="btn btn-sm btn-danger float-right">Cancle</a>
                </div>
            </div> <!-- end card -->
        </form><!-- end col-->
    </div>
<!-- end row-->
@endsection

@section('script')
    <!-- Init js-->
    <script src="assets/js/pages/form-advanced.init.js"></script>
@endsection

@section('script-bottom')
@endsection