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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .scripts([
    'public/assets/js/jquery.min.js',
    'public/plugins/datatable/jquery.dataTables.min.js',
    'public/plugins/alertify/alertify.min.js',
    'public/plugins/select2/select2.min.js',
    'public/admin/assets/plugins/slimscroll/jquery.slimscroll.min.js',
    'public/admin/assets/plugins/raphael/raphael.min.js',
    'public/admin/assets/plugins/morris/morris.min.js',
    'public/admin/assets/js/chart.morris.js',
    'public/admin/assets/js/script.js',
    'public/admin/assets/js/custom.js',
    'public/admin/assets/js/popper.min.js',
    'public/assets/plugins/theia-sticky-sidebar/ResizeSensor.js',
    'public/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js',
    'public/assets/plugins/select2/js/select2.min.js',
    'public/assets/js/script.js',
], 'public/js/vendor.js')
    .styles([
        'public/plugins/datatable/jquery.dataTables.min.css',
        'public/plugins/alertify/alertify.min.css',
        'public/plugins/alertify/default.min.css',
        'public/plugins/select2/select2.min.css',
        'public/admin/assets/css/font-awesome.min.css',
        'public/admin/assets/css/feathericon.min.css',
        'public/admin/assets/plugins/morris/morris.css',
        'public/admin/assets/css/style.css',
        'public/assets/css/style.css',
        'public/assets/plugins/select2/css/select2.min.css',
        'public/admin/assets/plugins/datatables/datatables.min.css',
        'public/css/custom.css'
    ], 'public/css/vendor.css')
    .options({processCssUrls: false})
    .version();
