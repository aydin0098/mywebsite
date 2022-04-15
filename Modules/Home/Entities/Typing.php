<?php

namespace Modules\Home\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typing extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
}
