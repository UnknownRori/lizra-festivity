<?php

namespace App\Http\Controllers;

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
                'slug', 'thumbnail', 'title', 'description',
                'body', 'created_at', 'updated_at'
            ])->take(3)->get(),
        ]);
    }
}
