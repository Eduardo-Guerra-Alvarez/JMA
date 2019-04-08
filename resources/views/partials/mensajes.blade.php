@if(Session::has('alerta'))
    <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        {{ Session::get('alerta') }}
    </div>
@endif

@if(Session::has('agregado'))
    <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        {{ Session::get('agregado') }}
    </div>
@endif
