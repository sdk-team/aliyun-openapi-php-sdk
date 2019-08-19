<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of EnableInstanceIpv6Address
 *
 * @method string getDrdsPassword()
 * @method string getDrdsInstanceId()
 */
class EnableInstanceIpv6AddressRequest extends \RpcAcsRequest
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
            'Drds',
            '2019-01-23',
            'EnableInstanceIpv6Address',
            'drds'
        );
    }

    /**
     * @param string $drdsPassword
     *
     * @return $this
     */
    public function setDrdsPassword($drdsPassword)
    {
        $this->requestParameters['DrdsPassword'] = $drdsPassword;
        $this->queryParameters['DrdsPassword'] = $drdsPassword;

        return $this;
    }

    /**
     * @param string $drdsInstanceId
     *
     * @return $this
     */
    public function setDrdsInstanceId($drdsInstanceId)
    {
        $this->requestParameters['DrdsInstanceId'] = $drdsInstanceId;
        $this->queryParameters['DrdsInstanceId'] = $drdsInstanceId;

        return $this;
    }
}
