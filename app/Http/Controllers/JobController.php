<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tags;
use Illuminate\Support\Facades\Auth;
use Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()
            ->with(['tags', 'employer']) // Eager load relationships
            ->get()
            ->groupBy('featured');

        return view("job.index", [
            "recentJobs" => $jobs->get(0, collect()), // Default to empty collection
            "featuredJobs" => $jobs->get(1, collect()),
            "tags" => Tags::withCount('jobs')->get() // Optional: eager load tag relationships
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreJobRequest $request)
    {
        // Create the job with validated data (including featured flag)
        $job = Auth::user()->employer->jobs()->create($request->validated());

        // Attach tags from the processed array
        if (!empty($tags = $request->validated('tags'))) {
            foreach ($tags as $tag) {
                $job->tag($tag);
            }
        }

        return redirect()->route('index')
            ->with('success', 'Job posted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        dd(Job::find($job->id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        dd("1111111");
        $job->update($request->validated());
        dd("goooooo");
        // Sync tags if provided
        if ($request->has('tags')) {
            $job->tags()
                ->sync(collect($request->tags)
                    ->map(fn($tag) => Tags::firstOrCreate(['name' => $tag])->id));
        }

        return redirect()->route('jobs.show', $job)
            ->with('success', 'Job updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
