<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeShardTaskInfo
 *
 * @method string getDbName()
 * @method string getSourceTableName()
 * @method string getTargetTableName()
 * @method string getDrdsInstanceId()
 */
class DescribeShardTaskInfoRequest extends \RpcAcsRequest
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
            'DescribeShardTaskInfo',
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
