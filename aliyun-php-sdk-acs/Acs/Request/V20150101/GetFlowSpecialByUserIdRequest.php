<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetFlowSpecialByUserId
 *
 * @method string getProduct()
 * @method string getAccept()
 * @method string getPopUserId()
 */
class GetFlowSpecialByUserIdRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/GetFlowSpecialByUserId/[Product]/[PopUserId]';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Acs',
            '2015-01-01',
            'GetFlowSpecialByUserId'
        );
    }

    /**
     * @param string $product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->requestParameters['Product'] = $product;
        $this->pathParameters['Product'] = $product;

        return $this;
    }

    /**
     * @param string $accept
     *
     * @return $this
     */
    public function setAccept($accept)
    {
        $this->requestParameters['Accept'] = $accept;
        $this->headers['Accept'] = $accept;

        return $this;
    }

    /**
     * @param string $popUserId
     *
     * @return $this
     */
    public function setPopUserId($popUserId)
    {
        $this->requestParameters['PopUserId'] = $popUserId;
        $this->pathParameters['PopUserId'] = $popUserId;

        return $this;
    }
}
