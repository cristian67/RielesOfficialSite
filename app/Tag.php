<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    protected  $table='tags';


    public function posts()
    {
        return $this->belongsToMany('Blog\Post','post_tag','posts_2_id','tags_2_id');
    }
}
