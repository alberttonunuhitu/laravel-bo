const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/* app */
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/app-pages.scss', 'public/css');

/* bootstrap */
mix.copy('node_modules/bootstrap/dist/js', 'public/plugins/bootstrap/js');

/* datatables.net */
mix.copy('node_modules/datatables.net/js', 'public/plugins/datatables');

/* datatables-bs4 */
mix.copy('node_modules/datatables.net-bs4/css', 'public/plugins/datatables-bs4/css')
    .copy('node_modules/datatables.net-bs4/js', 'public/plugins/datatables-bs4/js');

/* datatables-responsive */
mix.copy('node_modules/datatables.net-responsive-bs4/css', 'public/plugins/datatables-responsive/css')
    .copy('node_modules/datatables.net-responsive-bs4/js', 'public/plugins/datatables-responsive/js');

/* fontawesome-free */
mix.copy('node_modules/@fortawesome/fontawesome-free/css', 'public/plugins/fontawesome-free/css')
    .copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/plugins/fontawesome-free/webfonts');

/* jquery */
mix.copy('node_modules/jquery/dist', 'public/plugins/jquery');

/* moment */
mix.copy('node_modules/moment/min', 'public/plugins/moment')
    .copy('node_modules/moment/locale', 'public/plugins/moment/locale');

/* overlayScrollbars */
mix.copy('node_modules/overlayscrollbars/css', 'public/plugins/overlayScrollbars/css')
    .copy('node_modules/overlayscrollbars/js', 'public/plugins/overlayScrollbars/js');

/* popper */
mix.copy('node_modules/popper.js/dist', 'public/plugins/popper');

/* select2 */
mix.copy('node_modules/select2/dist', 'public/plugins/select2');

/* select2-bootstrap4-theme */
mix.copy('node_modules/@ttskch/select2-bootstrap4-theme/dist', 'public/plugins/select2-bootstrap4-theme');

/* tempusdominus-bootstrap-4 */
mix.copy('node_modules/tempusdominus-bootstrap-4/build/css', 'public/plugins/tempusdominus-bootstrap-4/css')
    .copy('node_modules/tempusdominus-bootstrap-4/build/js', 'public/plugins/tempusdominus-bootstrap-4/js');
