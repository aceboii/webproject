<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tube extends Model
{
    use HasFactory;
    protected $fillable=['email','password','confirmPassword','address', 'bio'];
    protected $table="tubes";
    protected $primaryKey="id";
}   