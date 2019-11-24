const {
    mix
} = require("laravel-mix");
require("laravel-mix-merge-manifest");

if (mix.inProduction()) {
    var publicPath = "publishable/assets";
} else {
    var publicPath = "../../../public/vendor/cnetic/przelewy24/assets";
}

mix.setPublicPath(publicPath).mergeManifest();

mix.disableNotifications();

mix.js(
        [
            __dirname + "/src/Resources/assets/js/app.js",
        ],
        "js/przelewy24.js"
    )
    .sass(__dirname + "/src/Resources/assets/sass/app.scss", "css/przelewy24.css")
    .options({
        processCssUrls: false
    });

if (mix.inProduction()) {
    mix.version();
}
