<?php

namespace DeepakDums1998\IdQueuePackagist\Models\Company;

use DeepakDums1998\IdQueuePackagist\Traits\CompanyDbConnection;
use Illuminate\Database\Eloquent\Model;

class FCMToken extends Model
{
    use CompanyDbConnection;

    public $incrementing = false;

    public $timestamps = false;

    protected $table = 'FCM_Tokens';

    protected $primaryKey = 'GUID';

    protected $fillable = [
        'GUID',
        'token',
        'User_ID',
        'Access_Token_ID',
    ];

    protected $casts = [
        'GUID' => 'string',
        'token' => 'string',
        'User_ID' => 'string',
        'Access_Token_ID' => 'string', // Cast this to string if it's not nullable and not an integer
    ];

    // Add any relationships if needed
}
