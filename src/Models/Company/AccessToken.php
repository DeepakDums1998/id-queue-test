<?php

namespace DeepakDums1998\IdQueuePackagist\Models\Company;

use DeepakDums1998\IdQueuePackagist\Traits\CompanyDbConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccessToken extends Model
{
    use CompanyDbConnection;

    public $incrementing = false;

    public $timestamps = false;

    protected $table = 'Access_Token';

    protected $fillable = [
        'ID',
        'User_ID',
        'Created_At',
    ];

    protected $casts = [
        'Created_At' => 'datetime',
    ];

    /**
     * Define a belongs-to relationship with the User model.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'User_ID', 'GUID');
    }
}
