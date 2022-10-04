import { defineConfig } from 'vite';
import { viteStaticCopy } from 'vite-plugin-static-copy';

const config = {
    dragula: {
        build: {
            lib: {
                entry: './resources/js/main.js',
                fileName: 'laravel-dragula',
                name: 'laravel-dragula'
            },
            minify: true,
            outDir: './dist/dragula',
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
    },
    lifecycle: {
        build: {
            lib: {
                entry: './resources/js/lifecycle/main.js',
                fileName: 'lifecycle',
                name: 'lifecycle'
            },
            minify: true,
            outDir: './dist/lifecycle',
        },
    },
};

export default defineConfig(config[process.env.LIB]);
