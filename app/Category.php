<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name'];

/* asi se hacen las relaciones de las tablas .. el nombre es el nombre del modelo y si se relaciona a muchos en en plural o 1 es singular */

    public function articles()
    {
    	return $this->hasMany('App\Article');
    }
}
