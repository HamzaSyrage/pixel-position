<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tags;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Tags $tag)
    {
        return view('job.show', ['jobs' => $tag->jobs]);
    }
}
