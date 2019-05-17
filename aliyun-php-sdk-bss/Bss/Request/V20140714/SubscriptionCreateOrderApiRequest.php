<?php

namespace Bss\Request\V20140714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SubscriptionCreateOrderApi
 *
 * @method string getproductCode()
 * @method string getownerId()
 */
class SubscriptionCreateOrderApiRequest extends \RpcAcsRequest
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
            'Bss',
            '2014-07-14',
            'SubscriptionCreateOrderApi'
        );
    }

    /**
     * @param string $productCode
     *
     * @return $this
     */
    public function setproductCode($productCode)
    {
        $this->requestParameters['productCode'] = $productCode;
        $this->queryParameters['productCode'] = $productCode;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setownerId($ownerId)
    {
        $this->requestParameters['ownerId'] = $ownerId;
        $this->queryParameters['ownerId'] = $ownerId;

        return $this;
    }
}
