<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentLines extends Model
{
    use HasFactory;

    protected $fillable = [
        'LineNum', 'BaseEntry', 'BaseLine', 'ItemCode', 
        'Quantity', 'Price', 'WarehouseCode', 'AccountCode', // 'password', 'email', 'password',
    ];

    public function inventoryGenEntry()
    {
        return $this->belongsTo(InventoryGenEntry::class);
    }

    public function inventoryGenExit()
    {
        return $this->belongsTo(inventoryGenExit::class);
    }
}
