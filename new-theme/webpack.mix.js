const mix = require('laravel-mix');


mix
    .sass('assets/scss/app.scss', 'assets/css')
    .options({
        processCssUrls: false,
        postCss: [
            require('autoprefixer')({
                overrideBrowserslist: ['last 2 versions'],
                cascade: false
            })
        ]
    })
    .sourceMaps(true, 'source-map');

