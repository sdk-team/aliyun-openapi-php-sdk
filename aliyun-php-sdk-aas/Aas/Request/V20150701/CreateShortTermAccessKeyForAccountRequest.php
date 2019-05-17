<?php

namespace Aas\Request\V20150701;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateShortTermAccessKeyForAccount
 *
 * @method string getExpireTime()
 * @method string getIsMfaPresent()
 * @method string getPK()
 */
class CreateShortTermAccessKeyForAccountRequest extends \RpcAcsRequest
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
            'CreateShortTermAccessKeyForAccount'
        );
    }

    /**
     * @param string $expireTime
     *
     * @return $this
     */
    public function setExpireTime($expireTime)
    {
        $this->requestParameters['ExpireTime'] = $expireTime;
        $this->queryParameters['ExpireTime'] = $expireTime;

        return $this;
    }

    /**
     * @param string $isMfaPresent
     *
     * @return $this
     */
    public function setIsMfaPresent($isMfaPresent)
    {
        $this->requestParameters['IsMfaPresent'] = $isMfaPresent;
        $this->queryParameters['IsMfaPresent'] = $isMfaPresent;

        return $this;
    }

    /**
     * @param string $pK
     *
     * @return $this
     */
    public function setPK($pK)
    {
        $this->requestParameters['PK'] = $pK;
        $this->queryParameters['PK'] = $pK;

        return $this;
    }
}
