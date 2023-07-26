<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Inertia\Response;

class DashboardNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return inertia('Dashboard/NewsIndex', [
            'news' => News::select([
                'slug', 'thumbnail', 'title', 'description', 'publish_status',
                'body', 'created_at', 'updated_at'
            ])->paginate(8),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Dashboard/NewsCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        if ($news->delete())
            return redirect()->route('app.news.index')->with('success', [
                'body' => 'Successfully delete a news'
            ]);

        return redirect()->route('app.news.index')->with('error', [
            'body' => 'Failed to delete a news',
        ]);
    }
}
