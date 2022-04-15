<?php

namespace Modules\Favorite\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'work',
        'time',
        'job_name',
        'description',
        'start_job',
        'icon'
    ];
}
