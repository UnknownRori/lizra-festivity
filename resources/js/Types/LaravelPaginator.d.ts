type PaginatorLinks = {
    active: boolean,
    label: string,
    url?: string
}

type LaravelPaginator<T> = {
    from: number,
    current_page: number,
    data: Array<T>,
    links: Array<PaginatorLinks>
    first_page_url: string,
    last_page: number,
    last_page_url: string,
    prev_page_url: string,
    path: string,
    per_page: number,
    to: number,
    total: number,
};

export { LaravelPaginator, PaginatorLinks };
