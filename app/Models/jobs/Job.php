<?php

namespace App\Models\jobs;

use App\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    protected $table = "jobs";

    protected $fillable = ['company_name', 'company_image', 'job_post', 'job_post_slug', 'job_responsibilities', 'requirement', 'salary', 'location', 'job_type', 'career_level', 'job_deadline', 'job_description'];

    public function jobCategory():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    use HasFactory;
}
