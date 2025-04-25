<?php
// tests/Unit/jobTest.php
use App\Models\Employer;
use App\Models\Job;
// use Illuminate\Foundation\Testing\RefreshDatabase;

// uses(RefreshDatabase::class); // Add this at the top

it('belongs to employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(['employer_id' => $employer->id]);
    expect($job->employer->id)->toBe($employer->id);
});
it('has tags', function () {
    $job = Job::factory()->create();
    $job->tag('hello world');
    expect($job->tags)->toHaveCount(1);
});
