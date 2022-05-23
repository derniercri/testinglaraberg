require('./bootstrap');
require('./gutenberg');
require('./deleteModal');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.getElementById('nav-toggle').onclick = function(){
    document.getElementById("nav-content-left").classList.toggle("hidden");
    document.getElementById("nav-content-right").classList.toggle("hidden");
}
