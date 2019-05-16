<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AuthorizeSecurityGroupEgress_GatedLaunch
 *
 * @method string getNicType()
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getSecurityGroupId()
 * @method string getPolicy()
 * @method string getPortRange()
 * @method string getResourceOwnerAccount()
 * @method string getIpProtocol()
 * @method string getOwnerAccount()
 * @method string getDestGroupId()
 * @method string getOwnerId()
 * @method string getDestGroupOwnerAccount()
 * @method string getPriority()
 * @method string getDestCidrIp()
 * @method string getDestGroupOwnerId()
 */
class AuthorizeSecurityGroupEgress_GatedLaunchRequest extends \RpcAcsRequest
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
            '2014-05-26',
            'AuthorizeSecurityGroupEgress_GatedLaunch'
        );
    }

    /**
     * @param string $nicType
     *
     * @return $this
     */
    public function setNicType($nicType)
    {
        $this->requestParameters['NicType'] = $nicType;
        $this->queryParameters['NicType'] = $nicType;

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
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->requestParameters['SecurityGroupId'] = $securityGroupId;
        $this->queryParameters['SecurityGroupId'] = $securityGroupId;

        return $this;
    }

    /**
     * @param string $policy
     *
     * @return $this
     */
    public function setPolicy($policy)
    {
        $this->requestParameters['Policy'] = $policy;
        $this->queryParameters['Policy'] = $policy;

        return $this;
    }

    /**
     * @param string $portRange
     *
     * @return $this
     */
    public function setPortRange($portRange)
    {
        $this->requestParameters['PortRange'] = $portRange;
        $this->queryParameters['PortRange'] = $portRange;

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
     * @param string $ipProtocol
     *
     * @return $this
     */
    public function setIpProtocol($ipProtocol)
    {
        $this->requestParameters['IpProtocol'] = $ipProtocol;
        $this->queryParameters['IpProtocol'] = $ipProtocol;

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
     * @param string $destGroupId
     *
     * @return $this
     */
    public function setDestGroupId($destGroupId)
    {
        $this->requestParameters['DestGroupId'] = $destGroupId;
        $this->queryParameters['DestGroupId'] = $destGroupId;

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
     * @param string $destGroupOwnerAccount
     *
     * @return $this
     */
    public function setDestGroupOwnerAccount($destGroupOwnerAccount)
    {
        $this->requestParameters['DestGroupOwnerAccount'] = $destGroupOwnerAccount;
        $this->queryParameters['DestGroupOwnerAccount'] = $destGroupOwnerAccount;

        return $this;
    }

    /**
     * @param string $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->requestParameters['Priority'] = $priority;
        $this->queryParameters['Priority'] = $priority;

        return $this;
    }

    /**
     * @param string $destCidrIp
     *
     * @return $this
     */
    public function setDestCidrIp($destCidrIp)
    {
        $this->requestParameters['DestCidrIp'] = $destCidrIp;
        $this->queryParameters['DestCidrIp'] = $destCidrIp;

        return $this;
    }

    /**
     * @param string $destGroupOwnerId
     *
     * @return $this
     */
    public function setDestGroupOwnerId($destGroupOwnerId)
    {
        $this->requestParameters['DestGroupOwnerId'] = $destGroupOwnerId;
        $this->queryParameters['DestGroupOwnerId'] = $destGroupOwnerId;

        return $this;
    }
}
