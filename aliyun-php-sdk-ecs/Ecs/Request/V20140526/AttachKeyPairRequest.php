<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AttachKeyPair
 *
 * @method string getResourceOwnerId()
 * @method string getKeyPairName()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getInstanceIds()
 */
class AttachKeyPairRequest extends \RpcAcsRequest
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
            'AttachKeyPair'
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
     * @param string $keyPairName
     *
     * @return $this
     */
    public function setKeyPairName($keyPairName)
    {
        $this->requestParameters['KeyPairName'] = $keyPairName;
        $this->queryParameters['KeyPairName'] = $keyPairName;

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
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setInstanceIds($instanceIds)
    {
        $this->requestParameters['InstanceIds'] = $instanceIds;
        $this->queryParameters['InstanceIds'] = $instanceIds;

        return $this;
    }
}
