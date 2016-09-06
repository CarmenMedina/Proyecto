<?php
/**
 * Created by PhpStorm.
 * User: Carmen Botello
 * Date: 06/09/2016
 * Time: 11:49 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class UsuariosRoles extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'UsuariosRoles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['idUsuario', 'idRol'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];

}