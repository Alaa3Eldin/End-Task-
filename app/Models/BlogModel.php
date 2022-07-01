<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $fillable = ['title' , 'content' , 'startdate' , 'enddate' , 'image'];
    public $timestamps = false;
}

