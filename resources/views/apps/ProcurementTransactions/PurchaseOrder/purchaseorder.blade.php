@extends('layouts.vertical')

@section('css')
    <!-- Summernote css -->
    <link href="/assets/libs/summernote/summernote.min.css" rel="stylesheet" />
@endsection

@section('breadcrumb')
  <div class="row page-title align-items-center">
    <div class="col-md-3 col-xl-6">
        <h4 class="mb-1 mt-0">Purchase Order</h4>
    </div>
    <div class="col-md-9 col-xl-6 text-md-right">
        <div class="mt-4 mt-md-0">
            <a href="{{ URL::previous() }}" class="btn btn-danger mr-4 mb-3  mb-sm-0"><i class="uil-times mr-1"></i> Back</a>
            {{-- <button type="button" class="btn btn-danger mr-4 mb-3  mb-sm-0"><i class="uil-plus mr-1"></i> Create Invoice</button> --}}
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
              <!-- Logo & title -->
              <div class="clearfix">
                <div class="float-sm-right">
                    <img src="assets/images/logo.png" alt="" height="48" />
                    <h4 class="m-0 d-inline align-middle">Shreyu</h4>
                    <address class="pl-2 mt-2">
                      795 Folsom Ave, Suite 600<br>
                      San Francisco, CA 94107<br>
                      <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                </div>
                <div class="float-sm-left">
                    <h4 class="m-0 d-print-none">PO</h4>
                    <dl class="row mb-2 mt-3">
                      <dt class="col-sm-3 font-weight-normal">PO Number :</dt>
                      <dd class="col-sm-9 font-weight-normal">#{{ $purchaseorder->DocNum }}</dd>

                      <dt class="col-sm-3 font-weight-normal">Invoice Date :</dt>
                      <dd class="col-sm-9 font-weight-normal">{{ $purchaseorder->DocDate }}</dd>

                      <dt class="col-sm-3 font-weight-normal">Due Date :</dt>
                      <dd class="col-sm-9 font-weight-normal">{{ $purchaseorder->DocDueDate }}</dd>
                    </dl>
                </div>
              </div>

              <div class="row mt-4">
                  <div class="col-md-6">
                      <h6 class="font-weight-normal">Ordered By:</h6>
                      <h6 class="font-size-16">{{ $purchaseorder->CardCode }} - {{ $purchaseorder->CardName }}</h6>
                      <address>
                          {{-- 795 Folsom Ave, Suite 600<br>
                          San Francisco, CA 94107<br>
                          <abbr title="Phone">P:</abbr> (123) 456-7890 --}}
                      </address>
                  </div> <!-- end col -->

                  <div class="col-md-6">
                      <div class="text-md-right">
                          <h6 class="font-weight-normal">Total</h6>
                          <h3> {{ $purchaseorder->DocCurrency }} {{ $purchaseorder->DocTotal }}</h3>
                      </div>
                  </div> <!-- end col -->
              </div>
              <!-- end row -->

              <div class="row">
                  <div class="col-12">
                      <div class="table-responsive">
                          <table class="table mt-4 table-centered table-hover">
                              <thead>
                                  <tr>
                                      <th style="width: 10%">#</th>
                                      <th >Item Description</th>
                                      <th style="width: 10%">Qty</th>
                                      <th style="width: 10%">Warehouse/Store</th>
                                      <th style="width: 10%" class="text-rig">Price</th>
                                      <th style="width: 10%" class="text-rig">Total</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($purchaseorder->DocumentLines as $docLine)
                                <tr>
                                    <td>{{ $docLine->ItemCode, }}</td>
                                    <td>{{ $docLine->ItemDescription }}</td>
                                    <td>{{ $docLine->Quantity }}</td>
                                    <td>{{ $docLine->WarehouseCode }}</td>
                                    <td>{{ $docLine->Price }}</td>
                                    <td>{{ $docLine->LineTotal }}</td>
                                </tr>
                                @endforeach
                              </tbody>
                          </table>
                      </div> <!-- end table-responsive -->
                  </div> <!-- end col -->
              </div>
              <!-- end row -->

              <div class="row">
                  <div class="col-sm-6">
                      <div class="clearfix pt-5">
                          <h6 class="text-muted">Notes:</h6>
                          <small class="text-muted">
                              All accounts are to be paid within 7 days from receipt of
                              invoice. To be paid by cheque or credit card or direct payment
                              online. If account is not paid within 7 days the credits details
                              supplied as confirmation of work undertaken will be charged the
                              agreed quoted fee noted above.
                          </small>
                      </div>
                  </div> <!-- end col -->
                  <div class="col-sm-6">
                      <div class="float-right mt-4">
                          <p><span class="font-weight-medium">Sub-total:</span> <span
                                  class="float-right">{{ $purchaseorder->DocTotal }}</span></p>
                          {{-- <p><span class="font-weight-medium">Discount (10%):</span> <span
                                  class="float-right"> &nbsp;&nbsp;&nbsp; {{ $invoice->DocTotal }}</span></p> --}}
                                  <h3>{{ $purchaseorder->DocTotal }} {{ $purchaseorder->DocCurrency }}</h3>
                      </div>
                      <div class="clearfix"></div>
                  </div> <!-- end col -->
              </div>
              <!-- end row -->

              <div class="mt-5 mb-1">
                  <div class="text-right d-print-none">
                      <a href="javascript:window.print()" class="btn btn-primary"><i
                              class="uil uil-print mr-1"></i> Print</a>
                      <a href="#" class="btn btn-info">Submit</a>
                  </div>
              </div>
          </div>
      </div>
  </div> <!-- end col -->
</div>
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection