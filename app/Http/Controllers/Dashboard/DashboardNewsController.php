<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\PublishStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStoreRequest;
use App\Models\News;
use App\Services\ThumbnailService;
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
                'slug', 'thumbnail_url', 'title', 'description', 'publish_status',
                'body', 'created_at', 'updated_at'
            ])->orderBy('created_at', 'desc')->paginate(8),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Dashboard/NewsCreate', [
            'publish_status' => PublishStatus::toArray(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsStoreRequest $request, ThumbnailService $thumbnailService)
    {
        $validated = $request->validated();
        $validated['thumbnail'] = $thumbnailService->save($validated['thumbnail']);

        if ($validated['thumbnail'] == false) {
            session()->flash('error', [
                'body' => 'Failed to store the thumbnail',
            ]);

            return;
        }

        if (auth()->user()->news()->create($validated)) {
            return redirect()
                ->route('app.news.index')
                ->with('success', [
                    'body' => 'News created successfully'
                ]);
        }


        session()->flash('error', [
            'body' => 'Invalid input',
        ]);
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
