<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ValidateSecurityGroup
 *
 * @method string getNicType()
 * @method string getResourceOwnerId()
 * @method string getSourcePort()
 * @method string getSourceIp()
 * @method string getDirection()
 * @method string getDestIp()
 * @method string getResourceOwnerAccount()
 * @method string getIpProtocol()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getInstanceId()
 * @method string getDestPort()
 */
class ValidateSecurityGroupRequest extends \RpcAcsRequest
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
            'ValidateSecurityGroup'
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
     * @param string $sourcePort
     *
     * @return $this
     */
    public function setSourcePort($sourcePort)
    {
        $this->requestParameters['SourcePort'] = $sourcePort;
        $this->queryParameters['SourcePort'] = $sourcePort;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->requestParameters['Direction'] = $direction;
        $this->queryParameters['Direction'] = $direction;

        return $this;
    }

    /**
     * @param string $destIp
     *
     * @return $this
     */
    public function setDestIp($destIp)
    {
        $this->requestParameters['DestIp'] = $destIp;
        $this->queryParameters['DestIp'] = $destIp;

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
     * @param string $destPort
     *
     * @return $this
     */
    public function setDestPort($destPort)
    {
        $this->requestParameters['DestPort'] = $destPort;
        $this->queryParameters['DestPort'] = $destPort;

        return $this;
    }
}
