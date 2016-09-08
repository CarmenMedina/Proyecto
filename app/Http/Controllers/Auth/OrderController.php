<?php
/**
 * Created by PhpStorm.
 * User: Carmen Botello
 * Date: 07/09/2016
 * Time: 12:06 PM
 */

namespace App\Http\Controllers\Auth;

use App\Guia;
use App\Http\Requests\Request;
use App\Pedido;
use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;

class OrderController extends Controller
{
    protected $order;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct(OrderRepository $order)
    {
       // $this->middleware('auth');
        $this->order = $order;
    }*/

    public function index(Request $request)
    {
        return view('auth.order', [
            'order' => $this->order->forOrder($request->query()),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'idPedido' => 'required',
            'idFactura' => 'required|max:255',
            'estado' => 'required|max:255',
            'numeroGuia' => 'required|max:255',
            'urlRastreo' => 'required|max:255',
            'urlEtiqueta' => 'required|max:255',
        ]);
    }

    public function update(Request $request, $idPedido, $idGuia)
    {
        $order = Pedido::findOrFail($idPedido);
        $guia = Guia::findOrFail($idGuia);

        $this->validate($request, [
            'idPedido' => 'required',
            'idFactura' => 'required|max:255',
            'estado' => 'required|max:255',
            'numeroGuia' => 'required|max:255',
            'urlRastreo' => 'required|max:255',
            'urlEtiqueta' => 'required|max:255',
        ]);

        $order->fill($request->collect(['idPedido', 'idFactura', 'estado']));
        $guia->fill($request->collect(['numeroGuia', 'urlRastreo', 'urlEtiqueta']));
        $order->save();
        $guia->save();

        return redirect('account')
            ->with('alert', 'Your profile has been updated');
    }
}