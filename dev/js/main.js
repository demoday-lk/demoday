// import some js
import './module';
import VueComponents from './vue';

// import some scss
import './../scss/main.scss';

document.addEventListener("DOMContentLoaded", ()=> {
    const vue = new VueComponents();
    vue.init();
});