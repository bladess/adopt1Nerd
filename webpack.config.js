var Encore = require('@symfony/webpack-encore');

var sass = require('node-sass');

sass.render({
    file: 'global.scss',
}, function(err, result) { /*...*/ });


Encore
    .setOutputPath('web/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/js/app.js')
    .addStyleEntry('global', './assets/css/global.scss')
    .enableSassLoader(function(sassOptions){
        // https://github.com/sass/node-sass#options,
        // options.includePaths = [...],
        resolveUrlLoader = false
    })
    .autoProvidejQuery()
    .enableSourceMaps(!Encore.isProduction())
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
;
module.exports = Encore.getWebpackConfig();