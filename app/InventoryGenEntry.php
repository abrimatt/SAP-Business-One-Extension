<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryGenEntry extends Model
{
    use HasFactory;

    protected $fillable = [
        'DocDate', 'DocDueDate', 'DocTotal', // 'password', 'email', 'password', 'email', 'password', 'email', 'password',
    ];
}
