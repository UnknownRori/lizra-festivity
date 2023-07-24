import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { ZiggyVue } from 'ziggy';
import { Ziggy } from './ziggy';
import Moment from './Plugins/Moment';

import '../css/app.css';
import '../css/scroll.css';
import './bootstrap';

createInertiaApp({
    progress: {
        delay: 100,
        includeCSS: true,
        showSpinner: true,
        color: 'red'
    },
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(Moment)
            .mount(el);
    },
})
