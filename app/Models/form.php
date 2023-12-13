<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    protected $table ='form';
    protected $primarykey ='id';
    protected $fillable =['id','name','email',',,password'];
    use HasFactory;
}
