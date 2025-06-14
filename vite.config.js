import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fg from 'fast-glob';

export default defineConfig({
    server: {
        host: true,
        port: 5173,
    },
    plugins: [
        laravel({
            input: [
                ...fg.sync('resources/js/*.js'),
                ...fg.sync('resources/sass/*.scss'),
                ...fg.sync('resources/css/*.css'),
            ],
            refresh: true,
        }),
    ],
});
