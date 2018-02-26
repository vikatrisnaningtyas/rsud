<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['nip', 'nama_guru'];

    public function transaksi()
    {
        return $this->hasMany('App\Transaksi');
    }
}
