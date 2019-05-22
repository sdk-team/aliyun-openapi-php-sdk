<?php

namespace Ecs\Request\V20160314;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateOrder
 *
 * @method string getCommodity()
 * @method string getResourceOwnerId()
 * @method string getAsyncPattern()
 * @method string getClientToken()
 * @method string getBusinessInfo()
 * @method string getFromApp()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getTenancy()
 * @method string getDedicatedHostId()
 * @method string getOwnerId()
 * @method string getChargeType()
 * @method string getOrderType()
 * @method string getAffinity()
 */
class CreateOrderRequest extends \RpcAcsRequest
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
            'Ecs',
            '2016-03-14',
            'CreateOrder'
        );
    }

    /**
     * @param string $commodity
     *
     * @return $this
     */
    public function setCommodity($commodity)
    {
        $this->requestParameters['Commodity'] = $commodity;
        $this->queryParameters['Commodity'] = $commodity;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $asyncPattern
     *
     * @return $this
     */
    public function setAsyncPattern($asyncPattern)
    {
        $this->requestParameters['AsyncPattern'] = $asyncPattern;
        $this->queryParameters['AsyncPattern'] = $asyncPattern;

        return $this;
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
     * @param string $businessInfo
     *
     * @return $this
     */
    public function setBusinessInfo($businessInfo)
    {
        $this->requestParameters['BusinessInfo'] = $businessInfo;
        $this->queryParameters['BusinessInfo'] = $businessInfo;

        return $this;
    }

    /**
     * @param string $fromApp
     *
     * @return $this
     */
    public function setFromApp($fromApp)
    {
        $this->requestParameters['FromApp'] = $fromApp;
        $this->queryParameters['FromApp'] = $fromApp;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $tenancy
     *
     * @return $this
     */
    public function setTenancy($tenancy)
    {
        $this->requestParameters['Tenancy'] = $tenancy;
        $this->queryParameters['Tenancy'] = $tenancy;

        return $this;
    }

    /**
     * @param string $dedicatedHostId
     *
     * @return $this
     */
    public function setDedicatedHostId($dedicatedHostId)
    {
        $this->requestParameters['DedicatedHostId'] = $dedicatedHostId;
        $this->queryParameters['DedicatedHostId'] = $dedicatedHostId;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $chargeType
     *
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        $this->requestParameters['ChargeType'] = $chargeType;
        $this->queryParameters['ChargeType'] = $chargeType;

        return $this;
    }

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        $this->requestParameters['OrderType'] = $orderType;
        $this->queryParameters['OrderType'] = $orderType;

        return $this;
    }

    /**
     * @param string $affinity
     *
     * @return $this
     */
    public function setAffinity($affinity)
    {
        $this->requestParameters['Affinity'] = $affinity;
        $this->queryParameters['Affinity'] = $affinity;

        return $this;
    }
}
