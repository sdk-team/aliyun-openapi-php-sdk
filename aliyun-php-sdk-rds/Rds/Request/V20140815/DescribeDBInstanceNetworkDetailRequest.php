<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDBInstanceNetworkDetail
 *
 * @method string getStartPoint()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getEndPoint()
 * @method string getDBInstanceId()
 */
class DescribeDBInstanceNetworkDetailRequest extends \RpcAcsRequest
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
            'Rds',
            '2014-08-15',
            'DescribeDBInstanceNetworkDetail',
            'rds'
        );
    }

    /**
     * @param string $startPoint
     *
     * @return $this
     */
    public function setStartPoint($startPoint)
    {
        $this->requestParameters['StartPoint'] = $startPoint;
        $this->queryParameters['StartPoint'] = $startPoint;

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
     * @param string $endPoint
     *
     * @return $this
     */
    public function setEndPoint($endPoint)
    {
        $this->requestParameters['EndPoint'] = $endPoint;
        $this->queryParameters['EndPoint'] = $endPoint;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

        return $this;
    }
}
