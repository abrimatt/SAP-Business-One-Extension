<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use Illuminate\Routing\Route;

use App\Http\Controllers\APInvoiceController;
use App\Http\Controllers\GoodsIssueController;
use App\Http\Controllers\GoodsReceiptPOController;
use App\Http\Controllers\GoodsReceivedController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\StockCountController;
use App\Http\Controllers\StockPostingController;
use App\Http\Controllers\StockTransferController;
use App\Http\Controllers\StockTransferRequestController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('pages-logout', 'RoutingController@logout');
    Route::get('/', 'RoutingController@index');
    // Route::get('{first}/{second}/{third}', 'RoutingController@thirdLevel');
    // Route::get('{first}/{second}', 'RoutingController@secondLevel');
    // Route::get('{any}', 'RoutingController@root');

    Route::resources([
        'purchaseorders' => PurchaseOrderController::class,
        'grpos' => GoodsReceiptPOController::class,
        'apinvoices' => APInvoiceController::class,
        'orders' => OrderController::class,
        'invoices' => InvoiceController::class,
        'goodsissues' => GoodsIssueController::class,
        'goodsreceipts' => GoodsReceivedController::class,
        'stocktransferrequests' => StockTransferRequestController::class,
        'stocktransfers' => StockTransferController::class,
        'stockcounts' => StockCountController::class,
        'stockpostings' => StockPostingController::class,
    ]);

    Route::controller(ItemsController::class)->group(function () {
        Route::get('/items', 'index');
        Route::get('stockoverview', 'itemWarehouse');
        Route::get('/items/{id}', 'show');
        // Route::post('/items', 'create');
    });

    // Route::controller(GoodsIssueController::class)->group(function () {
    //     Route::get('/goodsissue', 'index');
    //     Route::get('goodsissue/create', 'create');
    //     Route::get('/goodsissue/{id}', 'show');
    //     Route::post('/goodsissue/store', 'store');
    // });

    // Route::controller(GoodsReceivedController::class)->group(function () {
    //     Route::get('/goodsreceipt', 'index');
    //     Route::get('/goodsreceipt/{id}', 'show');
    //     Route::get('goodsreceipt/create/{id}', 'create');
    //     Route::post('/goodsreceipt/store', 'store');
    // });
});


