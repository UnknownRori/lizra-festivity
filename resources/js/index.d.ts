import { Route } from 'ziggy-js'
declare module '@vue/runtime-core' {
    interface ComponentInternalInstance {
        route: Route,
    }
}
