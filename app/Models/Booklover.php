<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booklover extends Model
{
    protected $table="booklovers";
    protected $fillable=['name','email','address','choose','bookAutor','bookName','amount'];
}
