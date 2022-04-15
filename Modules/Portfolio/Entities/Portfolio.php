<?php

namespace Modules\Portfolio\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Category\Entities\Category;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['title','image','category_id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);

    }
}
