<a class="tarjeta" style="background-image: url({{$imagen}});" href="{{ route('vehiculoConsulta') }}">
    <div class="tarjeta__img"></div>
    <div class="tarjeta__superponer">
      <div class="tarjeta_body">
          <div class="tarjeta_header">

            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
            <div class="tarjeta_header_icono" >
              <div class="img" style="background-image: url({{$icono}});"></div>
            </div>

            <div class="tarjeta_header_separador"></div>
            <div class="tarjeta_header_titulo">
              {!!$title!!}
            </div>
          </div>
          <div class="tarjeta_descripcion">

            {!!$descripcion!!}
          </div>




      </div>
    </div>


</a>
