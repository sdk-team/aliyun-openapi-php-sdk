<?php

namespace Ecs\Request\V20160314;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeInstanceAutoRebootTime
 *
 * @method string getAutoRebootTimeTo()
 * @method string getResourceOwnerId()
 * @method string getAutoRebootTimeFrom()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method array getInstanceIdss()
 */
class DescribeInstanceAutoRebootTimeRequest extends \RpcAcsRequest
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
            'Ecs',
            '2016-03-14',
            'DescribeInstanceAutoRebootTime',
            'ecs'
        );
    }

    /**
     * @param string $autoRebootTimeTo
     *
     * @return $this
     */
    public function setAutoRebootTimeTo($autoRebootTimeTo)
    {
        $this->requestParameters['AutoRebootTimeTo'] = $autoRebootTimeTo;
        $this->queryParameters['AutoRebootTimeTo'] = $autoRebootTimeTo;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $autoRebootTimeFrom
     *
     * @return $this
     */
    public function setAutoRebootTimeFrom($autoRebootTimeFrom)
    {
        $this->requestParameters['AutoRebootTimeFrom'] = $autoRebootTimeFrom;
        $this->queryParameters['AutoRebootTimeFrom'] = $autoRebootTimeFrom;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
    public function setInstanceIdss(array $instanceIds)
    {
        $this->requestParameters['InstanceIdss'] = $instanceIds;
        foreach ($instanceIds as $i => $iValue) {
            $this->queryParameters['InstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
