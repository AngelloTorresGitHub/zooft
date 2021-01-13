@extends('layouts.app')

@section('content')

<div class="text-center">
    <main class="form-signin">
        <img class="mb-4" src="{{ asset('storage/logoZOOFT.svg') }}" alt="Logo Zooft" title="Logo Zooft"
            width="150">                
        <h1>Iniciar sesión</h1>
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
        
            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" required autofocus>
        
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>
        
            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
        
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif        
            </div>
            
            <div class="form-group">
                <button type="submit" class="w-100 btn btn-lg btn-primary">Iniciar sesión</button>
                <p class="mt-5 mb-3 text-muted">COPYRIGHT&copy; 2020</p>
            </div>                        
        </form>        
    </main>
</div>

@endsection
