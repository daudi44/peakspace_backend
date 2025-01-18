import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import { resolve } from 'path';

export default defineConfig({
    base: '/build/',
    build: {
        manifest: true,
        outDir: resolve(__dirname, 'public/build'),
        rollupOptions: {
            input: 'resources/js/app.js',
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
    ],
    server: {
        host: 'localhost',
        port: 5173,
    },
    resolve: {
        alias: {
            '@': resolve('./resources/js'),
        },
    },
});
