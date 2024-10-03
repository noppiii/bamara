<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OauthProvider extends Model
{
    use HasFactory;

    protected $table = 'oauth_providers';

    protected $fillable = [
        'name',
        'client_id',
        'client_secret',
        'redirect_url'
    ];

    public function socialAccounts(): HasMany
    {
        return $this->hasMany(SocialAccount::class, 'provider_id');
    }
}
