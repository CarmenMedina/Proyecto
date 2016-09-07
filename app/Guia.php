<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pedido;

class Guia extends Model
{
    protected $table = 'guia';
    protected $fillable = ['numeroGuia', 'urlRastreo', 'urlEtiqueta'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}