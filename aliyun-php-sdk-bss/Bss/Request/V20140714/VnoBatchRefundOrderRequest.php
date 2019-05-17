<?php

namespace Bss\Request\V20140714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of VnoBatchRefundOrder
 *
 * @method string getparamStr()
 */
class VnoBatchRefundOrderRequest extends \RpcAcsRequest
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
            'Bss',
            '2014-07-14',
            'VnoBatchRefundOrder'
        );
    }

    /**
     * @param string $paramStr
     *
     * @return $this
     */
    public function setparamStr($paramStr)
    {
        $this->requestParameters['paramStr'] = $paramStr;
        $this->queryParameters['paramStr'] = $paramStr;

        return $this;
    }
}
