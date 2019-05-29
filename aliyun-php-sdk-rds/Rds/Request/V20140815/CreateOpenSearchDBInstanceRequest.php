<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateOpenSearchDBInstance
 *
 * @method string getResourceOwnerId()
 * @method string getLcuQuota()
 * @method string getSearchType()
 * @method string getDBInstanceId()
 * @method string getStorageQuota()
 * @method string getResourceOwnerAccount()
 * @method string getSpecQuota()
 * @method string getOwnerId()
 */
class CreateOpenSearchDBInstanceRequest extends \RpcAcsRequest
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
            'CreateOpenSearchDBInstance',
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
     * @param string $lcuQuota
     *
     * @return $this
     */
    public function setLcuQuota($lcuQuota)
    {
        $this->requestParameters['LcuQuota'] = $lcuQuota;
        $this->queryParameters['LcuQuota'] = $lcuQuota;

        return $this;
    }

    /**
     * @param string $searchType
     *
     * @return $this
     */
    public function setSearchType($searchType)
    {
        $this->requestParameters['SearchType'] = $searchType;
        $this->queryParameters['SearchType'] = $searchType;

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
     * @param string $storageQuota
     *
     * @return $this
     */
    public function setStorageQuota($storageQuota)
    {
        $this->requestParameters['StorageQuota'] = $storageQuota;
        $this->queryParameters['StorageQuota'] = $storageQuota;

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
     * @param string $specQuota
     *
     * @return $this
     */
    public function setSpecQuota($specQuota)
    {
        $this->requestParameters['SpecQuota'] = $specQuota;
        $this->queryParameters['SpecQuota'] = $specQuota;

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
}
