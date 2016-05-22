<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model {

    protected  $table='rols';

    public function getTagAttribute()
    {
        return $this->type;
    }

}
