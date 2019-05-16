<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyIntranetBandwidthKb_GatedLaunch
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getIntranetMaxBandwidthOut()
 * @method string getInstanceId()
 * @method string getIntranetMaxBandwidthIn()
 */
class ModifyIntranetBandwidthKb_GatedLaunchRequest extends \RpcAcsRequest
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
            'ModifyIntranetBandwidthKb_GatedLaunch'
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
     * @param string $intranetMaxBandwidthOut
     *
     * @return $this
     */
    public function setIntranetMaxBandwidthOut($intranetMaxBandwidthOut)
    {
        $this->requestParameters['IntranetMaxBandwidthOut'] = $intranetMaxBandwidthOut;
        $this->queryParameters['IntranetMaxBandwidthOut'] = $intranetMaxBandwidthOut;

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
     * @param string $intranetMaxBandwidthIn
     *
     * @return $this
     */
    public function setIntranetMaxBandwidthIn($intranetMaxBandwidthIn)
    {
        $this->requestParameters['IntranetMaxBandwidthIn'] = $intranetMaxBandwidthIn;
        $this->queryParameters['IntranetMaxBandwidthIn'] = $intranetMaxBandwidthIn;

        return $this;
    }
}
