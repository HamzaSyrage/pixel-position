<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $jobs = Job::latest()
            ->with(['tags', 'employer'])
            ->where("name", "LIKE", "%" . $request->search . "%")->get();
        return view('job.show', ['jobs' => $jobs]);
    }
}
