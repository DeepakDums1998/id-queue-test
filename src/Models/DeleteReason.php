<?php

namespace DeepakDums1998\IdQueuePackagist\Models;

use DeepakDums1998\IdQueuePackagist\Traits\CompanyDbConnection;
use Illuminate\Database\Eloquent\Model;

class DeleteReason extends Model
{
    use CompanyDbConnection;

    public $incrementing = false;

    public $timestamps = false;

    protected $table = 'Dispatch_Delete_Reason';

    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID',
        'Company_Dept_ID',
        'name',
    ];
}
