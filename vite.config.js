import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default defineConfig({
    plugins: [
        laravel({
            input: [

                // Resources paths
                'resources/css/app.css', 
                'resources/sass/app.scss', 
                'resources/js/app.js',

                // Resources assets js file paths
                'resources/assets/js/index',
                'resources/assets/js/switch',

            ],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
              {
                src: (['resources/assets/img/', 'resources/assets/libs/', 'resources/assets/iconfonts/',  'resources/assets/js/main.js',
                 'resources/assets/js/sticky.js',]),
                dest: 'assets/'
              }
            ]
        }),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
    build: {
        chunkSizeWarningLimit: 1600,
    },
});

