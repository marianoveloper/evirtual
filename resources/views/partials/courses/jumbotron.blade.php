<div class="row mb-4">
    <div class="col-md-12">
        <div class="card" style="background-image: url('{{ url('/images/jumbotron2.png') }}');">
            <div class="text-white text-center d-flex align-items-center py-5 px-4 my-5">
                <div class="col-5">
                    <img class="img-fluid" src="{{asset($course->pathAttachment2()) }}" />
                </div>

                <div class="col-5 text-left">
                    <h1>{{ __("Curso") }}: {{ $course->name }}</h1>
                    <h4>{{ __("Profesor") }}: {{ $course->teacher->user->slug }}</h4>
                    <h5>{{ __("Categoría") }}: {{ $course->category->name }}</h5>
                    <h5>{{ __("Fecha de inicio") }}: {{ "Acceso inmediato" }}</h5>
                    <h5>{{ __("Costo del Curso") }}: {{"$". $course->costo }}</h5>
                    <h6>{{ __("Estudiantes inscritos") }}: {{ $course->students_count }}</h6>
                   <!-- <h6>{{ __("Número de valoraciones") }}: {{ $course->reviews_count }}</h6> !-->
                    @include('partials.courses.rating', ['rating' => $course->custom_rating])
                </div>

                @include('partials.courses.form_button')
            </div>
        </div>
    </div>
</div>