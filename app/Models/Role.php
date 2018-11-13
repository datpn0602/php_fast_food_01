<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'id',
        'name',
        'permissions',
        'slug',
    ];
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function userRole()
    {
        return $this->hasMany(UserRole::class);
    }
}
