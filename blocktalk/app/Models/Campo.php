<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campo extends Model
{
    use HasFactory;

    protected $table = 'campo';

    protected $fillable = [
        'nome',
        'tipo',
        'painel_id'
    ];

    public function painel(){
        return $this->belongsTo(Painel::class, 'painel_id');
    }
}
