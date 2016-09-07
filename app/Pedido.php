<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Guia;

class Pedido extends Model
{
    protected $table = 'pedido';

    protected $fillable = ['idPedido', 'idFactura', 'estado'];

    public function guia()
    {
        return $this->hasOne(Guia::class);
    }
}