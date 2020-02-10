<?php

namespace EcsDemo\Request\V20190620;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyInstance
 *
 */
class ModifyInstanceRequest extends \RpcAcsRequest
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
            'EcsDemo',
            '2019-06-20',
            'ModifyInstance'
        );
    }
}
