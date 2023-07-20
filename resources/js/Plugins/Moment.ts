import type { App } from 'vue';

import moment from 'moment';

export default {
    install: (app: App) => {
        app.config.globalProperties.$moment = moment;
        app.provide('moment', moment);
    }
}
