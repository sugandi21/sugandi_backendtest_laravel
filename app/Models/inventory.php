<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class inventory extends Model
{
    use HasApiTokens, HasFactory;
    public $table = "inventory";
    protected $guarded = ['id'];
}
