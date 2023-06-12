<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pengemasan extends Model
{
    use HasFactory;

    protected $table ='data_pengemasan';
    protected $primaryKey = 'id_pengemasan';
    protected $guarded =[];
    
}
