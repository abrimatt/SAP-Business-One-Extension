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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    
                    <h4 class="header-title mt-0 mb-1">Responsive tables</h4>
                    <p class="sub-header">
                        Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code>
                        to make them scroll horizontally on small devices (under 768px).
                    </p>
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    {{-- <th>#</th> --}}
                                    <th>Item Code</th>
                                    <th>Item Name</th>
                                    <th>Total Quantity</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items->value as $item)
                                <tr>
                                    {{-- <th scope="row"></th> --}}
                                    <td>{{ $item->ItemCode }}</td>
                                    <td>{{ $item->ItemName }}</td>
                                    <td>{{ $item->QuantityOnStock }}</td>
                                    <td>
                                        {{-- <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#centermodal">View</button> --}}
                                        <a href="{{ url('items/' . $item->ItemCode) }}" class="btn btn-sm btn-success">Details</a>
                                        {{-- <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myCenterModalLabel">Center modal</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>Overflowing text to show scroll behavior</h5>
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Warehouse Code</th>
                                                                    <th>In Stock</th>
                                                                </tr>
                                                            </thead>
                                                                <tr>
                                                                    @foreach ($item->ItemWarehouseInfoCollection as $warehouse)
                                                                        <td>{{ $warehouse->WarehouseCode }}</td>
                                                                        <td>{{ $warehouse->InStock }}</td>
                                                                    @endforeach
                                                                </tr>
                                                        </table>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ URL::previous() }}" class="btn btn-sm btn-danger">Cancle</a> <a href="#" class="btn btn-sm btn-primary float-right">Send Request</a>
                </div>
            </div>
    
        </div>
    </div>
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection