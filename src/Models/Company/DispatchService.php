<?php

namespace DeepakDums1998\IdQueuePackagist\Models\Company;

use DeepakDums1998\IdQueuePackagist\Traits\CompanyDbConnection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DispatchService extends Model
{
    use CompanyDbConnection;
    use HasUuids;

    public $incrementing = false;

    public $timestamps = false;

    protected $table = 'Dispatch_Service';

    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID',
        'Company_Dept_ID',
        'Service_GUID',
        'Service_Name',
        'Service_Abrv',
        'cost_val',
        'time_interval',
        'Service_Qty',
    ];

    protected $casts = [
        'Service_GUID' => 'uuid',
        'cost_val' => 'decimal:2',
    ];

    /**
     * Define the relationship to ActiveQueue.
     */
    public function activeQueue(): BelongsTo
    {
        return $this->belongsTo(ActiveQueue::class, 'App_Service');
    }
}
