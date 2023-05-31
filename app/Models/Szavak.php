<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szavak extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'angol',
        'magyar',
        'temaId'
    ];

    public function designer(){
        return $this->belongsTo(Tema::class, 'temaId', 'id');
    }
}
