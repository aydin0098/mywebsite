<?php

namespace Modules\Article\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Category\Entities\Category;
use Modules\User\Entities\User;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'user_id',
        'keywords',
        'tags',
        'status'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);

    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');

    }
}
