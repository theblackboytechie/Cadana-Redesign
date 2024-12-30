import './bootstrap';

if('serviceWorker' in navigator){
    navigator.serviceWorker.register('Sw.js',  {scope: '/'}).then(function(registration){
        console.log(`Sw registered successfully`);
    }).catch(function(registrationError){
        console.log(`Sw registration failed`);
    });
}

import Alpine from 'alpinejs';

import $ from 'jquery';
window.$ = window.jQuery = $;

window.Alpine = Alpine;

Alpine.start();
