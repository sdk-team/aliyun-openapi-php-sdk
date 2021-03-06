<?php

namespace Acs\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeletePolicy
 *
 * @method string getProduct()
 * @method string getControlPolicyName()
 * @method string getUserId()
 * @method string getAccept()
 */
class DeletePolicyRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/Policy/[Product]/[ControlPolicyName]/[UserId]';

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
            'DeletePolicy'
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
     * @param string $controlPolicyName
     *
     * @return $this
     */
    public function setControlPolicyName($controlPolicyName)
    {
        $this->requestParameters['ControlPolicyName'] = $controlPolicyName;
        $this->pathParameters['ControlPolicyName'] = $controlPolicyName;

        return $this;
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->requestParameters['UserId'] = $userId;
        $this->pathParameters['UserId'] = $userId;

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
