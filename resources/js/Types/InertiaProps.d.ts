import type { Page, PageProps, Errors, ErrorBag } from '@inertiajs/inertia';

/**
 * This is black magic
 */
declare module '@inertiajs/core' {
    interface PageProps extends Page<PageProps> {
        errors: Errors & ErrorBag;
        auth?: {
            id: string,
            name: string;
        };
        flash: {
            error?: {
                body: string,
            },
            success?: {
                body: string,
            },
        }
    }
}
