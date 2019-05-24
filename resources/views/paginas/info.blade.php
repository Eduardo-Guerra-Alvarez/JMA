@extends('layouts.app')
@section('content')
    <div class="offset-5 mb-5">
        <h1 >Información</h1>     
    </div>
    <div class="container mb-5">
        <div class="card text-white text-center bg-dark">
          <div class="card-header"><h4>¿Quienes somos?</h4></div>
          <div class="card-body">
            <p class="card-text">Somos una empresa enfocada en construccion.</p>
            <p>Hemos construido Comercios como Soriana, Walmart, Oxxo entro otros.</p>
          </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="card-deck ">
          <div class="card text-center bg-dark text-white">
            <div class="card-header"><h4 class="card-title">Vision</h4></div>
            <div class="card-body">
              <p class="card-text">“Ser el más prestigioso motor de búsqueda y el más importante del mundo”.</p>
            </div>
          </div>
          <div class="card bg-dark text-center text-white">
            <div class="card-header"><h4 class="card-title">Mision</h4></div>
            <div class="card-body">
              <p class="card-text">“Organizar la información del mundo y lograr que sea útil y accesible para todo el mundo”.</p>
            </div>
          </div>
        </div>
    </div>
    <div class="container">
        <div class="card-deck">
          <div class="card">
            <div class="card-body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1569.9713564045787!2d-103.43725256949702!3d20.627136047935526!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1558711567552!5m2!1ses-419!2smx" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="card bg-dark text-white">
            <div class="card-body">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="text" class="form-control" name="correo"  placeholder="Correo Electronico">
                  </div>
                  <button class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </div>
    </div>
    <div class="social">
        <ul>
            <li><a href="http://www.facebook.com/falconmasters" target="_blank" class="icon-facebook"></a></li>
            <li><a href="http://www.pinterest.com/falconmasters" target="_blank" class="icon-whatsapp"></a></li>
            <li><a href="mailto:contacto@falconmasters.com" class="icon-mail"></a></li>
        </ul>
    </div> 
@endsection
