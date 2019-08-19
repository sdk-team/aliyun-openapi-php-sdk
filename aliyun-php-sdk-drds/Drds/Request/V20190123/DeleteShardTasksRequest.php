<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteShardTasks
 *
 * @method string getDbName()
 * @method array getTableNames()
 * @method string getDrdsInstanceId()
 */
class DeleteShardTasksRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Drds',
            '2019-01-23',
            'DeleteShardTasks',
            'drds'
        );
    }

    /**
     * @param string $dbName
     *
     * @return $this
     */
    public function setDbName($dbName)
    {
        $this->requestParameters['DbName'] = $dbName;
        $this->queryParameters['DbName'] = $dbName;

        return $this;
    }

    /**
     * @param array $tableName
     *
     * @return $this
     */
    public function setTableNames(array $tableName)
    {
        $this->requestParameters['TableNames'] = $tableName;
        foreach ($tableName as $depth1 => $depth1Value) {
            $this->queryParameters['TableName.' . ($depth1 + 1) . '.SourceTableName'] = $depth1Value['SourceTableName'];
            $this->queryParameters['TableName.' . ($depth1 + 1) . '.TargetTableName'] = $depth1Value['TargetTableName'];
        }

        return $this;
    }

    /**
     * @param string $drdsInstanceId
     *
     * @return $this
     */
    public function setDrdsInstanceId($drdsInstanceId)
    {
        $this->requestParameters['DrdsInstanceId'] = $drdsInstanceId;
        $this->queryParameters['DrdsInstanceId'] = $drdsInstanceId;

        return $this;
    }
}
