<?php

namespace Yundun\Request\V20150416;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteBackDoorFile
 *
 * @method string getPath()
 * @method string getJstOwnerId()
 * @method string getInstanceId()
 */
class DeleteBackDoorFileRequest extends \RpcAcsRequest
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
            'DeleteBackDoorFile',
            'yundun'
        );
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->requestParameters['Path'] = $path;
        $this->queryParameters['Path'] = $path;

        return $this;
    }

    /**
     * @param string $jstOwnerId
     *
     * @return $this
     */
    public function setJstOwnerId($jstOwnerId)
    {
        $this->requestParameters['JstOwnerId'] = $jstOwnerId;
        $this->queryParameters['JstOwnerId'] = $jstOwnerId;

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
