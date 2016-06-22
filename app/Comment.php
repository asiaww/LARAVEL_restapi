<?php

namespace App;

use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    public function recipe()
    {
        return $this->belongsTo('App\Recipe');
    }

    public function user()
    {
        return $this->belongsTo('App\User','created_by_id');
    }

    public function parent(){
        return $this->belongsTo('App\Comment');
    }

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    

}
