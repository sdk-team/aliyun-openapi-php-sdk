<?php

namespace Ecs\Request\V20160314;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateCapacityReservation
 *
 * @method string getResourceOwnerId()
 * @method string getDescription()
 * @method string getNetworkType()
 * @method string getResourceGroupId()
 * @method string getInstanceCount()
 * @method string getInstanceType()
 * @method array getTags()
 * @method string getInstancePlatform()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getEndDateType()
 * @method string getInstanceMatchCriteria()
 * @method string getTimeSlot()
 * @method string getCapacityReservationName()
 * @method string getZoneId()
 */
class CreateCapacityReservationRequest extends \RpcAcsRequest
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
            'CreateCapacityReservation',
            'ecs'
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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $this->requestParameters['NetworkType'] = $networkType;
        $this->queryParameters['NetworkType'] = $networkType;

        return $this;
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->requestParameters['ResourceGroupId'] = $resourceGroupId;
        $this->queryParameters['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @param string $instanceCount
     *
     * @return $this
     */
    public function setInstanceCount($instanceCount)
    {
        $this->requestParameters['InstanceCount'] = $instanceCount;
        $this->queryParameters['InstanceCount'] = $instanceCount;

        return $this;
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        $this->requestParameters['InstanceType'] = $instanceType;
        $this->queryParameters['InstanceType'] = $instanceType;

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
     * @param string $instancePlatform
     *
     * @return $this
     */
    public function setInstancePlatform($instancePlatform)
    {
        $this->requestParameters['InstancePlatform'] = $instancePlatform;
        $this->queryParameters['InstancePlatform'] = $instancePlatform;

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
     * @param string $endDateType
     *
     * @return $this
     */
    public function setEndDateType($endDateType)
    {
        $this->requestParameters['EndDateType'] = $endDateType;
        $this->queryParameters['EndDateType'] = $endDateType;

        return $this;
    }

    /**
     * @param string $instanceMatchCriteria
     *
     * @return $this
     */
    public function setInstanceMatchCriteria($instanceMatchCriteria)
    {
        $this->requestParameters['InstanceMatchCriteria'] = $instanceMatchCriteria;
        $this->queryParameters['InstanceMatchCriteria'] = $instanceMatchCriteria;

        return $this;
    }

    /**
     * @param string $timeSlot
     *
     * @return $this
     */
    public function setTimeSlot($timeSlot)
    {
        $this->requestParameters['TimeSlot'] = $timeSlot;
        $this->queryParameters['TimeSlot'] = $timeSlot;

        return $this;
    }

    /**
     * @param string $capacityReservationName
     *
     * @return $this
     */
    public function setCapacityReservationName($capacityReservationName)
    {
        $this->requestParameters['CapacityReservationName'] = $capacityReservationName;
        $this->queryParameters['CapacityReservationName'] = $capacityReservationName;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->requestParameters['ZoneId'] = $zoneId;
        $this->queryParameters['ZoneId'] = $zoneId;

        return $this;
    }
}
