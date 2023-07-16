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
        {{-- <h4 class="mb-1 mt-0">{{ $item->ItemName }} Report</h4> --}}
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Stock In Warehous Information</h4>
                    <p class="sub-header">
                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                        function:
                        <code>$().DataTable();</code>.
                    </p>
    
                    {{-- <div class="row">
                        <div class="col-xl-2 col-sm-4">
                            <div class="form-group mt-3 mt-sm-0">
                                <label>Posting Date</label>
                                <input class="form-control" value="{{ $stockReceipt->DocDate }}" placeholder="Posting Date" readonly />
                            </div>
                        </div>
    
                        <div class="col-xl-2 col-sm-4">
                            <div class="form-group mt-3 mt-sm-0">
                                <label>Due Date</label>
                                <input class="form-control" value="{{ $stockReceipt->DocDueDate }}" placeholder="Posting Date" readonly />
                            </div>
                        </div>
                    </div> --}}

                    {{-- <hr> --}}

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Item Code</th>
                                <th>Item Description</th>
                                <th>Price</th>
                                <th>Quantity In Warehouse</th>
                                <th>Warehouse</th>
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
                            @foreach ($item->value as $item)
                            <tr>
                                <td>{{ $item->ItemCode, }}</td>
                                <td>{{ $item->ItemName }}</td>
                                <td>{{ $item->Price }}</td>
                                <td>{{ $item->OnHand }}</td>
                                <td>{{ $item->WhsName }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
                <div class="card-footer">
                    <a href="{{ URL::previous() }}" class="btn btn-sm btn-danger">Back</a>
                    <a href="#" class="btn btn-sm btn-primary float-right">Send Request</a>
                </div>
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
@endsection



@section('script')
@endsection

@section('script-bottom')
@endsection