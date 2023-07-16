<?php

namespace App\Dto;

use Illuminate\Http\Request;
use Spatie\LaravelData\Data;

class InventoryGenDocumentLineDto extends Data
{
	public int $LineNum;
	public string $ItemCode;
	public string $ItemDescription;
	public int $Quantity;
	public $ShipDate;
	public float $Price;
	public int $PriceAfterVAT;
	public string $Currency;
	public $SerialNum;
	public string $WarehouseCode;
	public string $AccountCode;
	public $BarCode;
	public int $BaseType;
	public $BaseEntry;
	public $BaseLine;
	public $Address;
	public $MeasureUnit;
	public int $UnitsOfMeasurment;
	public float $LineTotal;
	public int $RowTotalFC;
	public float $RowTotalSC;
	public int $StockInmPrice;
	public int $BaseOpenQuantity;
	public float $UnitPrice;
	public string $LineStatus;
	public $Text;
	public string $LineType;
	public $ItemDetails;
	public $LocationCode;
	public int $DocEntry;
	public int $UoMEntry;
	public string $UoMCode;
	public int $InventoryQuantity;
	public $SerialNumbers;
	public $BatchNumbers;
	public $DocumentLinesBinAllocations;

  public static function fromRequest(Request $request): self
  {
      return new self([
          'ItemCode' => $request->input('DocDueDate'),
          'ItemDescription' => $request->input('ItemDescription'),
          'Quantity' => $request->input('Quantity'),
          'WarehouseCode' => $request->input('WarehouseCode')
      ]);
  }
}
