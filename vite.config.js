import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
            'resources/scss/user/main-user.scss',
            'resources/scss/transporte/vehiculo/main-vehiculo.scss',
            'resources/js/app.js',
            'resources/js/user/login.js',
            'resources/scss/modulos/main-panel.scss',
            'resources/scss/navegacion/main-navegacion.scss',
            'resources/js/navegacion/navegacion.js',
            'resources/js/transporte/nav_transporte.js',
            'resources/scss/templates/main-templates.scss',
            'resources/scss/transporte/pagos/main-pagos.scss',
            'resources/scss/transporte/reportes/main-reportes.scss',
            'resources/scss/transporte/papeletas/main-papeletas.scss',
            'resources/scss/transporte/vehiculos/main-vehiculos.scss',
            'resources/js/transporte/vehiculo.js',
            'resources/scss/prueba/prueba.scss'
            ],
            refresh: true,
        }),
    ],
});
