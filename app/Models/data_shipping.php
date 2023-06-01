<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_shipping extends Model
{
    use HasFactory;

    protected $table ='data_shipping';
    protected $primaryKey = 'resi';
    protected $guarded =[];
}
