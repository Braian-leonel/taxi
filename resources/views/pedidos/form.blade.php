<form method="POST" action="{{ route('realizar_pedido') }}">
    @csrf


    <div class="form-group row">
        <label for="tipo_servicio" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Servicio') }}</label>

        <div class="col-md-6">

            <select id="tipo_servicio"  class="form-control @error('tipo_servicio') is-invalid @enderror" name="tipo_servicio" value="{{ old('tipo_servicio') }}" required autofocus>
                <option value="">Seleccione el tipo de servicio (*)</option>
                
                @foreach ($tipo_servicios as $tipo_servicio)
                    <option value="{{ $tipo_servicio->id }}">{{ $tipo_servicio->descripcion }}</option>
                @endforeach
            </select>
            @error('tipo_servicio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        
    </div>
    <div class="col-md-12"><hr></div>
    <div class="col-md-12 col-md-offset-5">Ubicacion Actual</div>
    <div class="form-group row">

  
        <label for="calle_origen" class="col-md-4 col-form-label text-md-right">{{ __('Calle') }}</label>

        <div class="col-md-6">

            <input id="calle_origen" type="text" class="form-control @error('calle_origen') is-invalid @enderror" name="calle_origen" value="{{ old('calle_origen') }}" required >
        
            @error('calle_origen')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

    </div>

    <div class="form-group row">

  
        <label for="numero_casa_origen" class="col-md-4 col-form-label text-md-right">{{ __('Numero Casa') }}</label>

        <div class="col-md-3">

            <input id="numero_casa_origen" type="number" min="1" class="form-control @error('numero_casa_origen') is-invalid @enderror" name="numero_casa_origen" value="{{ old('numero_casa_origen') }}" required >
        
            @error('numero_casa_origen')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

    </div>
    
    <div class="form-group row">

  
        <label for="altura_origen" class="col-md-4 col-form-label text-md-right">{{ __('Altura') }}</label>

        <div class="col-md-3">

            <input id="altura_origen" type="number" min="1" class="form-control @error('altura_origen') is-invalid @enderror" name="altura_origen" value="{{ old('altura_origen') }}" required >
        
            @error('altura_origen')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

    </div>

    <div class="form-group row">

        
        <label for="barrio_origen" class="col-md-4 col-form-label text-md-right">{{ __('Barrio') }}</label>

        <div class="col-md-6">

            <input id="barrio_origen" type="text" class="form-control @error('barrio_origen') is-invalid @enderror" name="barrio_origen" value="{{ old('barrio_origen') }}" required >

            @error('barrio_origen')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

    </div>
    <div class="col-md-12"><hr></div>
    <div class="col-md-12 col-md-offset-5">Ubicacion destino</div>
    <div class="form-group row">

  
        <label for="calle_destino" class="col-md-4 col-form-label text-md-right">{{ __('Calle') }}</label>

        <div class="col-md-6">

            <input id="calle_destino" type="text" class="form-control @error('calle_destino') is-invalid @enderror" name="calle_destino" value="{{ old('calle_destino') }}" required >
        
            @error('calle_origen')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

    </div>

    <div class="form-group row">

  
        <label for="numero_casa_destino" class="col-md-4 col-form-label text-md-right">{{ __('Numero Casa') }}</label>

        <div class="col-md-3">

            <input id="numero_casa_destino" type="number" min="1" class="form-control @error('numero_casa_destino') is-invalid @enderror" name="numero_casa_destino" value="{{ old('numero_casa_destino') }}" required >
        
            @error('numero_casa_origen')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

    </div>
    
    <div class="form-group row">

  
        <label for="altura_destino" class="col-md-4 col-form-label text-md-right">{{ __('Altura') }}</label>

        <div class="col-md-3">

            <input id="altura_destino" type="number" min="1" class="form-control @error('altura_destino') is-invalid @enderror" name="altura_destino" value="{{ old('altura_destino') }}" required >
        
            @error('altura_origen')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

    </div>

    <div class="form-group row">

        
        <label for="barrio_destino" class="col-md-4 col-form-label text-md-right">{{ __('Barrio') }}</label>

        <div class="col-md-6">

            <input id="barrio_destino" type="text" class="form-control @error('barrio_destino') is-invalid @enderror" name="barrio_destino" value="{{ old('barrio_destino') }}" required >

            @error('barrio_destino')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

    </div>
    <div class="form-group row">
        <div class="col-md-12 col-md-offset-3">
            <button type="submit" class="btn btn-primary btn-block">Solicitar</button>
        </div>
    </div>

</form>