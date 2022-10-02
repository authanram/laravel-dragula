import { defineConfig } from 'vite';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    build: {
        lib: {
            entry: './resources/js/main.js',
            fileName: 'laravel-dragula',
            name: 'laravel-dragula'
        },
        minify: true,
        outDir: './dist/',
    },
    plugins: [
        viteStaticCopy({
            targets: [
                {
                    src: './node_modules/dragula/dist/*',
                    dest: 'vendor/dragula-3.7.3'
                }
            ]
        })
    ],
});
