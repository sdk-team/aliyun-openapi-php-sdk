<?php

namespace Slb\Request\V20140515;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateLoadBalancerUDPListener
 *
 * @method string getaccess_key_id()
 * @method string getHealthCheckConnectTimeout()
 * @method string getResourceOwnerId()
 * @method string getUnhealthyThreshold()
 * @method string getHealthyThreshold()
 * @method string getAclStatus()
 * @method string getScheduler()
 * @method string getAclType()
 * @method string getMaxConnection()
 * @method string getPersistenceTimeout()
 * @method string getVpcIds()
 * @method string getVServerGroupId()
 * @method string getAclId()
 * @method string getListenerPort()
 * @method string getResourceOwnerAccount()
 * @method string getBandwidth()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getTags()
 * @method string getLoadBalancerId()
 * @method string getMasterSlaveServerGroupId()
 * @method string gethealthCheckReq()
 * @method string getBackendServerPort()
 * @method string gethealthCheckInterval()
 * @method string gethealthCheckExp()
 * @method string getHealthCheckConnectPort()
 */
class CreateLoadBalancerUDPListenerRequest extends \RpcAcsRequest
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
            'CreateLoadBalancerUDPListener',
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
     * @param string $healthCheckConnectTimeout
     *
     * @return $this
     */
    public function setHealthCheckConnectTimeout($healthCheckConnectTimeout)
    {
        $this->requestParameters['HealthCheckConnectTimeout'] = $healthCheckConnectTimeout;
        $this->queryParameters['HealthCheckConnectTimeout'] = $healthCheckConnectTimeout;

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
     * @param string $unhealthyThreshold
     *
     * @return $this
     */
    public function setUnhealthyThreshold($unhealthyThreshold)
    {
        $this->requestParameters['UnhealthyThreshold'] = $unhealthyThreshold;
        $this->queryParameters['UnhealthyThreshold'] = $unhealthyThreshold;

        return $this;
    }

    /**
     * @param string $healthyThreshold
     *
     * @return $this
     */
    public function setHealthyThreshold($healthyThreshold)
    {
        $this->requestParameters['HealthyThreshold'] = $healthyThreshold;
        $this->queryParameters['HealthyThreshold'] = $healthyThreshold;

        return $this;
    }

    /**
     * @param string $aclStatus
     *
     * @return $this
     */
    public function setAclStatus($aclStatus)
    {
        $this->requestParameters['AclStatus'] = $aclStatus;
        $this->queryParameters['AclStatus'] = $aclStatus;

        return $this;
    }

    /**
     * @param string $scheduler
     *
     * @return $this
     */
    public function setScheduler($scheduler)
    {
        $this->requestParameters['Scheduler'] = $scheduler;
        $this->queryParameters['Scheduler'] = $scheduler;

        return $this;
    }

    /**
     * @param string $aclType
     *
     * @return $this
     */
    public function setAclType($aclType)
    {
        $this->requestParameters['AclType'] = $aclType;
        $this->queryParameters['AclType'] = $aclType;

        return $this;
    }

    /**
     * @param string $maxConnection
     *
     * @return $this
     */
    public function setMaxConnection($maxConnection)
    {
        $this->requestParameters['MaxConnection'] = $maxConnection;
        $this->queryParameters['MaxConnection'] = $maxConnection;

        return $this;
    }

    /**
     * @param string $persistenceTimeout
     *
     * @return $this
     */
    public function setPersistenceTimeout($persistenceTimeout)
    {
        $this->requestParameters['PersistenceTimeout'] = $persistenceTimeout;
        $this->queryParameters['PersistenceTimeout'] = $persistenceTimeout;

        return $this;
    }

    /**
     * @param string $vpcIds
     *
     * @return $this
     */
    public function setVpcIds($vpcIds)
    {
        $this->requestParameters['VpcIds'] = $vpcIds;
        $this->queryParameters['VpcIds'] = $vpcIds;

        return $this;
    }

    /**
     * @param string $vServerGroupId
     *
     * @return $this
     */
    public function setVServerGroupId($vServerGroupId)
    {
        $this->requestParameters['VServerGroupId'] = $vServerGroupId;
        $this->queryParameters['VServerGroupId'] = $vServerGroupId;

        return $this;
    }

    /**
     * @param string $aclId
     *
     * @return $this
     */
    public function setAclId($aclId)
    {
        $this->requestParameters['AclId'] = $aclId;
        $this->queryParameters['AclId'] = $aclId;

        return $this;
    }

    /**
     * @param string $listenerPort
     *
     * @return $this
     */
    public function setListenerPort($listenerPort)
    {
        $this->requestParameters['ListenerPort'] = $listenerPort;
        $this->queryParameters['ListenerPort'] = $listenerPort;

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
     * @param string $bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        $this->requestParameters['Bandwidth'] = $bandwidth;
        $this->queryParameters['Bandwidth'] = $bandwidth;

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
     * @param string $masterSlaveServerGroupId
     *
     * @return $this
     */
    public function setMasterSlaveServerGroupId($masterSlaveServerGroupId)
    {
        $this->requestParameters['MasterSlaveServerGroupId'] = $masterSlaveServerGroupId;
        $this->queryParameters['MasterSlaveServerGroupId'] = $masterSlaveServerGroupId;

        return $this;
    }

    /**
     * @param string $healthCheckReq
     *
     * @return $this
     */
    public function sethealthCheckReq($healthCheckReq)
    {
        $this->requestParameters['healthCheckReq'] = $healthCheckReq;
        $this->queryParameters['healthCheckReq'] = $healthCheckReq;

        return $this;
    }

    /**
     * @param string $backendServerPort
     *
     * @return $this
     */
    public function setBackendServerPort($backendServerPort)
    {
        $this->requestParameters['BackendServerPort'] = $backendServerPort;
        $this->queryParameters['BackendServerPort'] = $backendServerPort;

        return $this;
    }

    /**
     * @param string $healthCheckInterval
     *
     * @return $this
     */
    public function sethealthCheckInterval($healthCheckInterval)
    {
        $this->requestParameters['healthCheckInterval'] = $healthCheckInterval;
        $this->queryParameters['healthCheckInterval'] = $healthCheckInterval;

        return $this;
    }

    /**
     * @param string $healthCheckExp
     *
     * @return $this
     */
    public function sethealthCheckExp($healthCheckExp)
    {
        $this->requestParameters['healthCheckExp'] = $healthCheckExp;
        $this->queryParameters['healthCheckExp'] = $healthCheckExp;

        return $this;
    }

    /**
     * @param string $healthCheckConnectPort
     *
     * @return $this
     */
    public function setHealthCheckConnectPort($healthCheckConnectPort)
    {
        $this->requestParameters['HealthCheckConnectPort'] = $healthCheckConnectPort;
        $this->queryParameters['HealthCheckConnectPort'] = $healthCheckConnectPort;

        return $this;
    }
}
