<?php

namespace EcsDemo\Request\V20190626;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CancelInstance
 *
 * @method string getInstanceId()
 */
class CancelInstanceRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/dev/mvp/cancel/instance';

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
            '2019-06-26',
            'CancelInstance'
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
}
