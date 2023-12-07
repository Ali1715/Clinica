import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/form.css',
                'resources/js/assistant.js',
                'resources/css/buttomassistant.css',
                'resources/css/home.css',
                'resources/calendar/fullcalendar/packages/core/main.css',
                'resources/calendar/fullcalendar/packages/daygrid/main.css',
                '/node_modules/@fullcalendar/**',
                'resources/calendar/css/bootstrap.min.css',
                'resources/calendar/css/style.css',
            ],
            refresh: true,
        }),
    ],
});
