import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

//
export default defineConfig({
    plugins: [
        laravel({
            copy: {
                // افزودن مسیر مربوط به تصاویر به این قسمت
                'resources/images/**/*': 'public/storage/images',
            },
            input: [
                'resources/css/app.css',
                'resources/css/vendor/photoswipe.min.css',
                'resources/js/main.js',
                'resources/js/app.js',
                'resources/js/vendor/jquery.elevatezoom.js',
                'resources/js/vendor/photoswipe.min.js',
                'resources/js/ajax_sendmail.js',
            ],
            refresh: true,

        }),

    ],
    // optimizeDeps: {
    //     include: ['jquery'],
    // },
});

