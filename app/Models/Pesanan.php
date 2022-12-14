<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function user()
    {
        return $this->hasMany('App\user', 'user_id', 'id');
    }
    public function pesanan_detail()
    {
        return $this->hasMany('App\PesananDetail', 'pesanan_id', 'id');
    }

    public function user2()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
