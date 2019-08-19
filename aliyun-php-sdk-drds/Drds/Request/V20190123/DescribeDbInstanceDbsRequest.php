<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDbInstanceDbs
 *
 * @method string getPassword()
 * @method string getAccountName()
 * @method string getDbInstanceId()
 * @method string getDbInstType()
 * @method string getDrdsInstanceId()
 */
class DescribeDbInstanceDbsRequest extends \RpcAcsRequest
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
            'DescribeDbInstanceDbs',
            'drds'
        );
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->requestParameters['Password'] = $password;
        $this->queryParameters['Password'] = $password;

        return $this;
    }

    /**
     * @param string $accountName
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->requestParameters['AccountName'] = $accountName;
        $this->queryParameters['AccountName'] = $accountName;

        return $this;
    }

    /**
     * @param string $dbInstanceId
     *
     * @return $this
     */
    public function setDbInstanceId($dbInstanceId)
    {
        $this->requestParameters['DbInstanceId'] = $dbInstanceId;
        $this->queryParameters['DbInstanceId'] = $dbInstanceId;

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
