<?php

namespace Bss\Request\V20140714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeCouponDetail
 *
 * @method string getCouponNumber()
 */
class DescribeCouponDetailRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Bss',
            '2014-07-14',
            'DescribeCouponDetail',
            'bss'
        );
    }

    /**
     * @param string $couponNumber
     *
     * @return $this
     */
    public function setCouponNumber($couponNumber)
    {
        $this->requestParameters['CouponNumber'] = $couponNumber;
        $this->queryParameters['CouponNumber'] = $couponNumber;

        return $this;
    }
}
