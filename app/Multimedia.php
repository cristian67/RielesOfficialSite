<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model {

    protected $table = 'Multimedias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description', 'url','type','url','galerias_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function galeria()
    {
        return $this->belongsTo('Galeria');
    }
}
