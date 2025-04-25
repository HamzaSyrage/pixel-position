<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;
    protected $guarded = [];
    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tags::class);
    }
    public function tag(string $name)
    {
        $tag = Tags::firstOrCreate(["name" => $name]);
        $this->tags()->attach($tag);
    }
}
