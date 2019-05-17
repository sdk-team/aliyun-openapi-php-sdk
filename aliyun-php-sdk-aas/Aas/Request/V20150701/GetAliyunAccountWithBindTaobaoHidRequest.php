<?php

namespace Aas\Request\V20150701;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetAliyunAccountWithBindTaobaoHid
 *
 * @method string getHavanaId()
 */
class GetAliyunAccountWithBindTaobaoHidRequest extends \RpcAcsRequest
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
            'GetAliyunAccountWithBindTaobaoHid'
        );
    }

    /**
     * @param string $havanaId
     *
     * @return $this
     */
    public function setHavanaId($havanaId)
    {
        $this->requestParameters['HavanaId'] = $havanaId;
        $this->queryParameters['HavanaId'] = $havanaId;

        return $this;
    }
}
