<?php

namespace Slb\Request\V20140515;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateMasterSlaveServerGroup
 *
 * @method string getaccess_key_id()
 * @method string getResourceOwnerId()
 * @method string getMasterSlaveBackendServers()
 * @method string getLoadBalancerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getMasterSlaveServerGroupName()
 * @method string getOwnerId()
 * @method string getTags()
 */
class CreateMasterSlaveServerGroupRequest extends \RpcAcsRequest
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
            'Slb',
            '2014-05-15',
            'CreateMasterSlaveServerGroup',
            'asdfdsf'
        );
    }

    /**
     * @param string $access_key_id
     *
     * @return $this
     */
    public function setaccess_key_id($access_key_id)
    {
        $this->requestParameters['access_key_id'] = $access_key_id;
        $this->queryParameters['access_key_id'] = $access_key_id;

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
     * @param string $masterSlaveBackendServers
     *
     * @return $this
     */
    public function setMasterSlaveBackendServers($masterSlaveBackendServers)
    {
        $this->requestParameters['MasterSlaveBackendServers'] = $masterSlaveBackendServers;
        $this->queryParameters['MasterSlaveBackendServers'] = $masterSlaveBackendServers;

        return $this;
    }

    /**
     * @param string $loadBalancerId
     *
     * @return $this
     */
    public function setLoadBalancerId($loadBalancerId)
    {
        $this->requestParameters['LoadBalancerId'] = $loadBalancerId;
        $this->queryParameters['LoadBalancerId'] = $loadBalancerId;

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
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $masterSlaveServerGroupName
     *
     * @return $this
     */
    public function setMasterSlaveServerGroupName($masterSlaveServerGroupName)
    {
        $this->requestParameters['MasterSlaveServerGroupName'] = $masterSlaveServerGroupName;
        $this->queryParameters['MasterSlaveServerGroupName'] = $masterSlaveServerGroupName;

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
     * @param string $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->requestParameters['Tags'] = $tags;
        $this->queryParameters['Tags'] = $tags;

        return $this;
    }
}
