<?php

namespace Ecs\Request\V20160314;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDisks
 *
 * @method string getResourceOwnerId()
 * @method string getSnapshotId()
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getDiskName()
 * @method string getResourceGroupId()
 * @method array getTags()
 * @method string getAmount()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getSize()
 * @method string getEncrypted()
 * @method string getZoneId()
 * @method string getCategory()
 * @method string getKMSKeyId()
 */
class CreateDisksRequest extends \RpcAcsRequest
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
            'CreateDisks',
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
     * @param string $diskName
     *
     * @return $this
     */
    public function setDiskName($diskName)
    {
        $this->requestParameters['DiskName'] = $diskName;
        $this->queryParameters['DiskName'] = $diskName;

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
     * @param string $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->requestParameters['Amount'] = $amount;
        $this->queryParameters['Amount'] = $amount;

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
     * @param string $encrypted
     *
     * @return $this
     */
    public function setEncrypted($encrypted)
    {
        $this->requestParameters['Encrypted'] = $encrypted;
        $this->queryParameters['Encrypted'] = $encrypted;

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
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->requestParameters['Category'] = $category;
        $this->queryParameters['Category'] = $category;

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
