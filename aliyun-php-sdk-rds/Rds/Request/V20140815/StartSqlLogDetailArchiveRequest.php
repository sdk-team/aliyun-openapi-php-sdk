<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of StartSqlLogDetailArchive
 *
 * @method string getResourceOwnerId()
 * @method string getColumns()
 * @method string getMinScanRows()
 * @method string getStartTime()
 * @method string getHostAddress()
 * @method string getAccountName()
 * @method string getSecurityToken()
 * @method string getDBInstanceId()
 * @method string getState()
 * @method string getTableName()
 * @method string getSqlType()
 * @method string getMinConsume()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getQueryKeyword()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getMaxConsume()
 * @method string getThreadID()
 * @method string getDBName()
 * @method string getMaxScanRows()
 */
class StartSqlLogDetailArchiveRequest extends \RpcAcsRequest
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
            'StartSqlLogDetailArchive',
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
     * @param string $columns
     *
     * @return $this
     */
    public function setColumns($columns)
    {
        $this->requestParameters['Columns'] = $columns;
        $this->queryParameters['Columns'] = $columns;

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
     * @param string $hostAddress
     *
     * @return $this
     */
    public function setHostAddress($hostAddress)
    {
        $this->requestParameters['HostAddress'] = $hostAddress;
        $this->queryParameters['HostAddress'] = $hostAddress;

        return $this;
    }

    /**
     * @param string $accountName
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->requestParameters['AccountName'] = $accountName;
        $this->queryParameters['AccountName'] = $accountName;

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
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->requestParameters['State'] = $state;
        $this->queryParameters['State'] = $state;

        return $this;
    }

    /**
     * @param string $tableName
     *
     * @return $this
     */
    public function setTableName($tableName)
    {
        $this->requestParameters['TableName'] = $tableName;
        $this->queryParameters['TableName'] = $tableName;

        return $this;
    }

    /**
     * @param string $sqlType
     *
     * @return $this
     */
    public function setSqlType($sqlType)
    {
        $this->requestParameters['SqlType'] = $sqlType;
        $this->queryParameters['SqlType'] = $sqlType;

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
     * @param string $queryKeyword
     *
     * @return $this
     */
    public function setQueryKeyword($queryKeyword)
    {
        $this->requestParameters['QueryKeyword'] = $queryKeyword;
        $this->queryParameters['QueryKeyword'] = $queryKeyword;

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
     * @param string $threadID
     *
     * @return $this
     */
    public function setThreadID($threadID)
    {
        $this->requestParameters['ThreadID'] = $threadID;
        $this->queryParameters['ThreadID'] = $threadID;

        return $this;
    }

    /**
     * @param string $dBName
     *
     * @return $this
     */
    public function setDBName($dBName)
    {
        $this->requestParameters['DBName'] = $dBName;
        $this->queryParameters['DBName'] = $dBName;

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
