<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barcode extends Model
{

    protected $table ='barcodes';
    public $incrementing = false;

    protected $fillable = [
        'id','nama', 'kontak','status',
    ];
}
