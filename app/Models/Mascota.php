<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'spacies', 'race', 'vaccines', 'rides'];

    static $rules = [
        'name' => 'required',
        'spacies' => 'required',
        'race' => 'required',
        'vaccines' => 'required',
        'rides' => 'required',
    ];
}
