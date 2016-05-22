<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model {

    protected $table = 'Multimedias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function types()
    {
        return $this->hasOne('Blog\Types_Galeria','galerias_id');
    }

    public function getGaleriaAttribute()
    {
        return $this->title
                    ->description;
    }

}
