<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDatabaseForInner
 *
 * @method string getResourceOwnerId()
 * @method string getAccountPrivilege()
 * @method string getAccountName()
 * @method string getDBInstanceId()
 * @method string getDBDescription()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getAccountPassword()
 * @method string getDBName()
 * @method string getCharacterSetName()
 */
class CreateDatabaseForInnerRequest extends \RpcAcsRequest
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
            'CreateDatabaseForInner',
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
     * @param string $accountPrivilege
     *
     * @return $this
     */
    public function setAccountPrivilege($accountPrivilege)
    {
        $this->requestParameters['AccountPrivilege'] = $accountPrivilege;
        $this->queryParameters['AccountPrivilege'] = $accountPrivilege;

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
     * @param string $dBDescription
     *
     * @return $this
     */
    public function setDBDescription($dBDescription)
    {
        $this->requestParameters['DBDescription'] = $dBDescription;
        $this->queryParameters['DBDescription'] = $dBDescription;

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
     * @param string $accountPassword
     *
     * @return $this
     */
    public function setAccountPassword($accountPassword)
    {
        $this->requestParameters['AccountPassword'] = $accountPassword;
        $this->queryParameters['AccountPassword'] = $accountPassword;

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
     * @param string $characterSetName
     *
     * @return $this
     */
    public function setCharacterSetName($characterSetName)
    {
        $this->requestParameters['CharacterSetName'] = $characterSetName;
        $this->queryParameters['CharacterSetName'] = $characterSetName;

        return $this;
    }
}
