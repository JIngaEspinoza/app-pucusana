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
            'resources/scss/navegacion/main-navegacion.scss'
            ],
            refresh: true,
        }),
    ],
});
