@extends('layouts.app')

@section('jumbotron')
    @include('partials.jumbotron', ['title' => 'Configurar tu perfil', 'icon' => 'user-circle'])
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endpush

@section('content')
    <div class="pl-5 pr-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __("Actualiza tus datos") }}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update') }}" novalidate>
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">
                                    {{ __("Correo electrónico") }}
                                </label>
                                <div class="col-md-6">
                                    <input
                                        id="email"
                                        type="email"
                                        readonly
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email"
                                        value="{{ old('email') ?: $user->email }}"
                                        required
                                        autofocus
                                    />

                                    @if($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                    for="password"
                                    class="col-md-4 col-form-label text-md-right"
                                >
                                    {{ __("Contraseña") }}
                                </label>

                                <div class="col-md-6">
                                    <input
                                        id="password"
                                        type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password"
                                        required
                                    />

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                    for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right"
                                >
                                    {{ __("Confirma la contraseña") }}
                                </label>

                                <div class="col-md-6">
                                    <input
                                        id="password-confirm"
                                        type="password"
                                        class="form-control"
                                        name="password_confirmation"
                                        required
                                    />
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __("Actualizar datos") }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                
    
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        let dt;
        let modal = jQuery("#appModal");
        jQuery(document).ready(function() {
            dt = jQuery("#students-table").DataTable({
                pageLength: 5,
                lengthMenu: [ 5, 10, 25, 50, 75, 100 ],
                processing: true,
                serverSide: true,
                ajax: '{{ route('teacher.students') }}',
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
                columns: [
                    {data: 'user.id', visible: false},
                    {data: 'user.name'},
                    {data: 'user.email'},
                    {data: 'courses_formatted'},
                    {data: 'actions'}
                ]
            });

            jQuery(document).on("click", '.btnEmail', function (e) {
                e.preventDefault();
                const id = jQuery(this).data('id');
                modal.find('.modal-title').text('{{ __("Enviar mensaje") }}');
                modal.find('#modalAction').text('{{ __("Enviar mensaje") }}').show();
                let $form = $("<form id='studentMessage'></form>");
                $form.append(`<input type="hidden" name="user_id" value="${id}" />`);
                $form.append(`<textarea class="form-control" name="message"></textarea>`);
                modal.find('.modal-body').html($form);
                modal.modal();
            });

            jQuery(document).on("click", "#modalAction", function (e) {
                jQuery.ajax({
                    url: '{{ route('teacher.send_message_to_student') }}',
                    type: 'POST',
                    headers: {
                        'x-csrf-token': $("meta[name=csrf-token]").attr('content')
                    },
                    data: {
                        info: $("#studentMessage").serialize()
                    },
                    success: (res) => {
                        if(res.res) {
                            modal.find('#modalAction').hide();
                            modal.find('.modal-body').html('<div class="alert alert-success">{{ __("Mensaje enviado correctamente") }}</div>');
                        } else {
                            modal.find('.modal-body').html('<div class="alert alert-danger">{{ __("Ha ocurrido un error enviando el correo") }}</div>');
                        }
                    }
                })
            })
        })
    </script>
@endpush