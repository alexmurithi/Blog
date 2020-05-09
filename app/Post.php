<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model

{
    use Sluggable;

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
