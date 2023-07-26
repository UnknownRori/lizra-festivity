<?php

namespace App\Http\Controllers;

use App\Enums\PublishStatus;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return inertia('HomePage', [
            'news' => News::select([
                'slug', 'title', 'description', 'thumbnail_url',
                'body', 'created_at', 'updated_at'
            ])->orderBy('created_at', 'desc')->where('publish_status', PublishStatus::Published->value)->take(3)->get(),
        ]);
    }
}
