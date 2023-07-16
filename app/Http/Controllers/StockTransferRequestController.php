<?php

namespace App\Http\Controllers;

use App\Services\SAPHttpClientService;
use Illuminate\Http\Request;

class StockTransferRequestController extends Controller
{
    protected SAPHttpClientService $_client;

    public function __construct(SAPHttpClientService $client)
    {
        $this->_client = $client;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->_client->get('InventoryTransferRequests')->getBody()->getContents();
        $stocktransferrequests = json_decode($response);

        return view('apps.inventory.inventorytransactions.stocktransfer.stocktransferrequest.stocktransferrequests', ['stocktransferrequests' => $stocktransferrequests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = $this->_client->get('InventoryTransferRequests('. $id .')')->getBody()->getContents();
        $stocktransferrequest = json_decode($response);

        return view('apps.inventory.inventorytransactions.stocktransfer.stocktransferrequest.stocktransferrequest', ['stocktransferrequest' => $stocktransferrequest]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
