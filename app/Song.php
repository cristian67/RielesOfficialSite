<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Song extends Model {

    protected  $table='songs';

    protected $fillable = ['title', 'lyrics','cash','ruta','albums_id'];

    public function album()
    {
        return $this->belongsTo('Album');
    }
}
