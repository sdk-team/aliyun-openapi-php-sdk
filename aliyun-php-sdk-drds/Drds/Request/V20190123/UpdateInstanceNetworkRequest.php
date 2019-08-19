<?php

namespace Drds\Request\V20190123;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateInstanceNetwork
 *
 * @method string getRetainClassic()
 * @method string getClassicExpiredDays()
 * @method string getSrcInstanceNetworkType()
 * @method string getDrdsInstanceId()
 */
class UpdateInstanceNetworkRequest extends \RpcAcsRequest
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
            'UpdateInstanceNetwork',
            'drds'
        );
    }

    /**
     * @param string $retainClassic
     *
     * @return $this
     */
    public function setRetainClassic($retainClassic)
    {
        $this->requestParameters['RetainClassic'] = $retainClassic;
        $this->queryParameters['RetainClassic'] = $retainClassic;

        return $this;
    }

    /**
     * @param string $classicExpiredDays
     *
     * @return $this
     */
    public function setClassicExpiredDays($classicExpiredDays)
    {
        $this->requestParameters['ClassicExpiredDays'] = $classicExpiredDays;
        $this->queryParameters['ClassicExpiredDays'] = $classicExpiredDays;

        return $this;
    }

    /**
     * @param string $srcInstanceNetworkType
     *
     * @return $this
     */
    public function setSrcInstanceNetworkType($srcInstanceNetworkType)
    {
        $this->requestParameters['SrcInstanceNetworkType'] = $srcInstanceNetworkType;
        $this->queryParameters['SrcInstanceNetworkType'] = $srcInstanceNetworkType;

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
