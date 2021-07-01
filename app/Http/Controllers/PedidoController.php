<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Ubicacion_Origen;
use App\Models\Ubicacion_Destino;
use App\Models\TipoServicio;
use App\Models\User;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function listar(){
        $user = Auth::user();
        $pedidos = $user->pedidos()->with(['user',
        'ubicacion_origen',
         'ubicacion_destino',
         'tipo_servicio'])->get();
   foreach ($pedidos as $pedido) {
       $pedido->user()->get();
   }
        return view('pedidos.index',['pedidos' => $pedidos]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_servicios = TipoServicio::all();
        
        return view('home', ['tipo_servicio' => $tipo_servicios]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'calle_origen' => 'required|max:255',
            'barrio_origen' => 'required|max:255',
            'tipo_servicio' => 'required',
            'numero_casa_origen' => 'required|integer',
            'altura_origen' => 'required|integer',
            'calle_destino' => 'required|max:255',
            'barrio_destino' => 'required|max:255',
            'numero_casa_destino' => 'required|integer',
            'altura_destino' => 'required|integer',
        ]);

        if ($validated->fails()) {
            return back()
                ->withErrors($validated)
                ->withInput();
        }

        $origen = UbicacionOrigen::create(
            [
                'calle' => $request['calle_origen'],
                'barrio' => $request['barrio_origen'],
                'numero_casa' => $request['numero_casa_origen'],
                'altura_casa' => $request['altura_origen']
            ]
        );


        $destino = UbicacionDestino::create(
            [
                'calle' => $request['calle_destino'],
                'barrio' => $request['barrio_destino'],
                'numero_casa' => $request['numero_casa_destino'],
                'altura_casa' => $request['altura_destino']
            ]
        );

        $pedido = Pedido::create(
          [
            'user'=> Auth::user()->id,
            'ubicacion_origen'=>$origen->id,
            'ubicacion_destino'=>$destino->id,
            'tipo_servicio'=>$request['tipo_servicio']
          ]
       );

        return redirect()->to('/home')->with('status', 'Pedido Realizado!');;
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}