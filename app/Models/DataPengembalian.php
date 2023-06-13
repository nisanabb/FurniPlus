<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengembalian extends Model
{
    use HasFactory;
    protected $table = 'data_pengembalian';
    protected $primaryKey = 'id';
    protected $guarded =[];
}
