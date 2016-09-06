<?php
/**
 * Created by PhpStorm.
 * User: Carmen Botello
 * Date: 06/09/2016
 * Time: 11:47 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];

}