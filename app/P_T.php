<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

class P_T extends Model {

    protected  $table='post_tag';

    protected $fillable = ['posts_2_id','tags_2_id'];

}
