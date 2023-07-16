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
      @foreach ($items->value as $item)
          <div class='col-xl-4 col-lg-6'>
              @component('apps.inventory.item.items', ['itemCode' => $item->ItemCode, 'status' => $item->Valid, 'category'
                  => $item->ItemCode, 'name' => $item->ItemCode, 'description' => $item->ItemName, 'dueDate' => '15 Dec', 
                  'noTasks' => $item->QuantityOnStock, 'noComments' => $item->QuantityOnStock,
                  'progress' => 100, 'url' => '/items' . '/' . $item->ItemCode ])
              @endcomponent
          </div>
      @endforeach
  </div>
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection