<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musteri extends Model
{
    //
    protected $table = 'musteri';

    protected $fillable = [
        'ad','soyad','telefon','tc','adres'
    ];

}

