<?php

namespace Modules\Role\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Permission\Entities\Permission;
use Modules\User\Entities\User;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name','label'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);

    }

    public function users()
    {
        return $this->belongsToMany(User::class);

    }
}
