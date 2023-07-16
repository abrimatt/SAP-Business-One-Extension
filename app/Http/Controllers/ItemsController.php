<?php

namespace App\Http\Controllers;

use App\Services\SAPHttpClientService;
use App\Services\ServiceLayerService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class ItemsController extends Controller
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
        $response = $this->_client->get('Items?$select=ItemCode,ItemName,ItemPrices,QuantityOnStock,Valid&$filter=ItemType eq \'I\'');

        $result = json_decode($response->getBody());
        return view('apps.stockReport.Items', ['items' => $result]);

            // if ($session == 200) {
            //     $response = $this->_client->get('Items?$select=ItemCode,ItemName,ItemPrices,QuantityOnStock,Valid&$filter=ItemType eq \'I\'')->getBody()->getContents();
            //     $items = json_decode($response);

            //     return view('apps.stockReport.Items', ['items' => $items]);
            // }
            
            // Option II
            // $session = $this->_client->auth()->getStatusCode();

            // if ($session == 200) {
            //     $response = $this->_client->get('Items')->getBody()->getContents();
            //     dd($items = json_decode($response)); 

            //     return view('apps.stockReport.Items', ['items' => $items]);
            // }

        
    }

    public function itemWarehouse() {
        $response = $this->_client->get('Items?$select=ItemCode,ItemName,ItemPrices,ItemWarehouseInfoCollection,QuantityOnStock,Valid&$filter=ItemType eq \'I\''); //->getBody()->getContents();
        // $response = Http::serviceLayer()->get('Items?$select=ItemCode,ItemName,ItemPrices,ItemWarehouseInfoCollection,QuantityOnStock,Valid&$filter=ItemType eq \'I\'')
        //                                 ->withHeader('Cookie', $session); // ->getBody()->getContents();

        $items = json_decode($response->getBody());
        // dd($items);

        return view('apps.reports.inventory.stockoverview', ['items' => $items]);

        // return view('errors.500', ['error' => $status]);
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
        // $response = $this->_client->get('Items(\''.$id.'\')?$select=ItemCode,ItemName,ItemPrices,ItemWarehouseInfoCollection,QuantityOnStock,Valid&$filter=ItemType eq \'I\'')->getBody()->getContents();
        $response = $this->_client->get('SQLQueries(\'GetStockOverviewNew\')/List?ItemCode=\''.$id.'\'')->getBody()->getContents();
        // $response = $this->_client->get('Items(\''.$id.'\')?$select=ItemCode,ItemName,ItemPrices,ItemWarehouseInfoCollection,QuantityOnStock,Valid&$filter=ItemType eq \'I\'')->getBody()->getContents();
        $items = json_decode($response);

        return view('apps.stockReport.ItemDetail', ['item' => $items]);

        // return view('errors.500', ['error' => $status]);
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
