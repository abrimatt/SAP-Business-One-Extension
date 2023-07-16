<?php

namespace App\Http\Controllers;

use App\Dto\InventoryGenDocumentLineDto;
use App\Services\InventoryEntryDto;
use App\Services\SAPHttpClientService;
use Exception;
use Illuminate\Http\Request;

class GoodsReceivedController extends Controller
{
    protected SAPHttpClientService $_client;

    public function __construct(SAPHttpClientService $client)
    {
        $this->_client = $client;
    }

    function array_combine_multi(array $keys, array $values)
    {
        if (count($keys) !== count($values)) {
            throw new Exception('Arrays count mismatch');
        }
        $result = [];
        foreach ($values as $i => $value) {
            if (!isset($result[$keys[$i]])) {
                $result[$keys[$i]] = $value;
            } elseif (!is_array($result[$keys[$i]])) {
                $result[$keys[$i]] = [$result[$keys[$i]], $value];
            } else { 
                $result[$keys[$i]][] = $value;
            }
        }
        return $result;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->_client->get('InventoryGenEntries')->getBody()->getContents();
        $stockReceipts = json_decode($response);

        return view('apps.inventory.inventorytransactions.goodsreceipt.goodsreceipts', ['stockReceipts' => $stockReceipts]);

        // $response = $this->_client->get('InventoryGenEntries');
        // if($response->getStatusCode()) {
        //     $stockReceipts = json_decode($response->getBody()->getContents());
        //     return view('apps.stockReport.StockReceiptReport', ['stockReceipts' => $stockReceipts]);
        // }

        // return view('errors.500', ['error' => $session]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $response = $this->_client->get('InventoryGenExits('. $id .')')->getBody()->getContents();
        $stockIssue = json_decode($response);

        return view('apps.stockTransaction.GoodReceiptTransaction', ['stockIssue' => $stockIssue]);

        // return view('errors.500', ['error' => $session]);
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
              'BaseLine' => $request->input('LineNum')[$index],
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

        $response = $this->_client->post('InventoryGenEntries', 
            ['json' => $collect]
        );

        if ($response->getStatusCode() == 200) {
            return view('apps.stockReport.StockReceiptReport');
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
        $response = $this->_client->get('InventoryGenEntries('. $id .')')->getBody()->getContents();
        $stockReceipt = json_decode($response);

        return view('apps.inventory.inventorytransactions.goodsreceipt.goodsreceipt', ['stockReceipt' => $stockReceipt ]);
        // return view('errors.500', ['error' => $session]);
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
