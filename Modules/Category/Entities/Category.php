<?php

namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Article\Entities\Article;
use Modules\Portfolio\Entities\Portfolio;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title'
    ];

    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class);

    }

    public function articles()
    {
        return $this->belongsToMany(Article::class);

    }
}
