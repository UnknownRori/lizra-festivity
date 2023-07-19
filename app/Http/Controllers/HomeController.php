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
            'news' => News::take(3)->get(['slug', 'thumbnail', 'title', 'body', 'created_at', 'updated_at']),
        ]);
    }
}
