<?php

namespace Ecs\Request\V20160314;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyReservedInstances
 *
 * @method string getResourceOwnerId()
 * @method array getConfigurations()
 * @method array getTags()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getReservedInstanceIds()
 */
class ModifyReservedInstancesRequest extends \RpcAcsRequest
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
            'ModifyReservedInstances'
        );
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
     * @param array $configuration
     *
     * @return $this
     */
    public function setConfigurations(array $configuration)
    {
        $this->requestParameters['Configurations'] = $configuration;
        foreach ($configuration as $depth1 => $depth1Value) {
            $this->queryParameters['Configuration.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
            $this->queryParameters['Configuration.' . ($depth1 + 1) . '.ReservedInstanceName'] = $depth1Value['ReservedInstanceName'];
            $this->queryParameters['Configuration.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->queryParameters['Configuration.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
            $this->queryParameters['Configuration.' . ($depth1 + 1) . '.InstanceAmount'] = $depth1Value['InstanceAmount'];
        }

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function setTags(array $tag)
    {
        $this->requestParameters['Tags'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->queryParameters['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->queryParameters['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

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
     * @param array $reservedInstanceId
     *
     * @return $this
     */
    public function setReservedInstanceIds(array $reservedInstanceId)
    {
        $this->requestParameters['ReservedInstanceIds'] = $reservedInstanceId;
        foreach ($reservedInstanceId as $i => $iValue) {
            $this->queryParameters['ReservedInstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
