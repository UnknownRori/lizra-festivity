import { LaravelPaginator } from "./LaravelPaginator";

type PublishStatus = 'Draft' | 'Published';

type NewsType = {
    slug: string,
    thumbnail: string,
    title: string,
    body: string,
    description: string,
    publish_status?: PublishStatus,
    created_at: string,
    updated_at: string,
};

type NewsPaginator = LaravelPaginator<NewsType>;

export { NewsPaginator, PublishStatus };

export default News;
