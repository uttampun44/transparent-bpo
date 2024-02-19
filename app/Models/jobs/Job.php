<?php

namespace App\Models\jobs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";

    protected $fillable = ['company_name', 'company_image', 'job_post', 'job_type', 'career_level', 'job_deadline', 'job_description'];


    use HasFactory;
}
