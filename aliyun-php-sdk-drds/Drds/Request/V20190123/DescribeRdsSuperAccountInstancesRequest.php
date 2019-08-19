<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeRdsSuperAccountInstances
 *
 * @method array getRdsInstancess()
 * @method string getDbInstType()
 * @method string getDrdsInstanceId()
 */
class DescribeRdsSuperAccountInstancesRequest extends \RpcAcsRequest
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
            'DescribeRdsSuperAccountInstances',
            'drds'
        );
    }

    /**
     * @param array $rdsInstances
     *
     * @return $this
     */
    public function setRdsInstancess(array $rdsInstances)
    {
        $this->requestParameters['RdsInstancess'] = $rdsInstances;
        foreach ($rdsInstances as $i => $iValue) {
            $this->queryParameters['RdsInstances.' . ($i + 1)] = $iValue;
        }

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
