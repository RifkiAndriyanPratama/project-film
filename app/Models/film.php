<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'sipnosis',
        'created_by',
        'genre',
        'actor',
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
