<?php

namespace App\Http\Controllers;

use App\Services\SAPHttpClientService;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
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
        $response = $this->_client->get('PurchaseOrders')->getBody()->getContents();
        $apinvoice = json_decode($response);

        return view('apps.procurementtransactions.purchaseorder.purchaseorders', ['purchaseorders' => $apinvoice]);
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
        $collections = [];
        foreach($request->input('ItemCode') as $index => $item) {
            $collections[] = [
              'BaseEntry' => $request->input('DocEntry'),
              'BaseType' => '60',
              'ItemCode' => $item, // $request->input('ItemCode')[$index],
              'ItemDescription' => $request->input('ItemDescription')[$index],
              'Quantity' => $request->input('Quantity')[$index],
              'WarehouseCode' => $request->input('Warehouse')[$index],
            ];
        }

        $collect = [
            // 'DocEntry' => $request->input('DocEntry'),
            'DocDate' => $request->input('DocDate'), // $keys['DocDate'],
            'DocDueDate' => $request->input('DocDueDate'), // $keys['DocDueDate'],
            'DocumentLines' => $collections
        ];

        $response = $this->_client->post('PurchaseOrders', 
            ['json' => $collect]
        );

        if ($response->getStatusCode() == 200) {
            return view('apps.procurementtransactions.purchaseorder.purchaseorders');
        }

        // return back()->withErrors('Error posting data!');

        return view('errors.500', ['error' => $response]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = $this->_client->get('PurchaseOrders('.$id.')')->getBody()->getContents();
        $apinvoice = json_decode($response);

        return view('apps.procurementtransactions.purchaseorder.purchaseorder', ['purchaseorder' => $apinvoice]);
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
