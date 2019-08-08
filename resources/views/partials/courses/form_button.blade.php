<div class="col-2">
  @foreach($course->linkscript as $item)
  @endforeach()
<?php
//dd($item->link)?>

<!--<a target="_blank" class="btn btn-subscribe btn-bottom btn-block" href="{{ $item->link  }}">
  <i class="fa fa-bolt"></i> {{ __("Inscribirme") }}
</a>
</div>!-->
<a target="_blank" href="{{ $item->link  }}" class="btn btn-warning btn-lg" role="button"><i class="fa fa-pencil" aria-hidden="true"></i>{{ __(" Inscribirme ") }}</a>