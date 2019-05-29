<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeRegionAvailability
 *
 * @method string getResourceOwnerId()
 * @method string getHostType()
 * @method string getSpecifyCount()
 * @method string getDBInstanceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getInstanceUsedType()
 */
class DescribeRegionAvailabilityRequest extends \RpcAcsRequest
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
            'Rds',
            '2014-08-15',
            'DescribeRegionAvailability',
            'rds'
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
     * @param string $hostType
     *
     * @return $this
     */
    public function setHostType($hostType)
    {
        $this->requestParameters['HostType'] = $hostType;
        $this->queryParameters['HostType'] = $hostType;

        return $this;
    }

    /**
     * @param string $specifyCount
     *
     * @return $this
     */
    public function setSpecifyCount($specifyCount)
    {
        $this->requestParameters['SpecifyCount'] = $specifyCount;
        $this->queryParameters['SpecifyCount'] = $specifyCount;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

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
     * @param string $instanceUsedType
     *
     * @return $this
     */
    public function setInstanceUsedType($instanceUsedType)
    {
        $this->requestParameters['InstanceUsedType'] = $instanceUsedType;
        $this->queryParameters['InstanceUsedType'] = $instanceUsedType;

        return $this;
    }
}
