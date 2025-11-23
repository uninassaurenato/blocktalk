<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Painel extends Model
{
    use HasFactory;

    protected $table = 'painel';

    protected $fillable = [
        'nome',
        'categoria'
    ];

    public function campos()
    {
        return $this->hasMany(Campo::class, 'painel_id');
    }

}
