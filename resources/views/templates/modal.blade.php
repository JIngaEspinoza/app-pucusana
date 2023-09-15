
<div id="@yield('id-modal')" class="modal-template disable-modal">
    <div id="modal_content" class="content-modal">
        <div class="space-cerrar">
            <div id="btn-cerrar-modal" class="btn-cerrar">
                <div class="btn-img" style="background-image: url({{ asset('storage') . '/' . 'uploads/transporte/icono-cancelar.svg' }});"></div>
            </div>

        </div>
        @yield('content-modal')
    </div>
</div>
