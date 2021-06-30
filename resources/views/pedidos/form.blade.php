<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group row">
        <label for="tipo_servicio" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Servicio') }}</label>

        <div class="col-md-6">

            <select id="tipo_servicio" type="tipo_servicio" class="form-control @error('tipo_servicio') is-invalid @enderror" name="tipo_servicio" value="{{ old('tipo_servicio') }}"  autofocus>
            <option value= ""> seleccione el tipo de servicio (*)</option>
            @foreach ($tipo_servicios as $tipo_servicio)
                <option value = "{{message}}">{{$tipo_servicio->get('id')}} </option>
            @endforeach
            </select>
            @error('tipo de servicios')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">

            <input id="tipo" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

    </div>
</form>