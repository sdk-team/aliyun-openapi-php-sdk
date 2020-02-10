<?php

namespace EcsDemo\Request\V20190620;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DisableDisk
 *
 * @method string getTypeCode()
 */
class DisableDiskRequest extends \RpcAcsRequest
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
            'DisableDisk'
        );
    }

    /**
     * @param string $typeCode
     *
     * @return $this
     */
    public function setTypeCode($typeCode)
    {
        $this->requestParameters['TypeCode'] = $typeCode;
        $this->queryParameters['TypeCode'] = $typeCode;

        return $this;
    }
}
