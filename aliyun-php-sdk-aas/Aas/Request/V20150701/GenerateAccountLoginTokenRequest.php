<?php

namespace Aas\Request\V20150701;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GenerateAccountLoginToken
 *
 * @method string getTargetPk()
 */
class GenerateAccountLoginTokenRequest extends \RpcAcsRequest
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
            'GenerateAccountLoginToken'
        );
    }

    /**
     * @param string $targetPk
     *
     * @return $this
     */
    public function setTargetPk($targetPk)
    {
        $this->requestParameters['TargetPk'] = $targetPk;
        $this->queryParameters['TargetPk'] = $targetPk;

        return $this;
    }
}
