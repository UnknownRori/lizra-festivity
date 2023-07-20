import route from 'ziggy-js'
import type moment from 'moment';

declare module '@vue/runtime-core' {
    interface ComponentCustomProperties {
        $moment: typeof moment
        route: typeof route
    }
}
