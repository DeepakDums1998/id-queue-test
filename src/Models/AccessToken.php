<?php

namespace DeepakDums1998\IdQueuePackagist\Models;

use DeepakDums1998\IdQueuePackagist\Traits\CompanyDbConnection;
use Illuminate\Database\Eloquent\Model;

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
}
