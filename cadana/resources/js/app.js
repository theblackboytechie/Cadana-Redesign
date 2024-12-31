import './bootstrap';

import Alpine from 'alpinejs';

import $ from 'jquery';
window.$ = window.jQuery = $;

window.Alpine = Alpine;

Alpine.start();

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js', { scope: '/' }).then(function (registration) {
        console.log(`SW registered successfully!`);
    }).catch(function (registrationError) {
        console.log(`SW registration failed`);
    });
}