<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PutAccountBinding
 *
 * @method string getProduct()
 * @method string getAliyunUid()
 * @method string getBucEmpId()
 * @method string getAccept()
 */
class PutAccountBindingRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/AccountBinding/[Product]/[AliyunUid]/[BucEmpId]';

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Acs',
            '2015-01-01',
            'PutAccountBinding'
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
     * @param string $bucEmpId
     *
     * @return $this
     */
    public function setBucEmpId($bucEmpId)
    {
        $this->requestParameters['BucEmpId'] = $bucEmpId;
        $this->pathParameters['BucEmpId'] = $bucEmpId;

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
