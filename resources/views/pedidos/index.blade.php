@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de pedidos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class = "table table-bordered">
                        <thead>
                         <tr>
                            <th>#</th>
                            <th>nombre</th>
                            <th>ubicacion</th>
                            <th>destino</th>
                            <th>servicio</th>
                            <th>estado</th>
                            <th></th>
                         </tr>
                        </thead>
                      <tbody>
                        @foreach ($pedidos as $pedido)
                        <tr>
                            <td>
                                {{ $pedido->user()->get('nombre_completo')[0]->nombre_completo }}
                            </td>
                            <td>
                                {{ $pedido->ubicacion_origen()->get('barrio')[0]->barrio }},  
                                {{ $pedido->ubicacion_origen()->get('calle')[0]->calle }}  
                                {{ $pedido->ubicacion_origen()->get('numero_casa')[0]->numero_casa }},  
                                {{ $pedido->ubicacion_origen()->get('altura_casa')[0]->altura_casa }}
                            </td>
                            <td>
                                {{ $pedido->ubicacion_destino()->get('barrio')[0]->barrio }},  
                                {{ $pedido->ubicacion_destino()->get('calle')[0]->calle }}  
                                {{ $pedido->ubicacion_destino()->get('numero_casa')[0]->numero_casa }},  
                                {{ $pedido->ubicacion_destino()->get('altura_casa')[0]->altura_casa }}
                            </td>
                            <td>
                                {{ $pedido->tipo_servicio()->get('descripcion')[0]->descripcion }}
                            </td>
                            <td>
                                Pendiente
                            </td>
                            <td>
                                
                                <button class="btn btn-primary">Accion</button>
                            </td>
                            
                
                        </tr>
                    @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

