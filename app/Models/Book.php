<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model{
    protected $fillable = ['title', 'description','author'];
}