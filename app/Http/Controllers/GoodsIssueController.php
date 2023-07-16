<?php

namespace App\Http\Controllers;

use App\Services\SAPHttpClientService;
use App\Services\ServiceLayerService;
use Illuminate\Http\Request;

class GoodsIssueController extends Controller
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
        $response = $this->_client->get('InventoryGenExits')->getBody()->getContents();
        $stockIssues = json_decode($response);

        return view('apps.inventory.inventorytransactions.goodsissue.goodsissue', ['stockIssues' => $stockIssues]);
        // return view('errors.500', ['error' => $response]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = $this->_client->get('Items')->getBody()->getContents();
        $items = json_decode($response);

        return view('apps.stockTransaction.StockTransferTransaction', ['items' => $items]);
        // return view('errors.500', ['error' => $response]);
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

        // $session = $this->_client->auth()->getStatusCode();
        // if ($session == 200) {
            $response = $this->_client->post('InventoryGenExits', 
                ['json' => $collect]
            );

            if ($response->getStatusCode() == 200) {
                return view('apps.stockReport.StockIssueReport');
            }

            return view('errors.500', $response);
        // }

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
        // $session = $this->_client->auth()->getStatusCode();

        // if ($session == 200) {
            $response = $this->_client->get('InventoryGenExits('. $id .')')->getBody()->getContents();
            $stockIssue = json_decode($response);

            // return view('apps.stockReport.StockIssueDetail', ['stockIssue' => $stockIssue]);
            return view('apps.inventory.inventorytransactions.goodsissue.goodsissued', ['goodsissued' => $stockIssue]);
        // }

        return view('errors.500', ['error' => $response]);
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
