<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil_pengiriman extends Model
{
    use HasFactory;
    protected $table ='hasil_pengiriman';
    protected $primaryKey = 'id_pengiriman';
    protected $guarded =[];
}
