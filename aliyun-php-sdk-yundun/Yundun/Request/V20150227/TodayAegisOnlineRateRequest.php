<?php

namespace Yundun\Request\V20150227;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TodayAegisOnlineRate
 *
 */
class TodayAegisOnlineRateRequest extends \RpcAcsRequest
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
            'Yundun',
            '2015-02-27',
            'TodayAegisOnlineRate',
            'yundun'
        );
    }
}
