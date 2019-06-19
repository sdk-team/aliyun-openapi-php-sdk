<?php

namespace Aas\Request\V20150701;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of VerifyAccountLoginToken
 *
 * @method string getLoginToken()
 */
class VerifyAccountLoginTokenRequest extends \RpcAcsRequest
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
            'Aas',
            '2015-07-01',
            'VerifyAccountLoginToken',
            'aas'
        );
    }

    /**
     * @param string $loginToken
     *
     * @return $this
     */
    public function setLoginToken($loginToken)
    {
        $this->requestParameters['LoginToken'] = $loginToken;
        $this->queryParameters['LoginToken'] = $loginToken;

        return $this;
    }
}
