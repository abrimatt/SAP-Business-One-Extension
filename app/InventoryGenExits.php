<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryGenExit extends Model
{
    use HasFactory;

    protected $fillable = [
        'DocDate', 'DocDueDate', 'DocTotal', // 'email', 'password', 'email', 'password', 'email', 'password',
    ];
}
