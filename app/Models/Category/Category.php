<?php

namespace App\Models\Category;

use App\Models\jobs\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public $table = 'jobcategories';

    public $fillable = ['job_categories'];

    public function jobCategory():HasMany
    {
       return $this->hasMany(Job::class);
    }

    use HasFactory;
}
