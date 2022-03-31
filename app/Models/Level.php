<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model {
    use HasFactory;

    protected $table = "level";
    protected $fillable = [
        'name',
        'access',
        'description',

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}