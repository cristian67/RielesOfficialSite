<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    protected  $table='tags';

    public function getTagAttribute()
    {
        return $this->tags;
    }

    public function post()
    {
        return $this->belongsTo('Blog\Post','posts_id_2');
    }
}
