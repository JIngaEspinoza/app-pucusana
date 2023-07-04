<div id="lista" class="lista lista--desactive">
    <section class="section-lista">
        <div class="seccion-buscar-usuario">
            <div class="busqueda-usuario">
                <form id="form_search_usuario" class="" method="post">
                    @csrf
                    <div class="icon-busqueda"
                        style="background-image: url({{ asset('storage') . '/' . 'uploads/usuarios/lupa-plomo.svg' }});">
                    </div>
                    <input type="text" name="input-busqueda" id="input-busqueda-username" class="input-busqueda"
                        placeholder="Buscar..">
                </form>

            </div>
        </div>
        <div id="resultado-lista" class="resultado-lista">
            @foreach($users as $user)
                @include('usuarios.card',
                    ['imagen'=>asset('storage') . '/' . $user->imagen,
                     'username'=>$user->username,
                     'email'=>$user->email,
                     'celular'=>$user->celular,
                     'cargo'=>$user->cargo
                    ]
                    )
            @endforeach
        </div>
    </section>
</div>


