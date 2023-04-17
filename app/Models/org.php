<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\org;

class org extends Model
{
    protected $table='orgs';
    protected $primaryKey='id';
    protected $fillable=['org_name','email','username','pwd','addresee','phone','web']; 
}
