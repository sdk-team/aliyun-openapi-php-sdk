<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateVolume
 *
 * @method string getResourceOwnerId()
 * @method string getSnapshotId()
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getVolumeCategory()
 * @method array getTags()
 * @method string getVolumeName()
 * @method string getVolumeEncrypted()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getSize()
 * @method string getZoneId()
 * @method string getKMSKeyId()
 */
class CreateVolumeRequest extends \RpcAcsRequest
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
            'CreateVolume',
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
     * @param string $snapshotId
     *
     * @return $this
     */
    public function setSnapshotId($snapshotId)
    {
        $this->requestParameters['SnapshotId'] = $snapshotId;
        $this->queryParameters['SnapshotId'] = $snapshotId;

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
     * @param string $volumeCategory
     *
     * @return $this
     */
    public function setVolumeCategory($volumeCategory)
    {
        $this->requestParameters['VolumeCategory'] = $volumeCategory;
        $this->queryParameters['VolumeCategory'] = $volumeCategory;

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
            $this->queryParameters['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->queryParameters['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }

    /**
     * @param string $volumeName
     *
     * @return $this
     */
    public function setVolumeName($volumeName)
    {
        $this->requestParameters['VolumeName'] = $volumeName;
        $this->queryParameters['VolumeName'] = $volumeName;

        return $this;
    }

    /**
     * @param string $volumeEncrypted
     *
     * @return $this
     */
    public function setVolumeEncrypted($volumeEncrypted)
    {
        $this->requestParameters['VolumeEncrypted'] = $volumeEncrypted;
        $this->queryParameters['VolumeEncrypted'] = $volumeEncrypted;

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
     * @param string $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->requestParameters['Size'] = $size;
        $this->queryParameters['Size'] = $size;

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

    /**
     * @param string $kMSKeyId
     *
     * @return $this
     */
    public function setKMSKeyId($kMSKeyId)
    {
        $this->requestParameters['KMSKeyId'] = $kMSKeyId;
        $this->queryParameters['KMSKeyId'] = $kMSKeyId;

        return $this;
    }
}
