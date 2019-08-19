<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RearrangeDbToInstance
 *
 * @method string getChooseSubDb()
 * @method array getInstanceLists()
 * @method string getDbName()
 * @method string getOrderId()
 * @method string getChooseRds()
 * @method string getDrdsInstanceId()
 */
class RearrangeDbToInstanceRequest extends \RpcAcsRequest
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
            'RearrangeDbToInstance',
            'drds'
        );
    }

    /**
     * @param string $chooseSubDb
     *
     * @return $this
     */
    public function setChooseSubDb($chooseSubDb)
    {
        $this->requestParameters['ChooseSubDb'] = $chooseSubDb;
        $this->queryParameters['ChooseSubDb'] = $chooseSubDb;

        return $this;
    }

    /**
     * @param array $instanceList
     *
     * @return $this
     */
    public function setInstanceLists(array $instanceList)
    {
        $this->requestParameters['InstanceLists'] = $instanceList;
        foreach ($instanceList as $i => $iValue) {
            $this->queryParameters['InstanceList.' . ($i + 1)] = $iValue;
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
     * @param string $chooseRds
     *
     * @return $this
     */
    public function setChooseRds($chooseRds)
    {
        $this->requestParameters['ChooseRds'] = $chooseRds;
        $this->queryParameters['ChooseRds'] = $chooseRds;

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
