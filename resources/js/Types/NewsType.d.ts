import { LaravelPaginator } from "./LaravelPaginator";

type NewsType = {
    slug: string,
    thumbnail: string,
    title: string,
    body: string,
    description: string,
    created_at: string,
    updated_at: string,
};

type NewsPaginator = LaravelPaginator<NewsType>;

export { NewsPaginator };

export default News;
