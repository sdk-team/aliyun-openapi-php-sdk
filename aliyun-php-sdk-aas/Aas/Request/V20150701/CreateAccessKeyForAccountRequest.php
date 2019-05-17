<?php

namespace Aas\Request\V20150701;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAccessKeyForAccount
 *
 * @method string getAKSecret()
 * @method string getPK()
 */
class CreateAccessKeyForAccountRequest extends \RpcAcsRequest
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
            'CreateAccessKeyForAccount'
        );
    }

    /**
     * @param string $aKSecret
     *
     * @return $this
     */
    public function setAKSecret($aKSecret)
    {
        $this->requestParameters['AKSecret'] = $aKSecret;
        $this->queryParameters['AKSecret'] = $aKSecret;

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
