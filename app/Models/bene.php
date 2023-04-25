<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bene extends Model
{
    use HasFactory;
    protected $table='benes';
    protected $primarykey='id';
    protected $fillable=['names','address','phone_num','work','timestamps','dob'];
}
