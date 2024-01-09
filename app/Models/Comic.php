<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    //protected $guarded = [];
    //si usa per dire quali valori non deve includere
    protected $fillable =
        ['title', 'price', 'description', 'type', 'thumb', 'sale_date', 'series'];
}
