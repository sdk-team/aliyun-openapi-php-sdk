<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateShardTask
 *
 * @method string getTaskType()
 * @method string getDbName()
 * @method string getSourceTableName()
 * @method string getTargetTableName()
 * @method string getDrdsInstanceId()
 */
class CreateShardTaskRequest extends \RpcAcsRequest
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
            'CreateShardTask',
            'drds'
        );
    }

    /**
     * @param string $taskType
     *
     * @return $this
     */
    public function setTaskType($taskType)
    {
        $this->requestParameters['TaskType'] = $taskType;
        $this->queryParameters['TaskType'] = $taskType;

        return $this;
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
     * @param string $sourceTableName
     *
     * @return $this
     */
    public function setSourceTableName($sourceTableName)
    {
        $this->requestParameters['SourceTableName'] = $sourceTableName;
        $this->queryParameters['SourceTableName'] = $sourceTableName;

        return $this;
    }

    /**
     * @param string $targetTableName
     *
     * @return $this
     */
    public function setTargetTableName($targetTableName)
    {
        $this->requestParameters['TargetTableName'] = $targetTableName;
        $this->queryParameters['TargetTableName'] = $targetTableName;

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
