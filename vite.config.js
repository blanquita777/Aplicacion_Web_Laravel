import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/navbar.css',  // Tu archivo de estilos de navbar
                'resources/js/navbar.js',     // Tu archivo de scripts de navbar
                'node_modules/bootstrap/dist/css/bootstrap.min.css', // Agrega Bootstrap CSS
                'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', // Agrega Bootstrap JS
            ],
            refresh: true,
        }),
    ],
});
