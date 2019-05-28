<?php

namespace Yundun\Request\V20150416;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SecureCheck
 *
 * @method string getJstOwnerId()
 * @method string getInstanceIds()
 */
class SecureCheckRequest extends \RpcAcsRequest
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
            'SecureCheck',
            'yundun'
        );
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
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setInstanceIds($instanceIds)
    {
        $this->requestParameters['InstanceIds'] = $instanceIds;
        $this->queryParameters['InstanceIds'] = $instanceIds;

        return $this;
    }
}
