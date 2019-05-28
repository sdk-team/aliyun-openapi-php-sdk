<?php

namespace Yundun\Request\V20150416;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DetectVulByIp
 *
 * @method string getVulIp()
 * @method string getInstanceId()
 */
class DetectVulByIpRequest extends \RpcAcsRequest
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
            'DetectVulByIp',
            'yundun'
        );
    }

    /**
     * @param string $vulIp
     *
     * @return $this
     */
    public function setVulIp($vulIp)
    {
        $this->requestParameters['VulIp'] = $vulIp;
        $this->queryParameters['VulIp'] = $vulIp;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }
}
