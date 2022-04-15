<?php

namespace Modules\Permission\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Role\Entities\Role;
use Modules\User\Entities\User;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = ['name','label'];

    public function roles()
    {
        return $this->belongsToMany(Role::class);

    }

    public function users()
    {
        return $this->belongsToMany(User::class);

    }
}
