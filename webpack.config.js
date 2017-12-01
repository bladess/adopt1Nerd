var Encore = require('@symfony/webpack-encore');

Encore 
    .enableSassLoader(function(sassOptions){},{
        resolveUrlLoader: false
    })
    .setOutputPath('web/assets')
    .setPublicPath('/assets')
    .addStyleEntry('global', './assets/css/global.scss')
    .addEntry('app', './assets/js/app.js')
    .enabledSassLoader()
    .autoProvidejQuery()
    .enableReactPreset()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersoning()
;

var config = Encore.getWebpackConfig();
config.watchOptions = { poll: true, ignored: /node_modules/ };


module.exports = config;

