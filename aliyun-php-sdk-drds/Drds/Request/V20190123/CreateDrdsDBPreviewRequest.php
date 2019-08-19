<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDrdsDBPreview
 *
 * @method array getInstDbNames()
 * @method string getDbName()
 * @method string getAccountName()
 * @method string getOrderId()
 * @method array getRdsInstances()
 * @method string getType()
 * @method string getDbInstType()
 * @method string getDrdsInstanceId()
 * @method string getDbInstanceIsCreating()
 */
class CreateDrdsDBPreviewRequest extends \RpcAcsRequest
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
            'CreateDrdsDBPreview',
            'drds'
        );
    }

    /**
     * @param array $instDbName
     *
     * @return $this
     */
    public function setInstDbNames(array $instDbName)
    {
        $this->requestParameters['InstDbNames'] = $instDbName;
        foreach ($instDbName as $depth1 => $depth1Value) {
            foreach ($depth1Value['ShardDbName'] as $i => $iValue) {
                $this->queryParameters['InstDbName.' . ($depth1 + 1) . '.ShardDbName.' . ($i + 1)] = $iValue;
            }
            $this->queryParameters['InstDbName.' . ($depth1 + 1) . '.DbInstanceId'] = $depth1Value['DbInstanceId'];
        }

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
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->requestParameters['OrderId'] = $orderId;
        $this->queryParameters['OrderId'] = $orderId;

        return $this;
    }

    /**
     * @param array $rdsInstance
     *
     * @return $this
     */
    public function setRdsInstances(array $rdsInstance)
    {
        $this->requestParameters['RdsInstances'] = $rdsInstance;
        foreach ($rdsInstance as $i => $iValue) {
            $this->queryParameters['RdsInstance.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

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

    /**
     * @param string $dbInstanceIsCreating
     *
     * @return $this
     */
    public function setDbInstanceIsCreating($dbInstanceIsCreating)
    {
        $this->requestParameters['DbInstanceIsCreating'] = $dbInstanceIsCreating;
        $this->queryParameters['DbInstanceIsCreating'] = $dbInstanceIsCreating;

        return $this;
    }
}
