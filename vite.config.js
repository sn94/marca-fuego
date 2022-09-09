import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            
            'resources/css/app.css',
            'resources/js/app.js',

            'resources/css/animate.css',

            'resources/css/dropzone.css',
            'resources/js/dropzone.js',

            'resources/js/confetti.js',


 
        ]),
    ],
});
