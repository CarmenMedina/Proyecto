<?php

namespace App\Repositories;

use App\Pedido;
use App\Guia;

class OrderRepository
{
    public function forOrder()
    {
        return $order = DB::table('pedido')
            ->join('guia', function ($join) {
                $join->on('pedido.idGuia', '=', 'guia.idGuia')
                    ->select('pedido.idPedido', 'pedido.idFactura', 'pedido.estado',
                         'guia.numeroGuia', 'guia.urlRastreo', 'guia.urlEtiqueta');
            })->get();
    }
}
