<?php

namespace DeepakDums1998\IdQueuePackagist\Models\Company;

use DeepakDums1998\IdQueuePackagist\Traits\CompanyDbConnection;
use Illuminate\Database\Eloquent\Model;

class SentRequestNotification extends Model
{
    use CompanyDbConnection;

    // Table associated with the model
    public $incrementing = false;

    // Disable auto-incrementing (assuming ID is not auto-incrementing)
    public $timestamps = false;

    // Disable timestamps as the table does not have created_at and updated_at columns
    protected $table = 'Sent_Request_Notifications';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'User_ID',
        'Request_ID',
        'FCMToken_ID',
        'Sent_At',
    ];
}
