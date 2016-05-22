<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Types_Galeria extends Model {

    protected  $table='types_galerias';

    public function getTypeAttribute()
    {
        return $this->type;
    }

}
