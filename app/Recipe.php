<?php namespace App;

use DB;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Recipe extends Model
{

    protected $hidden = array('pivot');

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recipes';
    protected $fillable = array('title');

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'recipes_ingredients', 'recipe_id', 'ingredient_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }


}
