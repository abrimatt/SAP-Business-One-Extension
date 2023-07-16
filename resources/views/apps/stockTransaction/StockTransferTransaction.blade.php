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
        <h4 class="mb-1 mt-0">Good Issue Transaction</h4>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
        <form method="POST" enctype="multipart/form-data" action="{{ url('goodsissue/store') }}" class="col-12">
            @csrf
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
                                <input class="form-control" value="" placeholder="Posting Date" />
                            </div>
                        </div>
    
                        <div class="col-xl-2 col-sm-4">
                            <div class="form-group mt-3 mt-sm-0">
                                <label>Due Date</label>
                                <input class="form-control" value="" placeholder="Due Date" />
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
                        {{-- <div class='col-xl-4 col-lg-6'>
                            @component('apps.project.project-item', ['id' => 1, 'status' => 'Finished','category'
                                => $docLine->ItemCode,'name' => $docLine->ItemCode, 'description' => $docLine->ItemDescription,
                                'dueDate' => $stockIssue->DocDate, 'noTasks' => $docLine->Quantity, 
                                'noComments' => 741,
                                'progress' => 100])
                            @endcomponent
                        </div> --}}
                        <tbody>
                            {{-- @foreach ($stockIssue->DocumentLines as $docLine) --}}
                            <tr>
                                <td>
                                    {{-- <div class="col-xl-2 col-sm-4">
                                        <div class="form-group mt-3 mt-sm-0">
                                            <label>Item Code</label>
                                            <input name="ItemCode[]" class="form-control" value="" placeholder="Item Code" />
                                        </div>
                                    </div> --}}
                                    <input name="ItemCode[]" class="form-control" value="" placeholder="Item Code" />
                                </td>
                                <td>
                                    {{-- <div class="col-xl-2 col-sm-4">
                                        <div class="form-group mt-3 mt-sm-0">
                                            <label>Item Description</label>
                                            <input name="ItemDescription[]" class="form-control" value="" placeholder="Item Description" />
                                        </div>
                                    </div> --}}
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
                                    {{-- <input name="ItemDescription[]" class="form-control" value="" placeholder="Item Description" /> --}}
                                </td>
                                <td>
                                    {{-- <div class="col-xl-2 col-sm-4">
                                        <div class="form-group mt-3 mt-sm-0">
                                            <label>Item Quantity</label>
                                            <input name="Quantity[]" class="form-control" value="" placeholder="Item Quantity" />
                                        </div>
                                    </div> --}}
                                    <input name="Quantity[]" class="form-control" value="" placeholder="Item Quantity" />
                                </td>
                                <td>
                                    <input name="Warehouse[]" class="form-control" value="" placeholder="Item WarehouseCode" />
                                    {{-- <div class="col-xl-2 col-sm-4">
                                        <div class="form-group mt-3 mt-sm-0">
                                            <label>Item WarehouseCode</label>
                                            <input name="Warehouse[]" class="form-control" value="" placeholder="Item WarehouseCode" />
                                        </div>
                                    </div> --}}
                                </td>
                                {{-- <td>2011/04/25</td>
                                <td>$320,800</td> --}}
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div> <!-- end card body-->
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ URL::previous() }}" class="btn btn-sm btn-danger float-right">Cancle</a>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="{{ URL::previous() }}" class="btn btn-sm btn-danger float-right">Cancle</a>
                </div>
            </div> <!-- end card -->
        </form>
        </div><!-- end col-->
    </div>
@endsection

@section('script')
    <!-- Init js-->
    <script src="assets/js/pages/form-advanced.init.js"></script>
@endsection

@section('script-bottom')
@endsection