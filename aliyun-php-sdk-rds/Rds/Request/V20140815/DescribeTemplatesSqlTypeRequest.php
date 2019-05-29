<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeTemplatesSqlType
 *
 * @method string getResourceOwnerId()
 * @method string getMinScanRows()
 * @method string getStartTime()
 * @method string getSortKey()
 * @method string getSecurityToken()
 * @method string getPagingId()
 * @method string getDBInstanceId()
 * @method string getMinConsume()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getMaxConsume()
 * @method string getSortMethod()
 * @method string getMaxScanRows()
 */
class DescribeTemplatesSqlTypeRequest extends \RpcAcsRequest
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
            'DescribeTemplatesSqlType',
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
     * @param string $minScanRows
     *
     * @return $this
     */
    public function setMinScanRows($minScanRows)
    {
        $this->requestParameters['MinScanRows'] = $minScanRows;
        $this->queryParameters['MinScanRows'] = $minScanRows;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $sortKey
     *
     * @return $this
     */
    public function setSortKey($sortKey)
    {
        $this->requestParameters['SortKey'] = $sortKey;
        $this->queryParameters['SortKey'] = $sortKey;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $pagingId
     *
     * @return $this
     */
    public function setPagingId($pagingId)
    {
        $this->requestParameters['PagingId'] = $pagingId;
        $this->queryParameters['PagingId'] = $pagingId;

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
     * @param string $minConsume
     *
     * @return $this
     */
    public function setMinConsume($minConsume)
    {
        $this->requestParameters['MinConsume'] = $minConsume;
        $this->queryParameters['MinConsume'] = $minConsume;

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
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

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
     * @param string $maxConsume
     *
     * @return $this
     */
    public function setMaxConsume($maxConsume)
    {
        $this->requestParameters['MaxConsume'] = $maxConsume;
        $this->queryParameters['MaxConsume'] = $maxConsume;

        return $this;
    }

    /**
     * @param string $sortMethod
     *
     * @return $this
     */
    public function setSortMethod($sortMethod)
    {
        $this->requestParameters['SortMethod'] = $sortMethod;
        $this->queryParameters['SortMethod'] = $sortMethod;

        return $this;
    }

    /**
     * @param string $maxScanRows
     *
     * @return $this
     */
    public function setMaxScanRows($maxScanRows)
    {
        $this->requestParameters['MaxScanRows'] = $maxScanRows;
        $this->queryParameters['MaxScanRows'] = $maxScanRows;

        return $this;
    }
}
