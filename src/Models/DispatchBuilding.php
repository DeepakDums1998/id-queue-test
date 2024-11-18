<?php

namespace DeepakDums1998\IdQueuePackagist\Models;

use DeepakDums1998\IdQueuePackagist\Traits\CompanyDbConnection;
use Illuminate\Database\Eloquent\Model;

class DispatchBuilding extends Model
{
    use CompanyDbConnection;

    public $timestamps = false;

    public $incrementing = false;

    protected $table = 'Dispatch_Building';

    protected $primaryKey = 'Building_GUID';

    protected $keyType = 'string';

    protected $fillable = [
        'Building_GUID',
        'name',
        'Company_Dept_ID',
        'Ext_Queue_Url',
        'Ext_Queue_Active',
        'Building_Enabled',
    ];

    // Define relationship with StaffStation
    public function staffStation()
    {
        return $this->hasOne(StaffStation::class, 'Building_GUID', 'Building_GUID');
    }
}
