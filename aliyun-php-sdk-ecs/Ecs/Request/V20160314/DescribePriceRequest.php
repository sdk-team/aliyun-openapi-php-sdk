<?php

namespace Ecs\Request\V20160314;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribePrice
 *
 * @method string getCommodity()
 * @method string getResourceOwnerId()
 * @method string getNeedSpotPrice()
 * @method string getNetworkType()
 * @method string getBusinessInfo()
 * @method string getFromApp()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getVerbose()
 * @method string getDefaultVpc()
 * @method string getOrderType()
 */
class DescribePriceRequest extends \RpcAcsRequest
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
            'DescribePrice'
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
     * @param string $needSpotPrice
     *
     * @return $this
     */
    public function setNeedSpotPrice($needSpotPrice)
    {
        $this->requestParameters['NeedSpotPrice'] = $needSpotPrice;
        $this->queryParameters['NeedSpotPrice'] = $needSpotPrice;

        return $this;
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $this->requestParameters['NetworkType'] = $networkType;
        $this->queryParameters['NetworkType'] = $networkType;

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
     * @param string $verbose
     *
     * @return $this
     */
    public function setVerbose($verbose)
    {
        $this->requestParameters['Verbose'] = $verbose;
        $this->queryParameters['Verbose'] = $verbose;

        return $this;
    }

    /**
     * @param string $defaultVpc
     *
     * @return $this
     */
    public function setDefaultVpc($defaultVpc)
    {
        $this->requestParameters['DefaultVpc'] = $defaultVpc;
        $this->queryParameters['DefaultVpc'] = $defaultVpc;

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
}
