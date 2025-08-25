<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventOnly extends Model
{
   protected $fillable = [
    'judul',
    'deskripsi',
    'location',
    'date',
    'gambar_event',
];

}
