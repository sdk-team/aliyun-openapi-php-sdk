<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeRDSPerformance
 *
 * @method string getKeys()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getRdsInstanceId()
 * @method string getDbInstType()
 * @method string getDrdsInstanceId()
 */
class DescribeRDSPerformanceRequest extends \RpcAcsRequest
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
            'DescribeRDSPerformance',
            'drds'
        );
    }

    /**
     * @param string $keys
     *
     * @return $this
     */
    public function setKeys($keys)
    {
        $this->requestParameters['Keys'] = $keys;
        $this->queryParameters['Keys'] = $keys;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $rdsInstanceId
     *
     * @return $this
     */
    public function setRdsInstanceId($rdsInstanceId)
    {
        $this->requestParameters['RdsInstanceId'] = $rdsInstanceId;
        $this->queryParameters['RdsInstanceId'] = $rdsInstanceId;

        return $this;
    }

    /**
     * @param string $dbInstType
     *
     * @return $this
     */
    public function setDbInstType($dbInstType)
    {
        $this->requestParameters['DbInstType'] = $dbInstType;
        $this->queryParameters['DbInstType'] = $dbInstType;

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
