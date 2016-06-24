<?php namespace Blog;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Post extends Model implements SluggableInterface {

    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

    //use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content','description', 'photo','created_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function tags()
    {
        return $this->belongsToMany('Blog\Tag','post_tag','posts_2_id','tags_2_id');
    }

    public function getTagedAttribute()
    {
        return $this->tags->tags;
    }

    public function scopeName($query, $name)
    {
        if(trim($name) != '')
        {
                $query->where('title', "LIKE", '%'.$name.'%');
        }
    }
}
