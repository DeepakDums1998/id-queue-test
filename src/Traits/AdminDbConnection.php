<?php

namespace DeepakDums1998\IdQueuePackagist\Traits;

trait AdminDbConnection
{
    protected $connection;

    public function __construct()
    {
        $this->connection = config('idqueuepackagist.db_connection');
    }
}
