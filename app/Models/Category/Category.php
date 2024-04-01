<?php

namespace App\Models\Category;

use App\Models\jobs\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    public $table = 'jobcategories';

    public $fillable = ['job_categories'];

    public function jobCategory():HasOne
    {
       return $this->hasOne(Job::class);
    }

    use HasFactory;
}
