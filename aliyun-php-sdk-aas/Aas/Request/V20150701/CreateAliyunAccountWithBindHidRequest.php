<?php

namespace Aas\Request\V20150701;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAliyunAccountWithBindHid
 *
 * @method string getInnerAccountHid()
 */
class CreateAliyunAccountWithBindHidRequest extends \RpcAcsRequest
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
            'CreateAliyunAccountWithBindHid',
            'aas'
        );
    }

    /**
     * @param string $innerAccountHid
     *
     * @return $this
     */
    public function setInnerAccountHid($innerAccountHid)
    {
        $this->requestParameters['InnerAccountHid'] = $innerAccountHid;
        $this->queryParameters['InnerAccountHid'] = $innerAccountHid;

        return $this;
    }
}
