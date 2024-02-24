import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

// Check for saved 'darkMode' in localStorage
let darkMode = localStorage.getItem('darkMode'); 
const themeToggle = document.getElementById('themeToggle');
const body = document.body;
const lightIcon = document.getElementById('lightIcon');
const darkIcon = document.getElementById('darkIcon');

// Enable Dark Mode
const enableDarkMode = () => {
  body.classList.add('dark-mode');
  lightIcon.style.display = 'none';
  darkIcon.style.display = '';
  localStorage.setItem('darkMode', 'enabled');
}

// Disable Dark Mode
const disableDarkMode = () => {
  body.classList.remove('dark-mode');
  lightIcon.style.display = '';
  darkIcon.style.display = 'none';
  localStorage.setItem('darkMode', 'disabled');
}

// If the user previously enabled darkMode
if (darkMode === 'enabled') {
  enableDarkMode();
}

// Listen for a click on the toggle
themeToggle.addEventListener('click', () => {
  darkMode = localStorage.getItem('darkMode'); 
  if (darkMode !== 'enabled') {
    enableDarkMode();
  } else {  
    disableDarkMode();
  }
});
