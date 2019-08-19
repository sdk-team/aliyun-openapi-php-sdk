<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpgradeDrdsInstance
 *
 * @method string getClientToken()
 * @method string getOrders()
 * @method string getDrdsInstanceId()
 */
class UpgradeDrdsInstanceRequest extends \RpcAcsRequest
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
            'UpgradeDrdsInstance',
            'drds'
        );
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $orders
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->requestParameters['Orders'] = $orders;
        $this->queryParameters['Orders'] = $orders;

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
