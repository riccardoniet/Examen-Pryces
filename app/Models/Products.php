<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
        'lastname',
        'adress',
        'stad',
        'postcode',
        'telefoonnummer',
        'provider',
        'pakket',
        'betaling',
    ];
}
