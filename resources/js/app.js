
require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';
Vue.use(Buefy);

// Vue.Component('example', require('/components/Example.vue'));
var app = new vue({
    el: '#app',
    data: {}
})

$(document).ready(function(){
$('button.dropdown').hover(function(e){
    $(this).toggleClass('is-open');
});
});
