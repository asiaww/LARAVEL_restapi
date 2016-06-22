<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Ingredient extends Model
{

    protected $hidden = array('pivot');

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ingredients';

    public function recipes()
    {
        return $this->belongsToMany('App\Recipe', 'recipes_ingredients', 'ingredient_id', 'recipe_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

//	/**
//	 * The attributes that are mass assignable.
//	 *
//	 * @var array
//	 */
    protected $fillable = ['id'];
//
//	/**
//	 * The attributes excluded from the model's JSON form.
//	 *
//	 * @var array
//	 */
//	protected $hidden = ['password', 'remember_token'];

}
