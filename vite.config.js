import { fileURLToPath, URL } from 'url';

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.ts'],
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        alias: {
            ziggy: 'vendor/tightenco/ziggy/dist/vue.es.js',
            '@': fileURLToPath(new URL('./resources/js', import.meta.url)),
        },
        name: name => {
            const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
            return pages[`./Pages/${name}.vue`]
        },
    }

});
