<?php

namespace Aas\Request\V20150701;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of IsBindMfaByPk
 *
 * @method string getPK()
 */
class IsBindMfaByPkRequest extends \RpcAcsRequest
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
            'IsBindMfaByPk'
        );
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
