@extends('layouts.app')

@section('jumbotron')
    @include('partials.jumbotron', ['title' => 'Inscripción al Curso', 'icon' => 'list-ol'])
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulario de Inscripcion') }}</div>

                <div class="card-body">
                    <form method="POST" action="" novalidate>
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Curso') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Monto" class="col-md-4 col-form-label text-md-right">{{ __('Monto') }}</label>

                            <div class="col-md-6">
                                <input id="Monto" type="number"  name="password" required autocomplete="new-password">

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <img  src="https://imgmp.mlstatic.com/org-img/banners/ar/medios/575X40.jpg"  title="MercadoPago - Medios de pago" alt="MercadoPago - Medios de pago" width="575" height="40"/>
                            <a href="https://www.mercadopago.com.ar/cuotas" class="linkk" target="_blank"> Ver Promos</a>
                           
                        
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=200778119-d05cc470-4818-4803-8622-3e3cc4f0c5f3" name="MP-payButton" class='blue-ar-l-sq-none'>Inscribirme</a>
                                <script type="text/javascript">
                                (function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
                                </script>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

