<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model {

    protected $table = 'feeds';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['usuario', 'content'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
