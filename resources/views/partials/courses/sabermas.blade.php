<!--<div class="col-12 pt-0 mt-0">
    <h2 class="text-muted">{{ __("Saber mas...") }}</h2>
    <hr />
</div>

<div class="alert alert-dark">
    <a target="_blank"  href="{{  $course->pdf  }}">
        <i class="fa fa-bolt"></i> {{ __("Saber mas") }}
      </a>
</div>!-->



<a target="_blank" href="{{ $course->pdf  }}" class="btn btn-outline-warning btn-sm" role="button">Saber más</a>
<button  class="btn btn-outline-warning btn-sm" data-toggle="popover"
title="Pago en cuotas" data-content="cuotas .......... "> 
Formas de Pago 
</button>  