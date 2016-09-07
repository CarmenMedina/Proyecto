@extends('layout')
@section('')

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="container">
        <h2>Pedidos</h2>
        <table class="table">
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
            <tr class="success">
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection