<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class money extends Model
{
    use HasFactory;
    protected $fillable = [
        'bank','quantity','user_id'
    ];
    protected $hidden = [
        'user_id'
    ];
}
