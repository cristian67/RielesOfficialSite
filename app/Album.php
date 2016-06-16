<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {

    protected $table = 'albums';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description','cash','photo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function archivo()
    {
        return $this->hasMany('Blog\Song','albums_id');
    }

}
