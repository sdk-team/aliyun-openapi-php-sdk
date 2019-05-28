<?php

namespace Yundun\Request\V20150416;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DetectVulById
 *
 * @method string getInstanceId()
 * @method string getVulId()
 */
class DetectVulByIdRequest extends \RpcAcsRequest
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
            'DetectVulById',
            'yundun'
        );
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

    /**
     * @param string $vulId
     *
     * @return $this
     */
    public function setVulId($vulId)
    {
        $this->requestParameters['VulId'] = $vulId;
        $this->queryParameters['VulId'] = $vulId;

        return $this;
    }
}
