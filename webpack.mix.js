let mix = require('laravel-mix');

mix.styles([
    'node_modules/gentelella/build/css/custom.min.css'
], 'assets/gentelella/css/gentelella.css');

mix.scripts([
    'node_modules/gentelella/build/js/custom.min.js'
], 'assets/gentelella/js/gentelella.js');

mix.copy('node_modules/gentelella/vendors/', 'assets/gentelella/vendors');
mix.copy('node_modules/gentelella/production/images/', 'assets/gentelella/images');