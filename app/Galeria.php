<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model {

    protected $table = 'galerias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description','type','photo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function multimedias()
    {
        return $this->hasMany('Blog\Multimedia','galerias_id');
    }

}
