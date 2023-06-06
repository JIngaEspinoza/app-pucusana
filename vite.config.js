import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
            'resources/scss/user/main-user.scss',
            'resources/scss/transporte/vehiculo/main-vehiculo.scss',
            'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
