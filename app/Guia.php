<?php
/**
 * Created by PhpStorm.
 * User: Carmen Botello
 * Date: 06/09/2016
 * Time: 04:16 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    protected $table = 'guia';

    /**
 * @param string $primaryKey
 */
    public function setPrimaryKey($primaryKey)
    {
        $this->primaryKey = $primaryKey;

    }
}