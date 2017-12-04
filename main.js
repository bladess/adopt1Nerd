// main.js 

var $ = require('jquery');
require('bootstrap-sass');
require('bootstrap-star-rating');
require('bootstrap-star-rating/css/star-rating.css');
require('bootstrap-star-rating/themes/krajee-svg/theme.css');

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});