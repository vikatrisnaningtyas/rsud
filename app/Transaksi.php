<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['guru_id', 'jam'];

    public function guru()
    {
        return $this->belongsTo('App\Guru');
    }
}
