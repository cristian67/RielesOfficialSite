<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model {

    protected $table = 'Multimedias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description', 'url'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function tag()
    {
        return $this->hasOne('Blog\Types_Multimedia','multimedias_id_2');
    }
}
