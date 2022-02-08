require('./bootstrap');
import Alpine from 'alpinejs'
// import Toolkit from '@alpine-collective/toolkit'
import Fullpage from 'fullpage.js';

window.Fullpage = Fullpage;
window.Alpine = Alpine
// Alpine.plugin(Toolkit)

Alpine.start()
