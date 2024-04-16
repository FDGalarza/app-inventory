import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
//para configurar boostrap
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
            ],
            refresh: true,
        }),
    ],
    //para configurar boostrap
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, ' node_modules/bootstrap'),
        }
    },
});
