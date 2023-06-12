<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengemasanModel extends Model
{
    use HasFactory;
    protected $table ='data_pengemasan';
    protected $primaryKey = 'id_pengemasan';
    protected $guarded =[];
}
