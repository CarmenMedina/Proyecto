@extends('layout')

@section('content')

    @if (count($order) > 0)
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Pedidos
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <thead>

                    <tr>

                        <th>Id</th>
                        <th>Id Factura</th>
                        <th>Estado</th>
                        <th>Número de Guía</th>
                        <th>URL de Rastreo</th>
                        <th>URL de Etiqueta</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($order as $order)
                        <tr class="success">
                            <td class="table-text">
                                <div>{{$order->idPedido}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$order->idFactura}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$order->estado}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$order->guia->numeroGuia}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$order->guia->urlRastreo}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$order->guia->urlEtiqueta}}</div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif

@endsection