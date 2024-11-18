<?php

namespace DeepakDums1998\IdQueuePackagist\Models;

use DeepakDums1998\IdQueuePackagist\Traits\CompanyDbConnection;
use Illuminate\Database\Eloquent\Model;

class DispatchZone extends Model
{
    use CompanyDbConnection;

    public $incrementing = false;

    public $timestamps = false;

    protected $table = 'Dispatch_Zone';

    protected $primaryKey = 'Zone_GUID';

    protected $fillable = [
        'Zone_GUID',
        'Company_Dept_ID',
        'Building_ID',
        'name',
        'Zone_Enabled',
    ];

    /**
     * Define the relationship to DispatchBuilding.
     */
    public function dispatchBuilding()
    {
        return $this->belongsTo(DispatchBuilding::class, 'Building_ID', 'Building_ID');
    }

    /**
     * Define the relationship to StaffStation.
     */
    public function staffStation()
    {
        return $this->hasOne(StaffStation::class, 'Zone_GUID', 'Zone_GUID');
    }
}
