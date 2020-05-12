<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Post extends Model implements Viewable

{
    use Sluggable;
    use InteractsWithViews;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    protected $fillable =['user_id','photo_id','category_id','title','body','description'];

 public function category(){
     return $this->belongsTo('App\Category');

 }

 public function user(){
     return $this->belongsTo('App\User');
 }

 public function photo(){
     return $this->belongsTo('App\Photo');
 }
}
