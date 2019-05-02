<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    public $timestamps= false;
    protected $fillable = ['name','teacher','addition'];
   
    
}
