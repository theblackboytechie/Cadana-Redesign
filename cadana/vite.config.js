import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/styles.css',
                'resources/js/app.js',
                'resources/js/bundle.js',
                'resources/js/accountsupdate.js',
                'resources/js/upon_pageload.js',
                'resources/js/locations_database.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            // jquery: 'jquery/dist/jquery.min.js',
            $: 'jquery',
        },
    },
});
