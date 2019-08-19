<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDrdsDB
 *
 * @method string getDbName()
 * @method string getDrdsInstanceId()
 */
class DescribeDrdsDBRequest extends \RpcAcsRequest
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
            'DescribeDrdsDB',
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
