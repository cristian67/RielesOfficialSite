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

    public function galerias()
    {
        return $this->belongsToMany('Blog\Galerias','galeria_multimedia','galerias_2_id','multimedias_2_id');
    }
}
