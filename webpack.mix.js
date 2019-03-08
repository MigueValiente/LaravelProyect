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
    .js('resources/js/validations/jobValidation.js', 'public/js/validations/')
    .sass('resources/sass/formularios/jobForm.scss', 'public/css/formularios/')
    .sass('resources/sass/jobs/indexJobs.scss', 'public/css/jobs/')
    .sass('resources/sass/mapStyle/map.scss', 'public/css/mapStyle/')
    .js('resources/js/mapScript/map.js', 'public/js/mapScript/')
    .js('resources/js/companies/createCompany.js', 'public/js/companies/')
    .js('resources/js/companies/deleteCompany.js', 'public/js/companies/')
    .js('resources/js/jobs/paginacion.js', 'public/js/jobs/')

if (mix.inProduction()) {
   mix.version();
}
