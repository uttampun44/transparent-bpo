<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobposts extends Model
{
    use HasFactory;
    protected $table = 'post_job';
    protected $fillable = ['job_title', 'organization', 'qualification', 'job_type', 'job_description', 'required_skill'];
}
