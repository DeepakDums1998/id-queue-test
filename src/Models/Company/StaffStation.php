<?php

namespace DeepakDums1998\IdQueuePackagist\Models\Company;

use DeepakDums1998\IdQueuePackagist\Traits\CompanyDbConnection;
use Illuminate\Database\Eloquent\Model;

class StaffStation extends Model
{
    use CompanyDbConnection;

    public $timestamps = false;

    protected $table = 'Staff_Station';

    protected $fillable = [
        'Company_Dept_ID',
        'Staff_GUID',
        'App_Location_GUID',
        'App_Zone_GUID',
        'App_Building_GUID',
        'Station_Time',
        'stationed_status',
    ];

    // Specify the database connection if needed
    // Disabling timestamps if not present in the table
}
