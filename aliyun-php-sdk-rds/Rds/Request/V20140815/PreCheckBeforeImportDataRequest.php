<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PreCheckBeforeImportData
 *
 * @method string getResourceOwnerId()
 * @method string getImportDataType()
 * @method string getClientToken()
 * @method string getSourceDatabaseDBNames()
 * @method string getSourceDatabaseIp()
 * @method string getSourceDatabaseUserName()
 * @method string getDBInstanceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getSourceDatabasePassword()
 * @method string getSourceDatabasePort()
 */
class PreCheckBeforeImportDataRequest extends \RpcAcsRequest
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
            'PreCheckBeforeImportData',
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
     * @param string $importDataType
     *
     * @return $this
     */
    public function setImportDataType($importDataType)
    {
        $this->requestParameters['ImportDataType'] = $importDataType;
        $this->queryParameters['ImportDataType'] = $importDataType;

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
     * @param string $sourceDatabaseDBNames
     *
     * @return $this
     */
    public function setSourceDatabaseDBNames($sourceDatabaseDBNames)
    {
        $this->requestParameters['SourceDatabaseDBNames'] = $sourceDatabaseDBNames;
        $this->queryParameters['SourceDatabaseDBNames'] = $sourceDatabaseDBNames;

        return $this;
    }

    /**
     * @param string $sourceDatabaseIp
     *
     * @return $this
     */
    public function setSourceDatabaseIp($sourceDatabaseIp)
    {
        $this->requestParameters['SourceDatabaseIp'] = $sourceDatabaseIp;
        $this->queryParameters['SourceDatabaseIp'] = $sourceDatabaseIp;

        return $this;
    }

    /**
     * @param string $sourceDatabaseUserName
     *
     * @return $this
     */
    public function setSourceDatabaseUserName($sourceDatabaseUserName)
    {
        $this->requestParameters['SourceDatabaseUserName'] = $sourceDatabaseUserName;
        $this->queryParameters['SourceDatabaseUserName'] = $sourceDatabaseUserName;

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
     * @param string $sourceDatabasePassword
     *
     * @return $this
     */
    public function setSourceDatabasePassword($sourceDatabasePassword)
    {
        $this->requestParameters['SourceDatabasePassword'] = $sourceDatabasePassword;
        $this->queryParameters['SourceDatabasePassword'] = $sourceDatabasePassword;

        return $this;
    }

    /**
     * @param string $sourceDatabasePort
     *
     * @return $this
     */
    public function setSourceDatabasePort($sourceDatabasePort)
    {
        $this->requestParameters['SourceDatabasePort'] = $sourceDatabasePort;
        $this->queryParameters['SourceDatabasePort'] = $sourceDatabasePort;

        return $this;
    }
}
