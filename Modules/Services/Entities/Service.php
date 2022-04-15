<?php

namespace Modules\Services\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'headline',
        'icon',
        'title',
        'description',
        'section_color',
        'card_color',
        'color_hover',
    ];
}
