<?php

namespace App\Observers;

use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsObserver
{
    private function generateHiddenAttribute(News $news): void
    {
        $news->slug = str($news->title)->slug();

        $news->description = strip_tags(str($news->body)->substr(0, 255));

        if (!is_null($news->thumbnail)) {
            $news->thumbnail_url = Storage::url($news->thumbnail);
        }
    }

    /**
     * Handle the News "creating" event
     */
    public function creating(News $news): void
    {
        $this->generateHiddenAttribute($news);
    }

    /**
     * Handle the News "created" event.
     */
    public function created(News $news): void
    {
        //
    }

    /**
     * Handle the News "updating" event.
     */
    public function updating(News $news): void
    {
        $this->generateHiddenAttribute($news);
    }

    /**
     * Handle the News "updated" event.
     */
    public function updated(News $news): void
    {
        //
    }

    /**
     * Handle the News "deleted" event.
     */
    public function deleted(News $news): void
    {
        //
    }

    /**
     * Handle the News "restored" event.
     */
    public function restored(News $news): void
    {
        //
    }

    /**
     * Handle the News "force deleted" event.
     */
    public function forceDeleted(News $news): void
    {
        //
    }
}
