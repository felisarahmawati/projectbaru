<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function barang2()
    {
        return $this->hasOne('App\Models\Barang', 'id', 'barang_id');
    }
}
