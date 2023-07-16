<?php

namespace App\Services;

use App\DocumentLines;
use Exception;
use Illuminate\Http\Request;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

/**
 * Class InventoryEntryDto.
 */
class InventoryEntryDto extends Data
{
  // public int $DocEntry;
	// public int $DocNum;
	// public string $DocType;
	public string $DocDate;
	public string $DocDueDate;
	public $CardCode;
	public $CardName;
	public $Address;
	// public int $DocTotal;
	// public string $DocCurrency;
	// public int $DocRate;
	// public $Comments;
	// public string $JournalMemo;
	// public string $DocTime;
	// // public string $Confirmed;
	// // public int $ContactPersonCode;
	// public string $TaxDate;
	// public string $PartialSupply;
	// public string $DocObjectCode;
	// public $ShipToCode;
	// public $FederalTaxID;
	// public string $CreationDate;
	// public string $UpdateDate;
	// // public int $DocTotalFc;
	// // public int $DocTotalSys;
	// public $RequriedDate;
	// public $CancelDate;
	// // public int $BaseAmount;
	// // public int $BaseAmountSC;
	// // public int $BaseAmountFC;
	// public $VatDate;
	// public $Address2;
	// public string $DocumentStatus;
	// public $TrackingNumber;
	// public string $Cancelled;
	// public string $EDocStatus;
	// public $EDocErrorCode;
	// public $EDocErrorMessage;
	// public $Releaser;
	// public $Receiver;
	// public string $CancelStatus;
	/** @var \App\Data\InventoryGenDocumentLine[] */
	public DataCollection $DocumentLines;
	// public InventoryGenDocumentLineDto $DocumentLines;
	public $DocumentReferences;

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
  
  public static function fromRequest(Request $request): self
  {
      // return new self([
      //     'DocDate' => $request->input('DocDate'),
      //     'DocDueDate' => $request->input('DocDueDate'),
      //     'DocumentLines' => $request->input('DocumentLines'),
      // ]);

			return self::from([
					'DocDate' => $request->input('DocDate'),
          'DocDueDate' => $request->input('DocDueDate'),
					// 'DocumentLines' => InventoryGenDocumentLine::collection(
					// 		$request->all(),
					// 		// DocumentLines::whereIn('ItemCode', $request->collect('ItemCode'))->get()
					// ),
			]);
  }
}
