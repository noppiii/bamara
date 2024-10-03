<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RolePermission extends Model
{
    protected $table = 'role_permissions';

    public $incrementing = false;
    protected $primaryKey = ['role_id', 'permission_id'];

    public $timestamps = false;

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class,'role_id');
    }

    public function permission(): BelongsTo
    {
        return $this->belongsTo(Permission::class, 'permission_id');
    }
}
