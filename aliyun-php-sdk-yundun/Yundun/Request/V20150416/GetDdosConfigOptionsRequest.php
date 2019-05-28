<?php

namespace Yundun\Request\V20150416;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetDdosConfigOptions
 *
 */
class GetDdosConfigOptionsRequest extends \RpcAcsRequest
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
            '2015-04-16',
            'GetDdosConfigOptions',
            'yundun'
        );
    }
}
