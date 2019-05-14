<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteAccountBinding
 *
 * @method string getProduct()
 * @method string getAliyunUid()
 * @method string getAccept()
 */
class DeleteAccountBindingRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/AccountBinding/[Product]/[AliyunUid]';

    /**
     * @var string
     */
    protected $method = 'DELETE';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Acs',
            '2015-01-01',
            'DeleteAccountBinding'
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
     * @param string $aliyunUid
     *
     * @return $this
     */
    public function setAliyunUid($aliyunUid)
    {
        $this->requestParameters['AliyunUid'] = $aliyunUid;
        $this->pathParameters['AliyunUid'] = $aliyunUid;

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
}
