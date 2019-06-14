<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of StopPurchasedApi
 *
 * @method string getPurchaseProduct()
 * @method string getChannel()
 * @method string getPurchaseVersion()
 * @method string getPurchaseApiName()
 */
class StopPurchasedApiRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/Api/StopPurchasedApi';

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
            'Acs',
            '2015-01-01',
            'StopPurchasedApi',
            'dsafsd'
        );
    }

    /**
     * @param string $purchaseProduct
     *
     * @return $this
     */
    public function setPurchaseProduct($purchaseProduct)
    {
        $this->requestParameters['PurchaseProduct'] = $purchaseProduct;
        $this->queryParameters['PurchaseProduct'] = $purchaseProduct;

        return $this;
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->requestParameters['Channel'] = $channel;
        $this->queryParameters['Channel'] = $channel;

        return $this;
    }

    /**
     * @param string $purchaseVersion
     *
     * @return $this
     */
    public function setPurchaseVersion($purchaseVersion)
    {
        $this->requestParameters['PurchaseVersion'] = $purchaseVersion;
        $this->queryParameters['PurchaseVersion'] = $purchaseVersion;

        return $this;
    }

    /**
     * @param string $purchaseApiName
     *
     * @return $this
     */
    public function setPurchaseApiName($purchaseApiName)
    {
        $this->requestParameters['PurchaseApiName'] = $purchaseApiName;
        $this->queryParameters['PurchaseApiName'] = $purchaseApiName;

        return $this;
    }
}
