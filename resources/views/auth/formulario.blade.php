@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('formulario') }}</div>

                <div class="card-body">
                    <form method="GET" action="{{ route('formulario') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('numero de casa') }}</label>

                            <div class="col-md-6">
                                <input id="numero_casa" type="text" class="form-control @error('numero_casa') is-invalid @enderror" name="numero_casa" value="{{ old('numero_casa') }}" required autocomplete="numero" autofocus>

                                @error('numero_casa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="altura" class="col-md-4 col-form-label text-md-right">{{ __('altura de casa') }}</label>

                            <div class="col-md-6">
                                <input id="altura_casa" type="text" class="form-control @error('altura_casa') is-invalid @enderror" name="altura_casa" value="{{old ('altura_casa')}}" required autocomplete="numero" autofocus>

                                @error('altura_casa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="barrio" class="col-md-4 col-form-label text-md-right">{{ __('barrio') }}</label>

                            <div class="col-md-6">
                                <input id="barrio" type="text" class="form-control @error('barrio') is-invalid @enderror" name="barrio" value="{{old ('barrio')}}" required autocomplete="text" autofocus>

                                @error('altura_casa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('enviar') }}
                                </button>
                              </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
