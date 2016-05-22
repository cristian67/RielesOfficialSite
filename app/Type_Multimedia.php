<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Types_Multimedia extends Model {

    protected  $table='types_multimedia';

    public function getTypeAttribute()
    {
        return $this->type;
    }

}
