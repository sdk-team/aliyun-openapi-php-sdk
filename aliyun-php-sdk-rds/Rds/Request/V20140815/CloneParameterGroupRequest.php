<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CloneParameterGroup
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getParameterGroupId()
 * @method string getTargetRegionId()
 */
class CloneParameterGroupRequest extends \RpcAcsRequest
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
            'CloneParameterGroup'
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
     * @param string $parameterGroupId
     *
     * @return $this
     */
    public function setParameterGroupId($parameterGroupId)
    {
        $this->requestParameters['ParameterGroupId'] = $parameterGroupId;
        $this->queryParameters['ParameterGroupId'] = $parameterGroupId;

        return $this;
    }

    /**
     * @param string $targetRegionId
     *
     * @return $this
     */
    public function setTargetRegionId($targetRegionId)
    {
        $this->requestParameters['TargetRegionId'] = $targetRegionId;
        $this->queryParameters['TargetRegionId'] = $targetRegionId;

        return $this;
    }
}
