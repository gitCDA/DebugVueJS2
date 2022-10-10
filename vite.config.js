import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { vue } from 'laravel-mix';

export default defineConfig({
    plugins: [
        vue(),
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
    ],
});
