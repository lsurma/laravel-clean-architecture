const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

// Application public path (target for our compiled assets)
mix.setPublicPath('../../../../../public').mergeManifest();

// WebUI assets
mix.js('js/app.js', 'js/app.js')
   .sass('style/main.scss', 'style/main.css');
   
// Versioning in production   
if (mix.inProduction()) {
    mix.version();
}
